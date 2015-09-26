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
use Feather\Bundle\ServiceBundle\Entity\User;
use Transmission\Model\Torrent as Torrent;
use Feather\Bundle\ServiceBundle\Entity\Torrent as Data;
use Feather\Bundle\ServiceBundle\Services\MediaService as Media;

use Datetime;

/**
 * @author William Rudent <william.rudent@gmail.com>
 */
class TransmissionService extends Service
{
    /**
     * @var $upload
     */
    const UPLOAD_DIR = '/upload/';

    /**
     * Load the transmission connexion
     *
     * @author William Rudent <william.rudent@gmail.com>
     */
    public function load()
    {
        $this->transmission = $this->get('transmission');
    }

    /**
     * Get list of all torrents
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return array $torrents
     */
    public function getTorrents()
    {
        self::load();

        return $this->transmission->all();
    }

    /**
     * Get torrent by id
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $hash
     *
     * @return Torrent $torrents
     */
    public function getTorrentById($hash)
    {
        self::load();

        return $this->transmission->get($hash);
    }

    /**
     * Get torrent by id
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param integer $id
     *
     * @return Torrent $torrents
     */
    public function getTorrent(Data $data)
    {
        self::load();

        return $this->transmission->get($data->getUid());
    }

    /**
     * Get list of all datas
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return array $datas
     */
    public function getDatas()
    {
        $em = $this->getDoctrine();

        $datas = $em->getRepository('FeatherServiceBundle:Torrent');

        return $datas->findAll();
    }

    /**
     * Get torrent data by torrent
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Torrent $torrent
     *
     * @return Torrent $torrents
     */
    public function getData(Torrent $torrent)
    {
        $em = $this->getDoctrine();

        $data = $em->getRepository('FeatherServiceBundle:Torrent');

        return $data->findOneBy([
            'uid' => $torrent->getHash()
        ]);
    }

    /**
     * Get torrent messages by data
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Data $data
     *
     * @return Torrent $torrents
     */
    public function getMessages(Data $data)
    {
        $em = $this->getDoctrine();

        $messages = $em->getRepository('FeatherServiceBundle:Message')->getMessages($data);

        return $messages;
    }

    /**
     * Get torrent data by torrent
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param integer $uid
     *
     * @return Torrent $torrents
     */
    public function getDataByid($uid)
    {
        $em = $this->getDoctrine();

        $data = $em->getRepository('FeatherServiceBundle:Torrent');

        return $data->findOneBy([
            'uid' => $uid
        ]);
    }

    /**
     * Remove torrent and data associated
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $hash
     *
     * @return bool true
     */
    public function remove($hash)
    {
        $em = $this->getDoctrine()->getManager();

        $this->get('transmission')->get($hash)->remove(true);

        $torrent = $em->getRepository('FeatherServiceBundle:Torrent')->findOneBy([
            'uid' => $hash
        ]);

        $em->remove($torrent);
        $em->flush();

        return true;
    }

    /**
     * Add torrent
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Torrent $torrent
     *
     * @return bool
     */
    public function add($torrent)
    {
        $file = $this->get('service.system')->upload($torrent->getAttachment());
        $twig = $this->get('feather.twig.feather_extension');
        $user = $this->get('service.user')->getUser();
        $hash = $this->get('service.system')->hash($file);

        $em = $this->getDoctrine()->getManager();
        $transmission = $this->process($file, $hash);

        $torrent->setUser($user);
        $torrent->setDate(new Datetime('now'));
        $torrent->setUid($transmission->getHash());
        $torrent->setHash($hash);
        $torrent->setValid(false);

        switch ($torrent->getType()) {
            case Media::TYPE_DVD:
                $filename = $twig->humanize($torrent->getName(), 'name') . '.' . Media::EXT_DVD;
                $torrent->setFilename($filename);
                $torrent->setCover(Media::TYPE_DVD);
                break;

            case Media::TYPE_BLURAY:
                $filename = $twig->humanize($torrent->getName(), 'name') . '.' . Media::EXT_BLURAY;
                $torrent->setFilename($filename);
                $torrent->setCover(Media::TYPE_BLURAY);
                break;

            case Media::TYPE_GAMES:
                $filename = $twig->humanize($torrent->getName(), 'name') . '.' . Media::EXT_ZIP;
                $torrent->setFilename($filename);
                $torrent->setCover(Media::TYPE_GAMES);
                break;
        }

        $torrent->setAttachment($file);

        $em->persist($torrent);
        $em->flush();

        return true;
    }

    /**
     * Process torrent into the transmission queue
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param string $file
     *
     * @return Torrent $torrent
     */
    public function process($file, $hash)
    {
        $file = $this->get('request')->getSchemeAndHttpHost() . self::UPLOAD_DIR . $file;
        $transmission = $this->get('transmission');
        $session = $transmission->getSession();

        $session->setDownloadDir($this->getParameter('transmission_download') . $hash);
        $session->save();

        $torrent = $transmission->add($file);

        return $torrent;
    }

    /**
     * Validate torrent
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Torrent $torrent
     *
     * @return bool
     */
    public function validate(Torrent $torrent)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('FeatherServiceBundle:Torrent')->findOneBy([
            'uid' => $torrent->getHash()
        ]);

        if (!$data->isValid()) {
            $data->setValid(true);

            $em->persist($data);
            $em->flush();

            return true;
        }

        return false;
    }
}
