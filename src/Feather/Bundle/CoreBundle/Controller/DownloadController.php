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
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/torrent")
 * @Security("has_role('ROLE_USER')")
 *
 * @author William Rudent <william.rudent@gmail.com>
 */
class DownloadController extends Controller
{
    /**
     * @Route("/download", name="download")
     * @Template()
     *
     * Load download index
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Template
     */
    public function indexAction()
    {
        $form = $this->createForm('torrent_add', $this->get('torrent.listener'), [
            'action' => $this->generateUrl('add')
        ]);

        return [
            'form' => $form->createView()
        ];
    }

    /**
     * @Route("/delete/{hash}/{source}", name="delete")
     *
     * Delete torrent action
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $hash
     *
     * @param string $source
     *
     * @return Route $source
     */
    public function deleteAction($hash, $source = null)
    {
        $this->get('service.transmission')->remove($hash);

        if ($source) {
            return $this->redirect($this->generateUrl($source));
        }

        return $this->redirect($this->generateUrl('download'));
    }

    /**
     * @Route("/download/file/{hash}", name="download_file")
     *
     * Download torrent action
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $hash
     *
     * @return Route download
     */
    public function downloadAction($hash)
    {
        $torrent = $this->get('service.transmission')->getTorrentById($hash);

        $response = $this->get('service.system')->download($torrent);

        if ($response) {
            return $response;
        }

        $referer = $this->getRequest()->headers->get('referer');;

        return $this->redirect($referer);;
    }

    /**
     * @Route("/add", name="add")
     *
     * Add torrent page
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Tempalte
     */
    public function addAction()
    {
        $torrent = $this->get('torrent.listener');

        $form = $this->createForm('torrent_add', $torrent);
        $form->handleRequest($this->getRequest());

        if ($form->isValid()) {
            $this->get('service.transmission')->add($torrent);
        }

        return $this->redirect($this->generateUrl('download'));
    }

    /**
     * @Route("/list", name="list")
     * @Template()
     *
     * List torrents
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Tempalte
     */
    public function tableAction()
    {
        return [];
    }
}
