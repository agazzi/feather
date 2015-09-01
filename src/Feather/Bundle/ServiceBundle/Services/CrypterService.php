<?php

/*
 * This file is part of Feather application.
 *
 * (c) William Rudent <william.rudent@gmail.com>
 *
 * Copyright © 2015 William Rudent <william.rudent@gmail.com>
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and
 * associated documentation files (the “Software”), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or
 * sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject
 * to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * The Software is provided “as is”, without warranty of any kind, express or implied, including but not
 * limited to the warranties of merchantability, fitness for a particular purpose and noninfringement.
 * In no event shall the authors or copyright holders be liable for any claim, damages or other liability,
 * whether in an action of contract, tort or otherwise, arising from, out of or in connection with the
 * software or the use or other dealings in the Software. »
 */

namespace Feather\Bundle\ServiceBundle\Services;

use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author William Rudent <william.rudent@gmail.com>
 */
class CrypterService extends Controller
{
    /**
     * Secret key used for encryption / decryption
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @var string
     */
    private $key;

    /**
     * Mcrypt generated IV
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @var string
     */
    private $_iv;

    /**
     * The constructor
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @throws \Exception
     */
    public function __construct() {
        if (!function_exists('mcrypt_encrypt')) {
            throw new \Exception("Mcrypt library is not loaded on your server !");
        } else {
            $this->_iv = mcrypt_create_iv(32);
        }

    }

    /**
     * Set key
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $key
     *
     * @return key
     */
    function setKey($key) {
        $this->key = $key;
    }

    /**
     * Encrypt
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $input
     *
     * @return string
     */
    function encrypt($input) {
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
            $this->key, $input, MCRYPT_MODE_ECB, $this->_iv));
    }

    /**
     * Decrypt
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $input
     *
     * @return string
     */
    function decrypt($input) {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,
            $this->key, base64_decode($input), MCRYPT_MODE_ECB, $this->_iv));
    }

    /**
     * Digest
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $token
     *
     * @return string
     */
    function digest($token) {
        $digest = new MessageDigestPasswordEncoder;
        $key = $digest->encodePassword($this->getParameter('secret'), $token);

        if (strlen($key) > 32) {
            $key = substr($key, 0, 32);
        }

        return $key;
    }
}
