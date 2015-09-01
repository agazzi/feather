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

namespace Feather\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Security("has_role('ROLE_USER')")
 *
 * @author William Rudent <william.rudent@gmail.com>
 */
class MediaController extends Controller
{
    /**
     * @Route("/browser/{type}", name="browser")
     * @Template()
     *
     * Load browsing index
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Template
     */
    public function indexAction($type = null)
    {
        return [
            'type' => $type
        ];
    }


    /**
     * @Route("panel.tpl", name="panel")
     * @Template()
     *
     * Load index page
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Template
     */
    public function panelAction(Request $request)
    {
        $torrent = $this->get('service.transmission')->getTorrent($request->get('id'));
        $data = $this->get('service.transmission')->getData($torrent);

        return [
            'torrent' => $torrent,
            'data' => $data
        ];
    }
}
