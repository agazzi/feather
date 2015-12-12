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

namespace Feather\Bundle\ServiceBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;
use Symfony\Component\Finder\Finder;

use Feather\Bundle\ServiceBundle\Services\MediaService as Media;
use Feather\Bundle\ServiceBundle\Entity;
use SplFileInfo;

/**
 * @author William Rudent <william.rudent@gmail.com>
 */
class RepositoryCommand extends ContainerAwareCommand
{
    /**
     *
     * @see Command
     *
     * @author William Rudent <william.rudent@gmail.com>
     */
    protected function configure()
    {
        $this
            ->setName('repository:sync')
            ->setDescription('Sync repository of transmission')
        ;
    }


    /**
     *
     * @see Command
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param InputInterface $input
     *
     * @param OutputInterface $output
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $transmission = $this->getContainer()->get('service.transmission');
        $torrents = $transmission->getTorrents();
        $path = $this->getContainer()->getParameter('transmission_download');

        $this->finder = new Finder();
        $this->filesystem = new Filesystem();

        foreach ($torrents as $torrent) {
            $data = $transmission->getData($torrent);

            $repository = $path . $data->gethash();

            if ($torrent->isFinished()) {
                if (!$data->isValid()) {
                    if ($this->filesystem->exists($repository)) {
                        $files = $this->finder->files()->in($repository);

                        switch ($data->getType()) {
                            case Media::TYPE_DVD:
                                foreach ($files as $file) {
                                    $this->convertDVD($data, $file, $path);
                                }
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_BLURAY:
                                foreach ($files as $file) {
                                    $this->convertBLURAY($data, $file, $path);
                                }
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_SERIES:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_MUSIC:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_PICTURE:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_GAMES:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_BOOK:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;

                            case Media::TYPE_SOFTWARE:
                                $this->convertZIP($data, $path);
                                $transmission->validate($torrent);
                                break;
                        }
                    }
                }
            }
        }
    }

    /**
     *
     * @see Command
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Entity/Torrent $torrent
     *
     * @param SplFileInfo $file
     *
     * @param string $download
     *
     * @return boolean
     */
    protected function convertDVD(Entity\Torrent $torrent, SplFileInfo $file, $download)
    {
        $repository = $download . $torrent->gethash();
        $filename = $torrent->getFilename();
        $base = sprintf("%s/%s", $file->getPath(), $filename);

        if (!$this->filesystem->exists($base)) {
            if ($file->getExtension() == Media::EXT_DVD) {
                $this->filesystem->rename($file->getRealPath(), $base);
            } else {
                $this->filesystem->remove($file);
            }

            return true;
        }

        return false;
    }

    /**
     *
     * @see Command
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Entity/Torrent $torrent
     *
     * @param SplFileInfo $file
     *
     * @param string $download
     *
     * @return boolean
     */
    protected function convertBLURAY(Entity\Torrent $torrent, SplFileInfo $file, $download)
    {
        $repository = $download . $torrent->gethash();
        $filename = $torrent->getFilename();
        $base = sprintf("%s/%s", $file->getPath(), $filename);

        if (!$this->filesystem->exists($base)) {
            if ($file->getExtension() == Media::EXT_BLURAY) {
                $this->filesystem->rename($file->getRealPath(), $base);
            } else {
                $this->filesystem->remove($file);
            }

            return true;
        }

        return false;
    }

    /**
     *
     * @see Command
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @param Entity/Torrent $torrent
     *
     * @param string $download
     *
     * @return boolean
     */
    protected function convertZIP(Entity\Torrent $torrent, $download)
    {
        $repository = $download . $torrent->gethash();
        $filename = $torrent->getFilename();
        $base = sprintf("%s/%s", $repository, $filename);

        $process = new Process(sprintf("zip -r %s%s %s", $path, $filename, $repository . '/*'));
        $process->setTimeout(3600);
        $process->run();

        $process = new Process(sprintf("mv %s%s %s", $path, $filename, $repository . '/'));
        $process->setTimeout(60);
        $process->run();

        return true;
    }
}
