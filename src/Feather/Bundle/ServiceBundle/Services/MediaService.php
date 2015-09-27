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

use Symfony\Bundle\FrameworkBundle\Controller\Controller as Service;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Datetime;

/**
 * @author William Rudent <william.rudent@gmail.com>
 */
class MediaService extends Service
{
    /**
     * @var integer
     */
    const TYPE_DVD = 1;

    /**
     * @var integer
     */
    const TYPE_BLURAY = 2;

    /**
     * @var integer
     */
    const TYPE_SERIES = 3;

    /**
     * @var integer
     */
    const TYPE_MUSIC = 4;

    /**
     * @var integer
     */
    const TYPE_PICTURE = 5;

    /**
     * @var integer
     */
    const TYPE_GAMES = 6;

    /**
     * @var integer
     */
    const TYPE_BOOK = 7;

    /**
     * @var integer
     */
    const EXT_DVD = 'avi';

    /**
     * @var integer
     */
    const EXT_BLURAY = 'mkv';

    /**
     * @var integer
     */
    const EXT_ZIP = 'zip';

    /**
     * @var integer
     */
    const TYPE_TORRENT = 'application/x-bittorrent';

    /**
     * Post comment
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return boolean
     */
    public function postComment($message, $torrent)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->get('service.user')->getUser();
        $data = $this->get('service.transmission')->getData($torrent);

        $message->setUser($user);
        $message->setDate(new Datetime('now'));
        $message->setTorrent($data);

        $em->persist($message);
        $em->flush();

        return true;
    }
}
