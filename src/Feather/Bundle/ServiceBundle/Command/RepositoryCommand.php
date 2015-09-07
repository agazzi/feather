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

        $finder = new Finder();
        $fs = new Filesystem();

        foreach ($torrents as $torrent) {
            $data = $transmission->getData($torrent);

            $repository = $path . $data->gethash();

            if ($torrent->isFinished()) {
                if ($fs->exists($repository)) {
                    $files = $finder->files()->in($repository);

                    switch ($data->getType()) {
                        case Media::TYPE_DVD:
                            foreach ($files as $file) {
                                $base = sprintf("%s/%s.%s", $file->getPath(), $data->getFilename(), Media::EXT_DVD);

                                if (!$fs->exists($base)) {
                                    if ($file->getExtension() == Media::EXT_DVD) {
                                        $fs->rename($file->getRealPath(), $base);
                                    } else {
                                        $fs->remove($file);
                                    }
                                }
                            }
                            break;

                        case Media::TYPE_BLURAY:
                            foreach ($files as $file) {
                                $base = sprintf("%s/%s.%s", $file->getPath(), $data->getFilename(), Media::EXT_BLURAY);

                                if (!$fs->exists($base)) {
                                    if ($file->getExtension() == Media::EXT_BLURAY) {
                                        $fs->rename($file->getRealPath(), $base);
                                    } else {
                                        $fs->remove($file);
                                    }
                                }
                            }
                            break;

                        case Media::TYPE_GAMES:
                            $filename = sprintf("%s.%s", $data->getFilename(), Media::EXT_ZIP);
                            $base = sprintf("%s/%s", $repository, $filename);

                            $process = new Process(sprintf("zip -r /tmp/%s %s", $filename, $repository . '/*'));
                            $process->setTimeout(3600);
                            $process->run();

                            $fs->remove($repository . '/*');
                            $fs->copy(sprintf("/tmp/%s", $filename), $repository . '/');
                            $fs->remove(sprintf("/tmp/%s", $filename));
                            break;
                    }
                }
            }
        }
    }
}
