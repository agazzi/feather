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

namespace Feather\Bundle\CoreBundle\Form;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\Validator\Constraints as Assert;
use Feather\Bundle\ServiceBundle\Services;

/**
 * @deprecated
 */
class TorrentFileType extends AbstractType implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $translator = $this->container->get('translator');

        $builder
            ->setMethod('POST')
            ->add('name', 'text', [
                'label' => false,
                'attr' => [
                    'required' => true,
                    'placeholder' => $translator->trans('form.torrent_add.name.placeholder'),
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('type', 'choice', [
                'choices' => [
                    Services\MediaService::TYPE_DVD      => $translator->trans('form.torrent_add.type_dvd'),
                    Services\MediaService::TYPE_BLURAY   => $translator->trans('form.torrent_add.type_bluray'),
                    Services\MediaService::TYPE_SERIES   => $translator->trans('form.torrent_add.type_series'),
                    Services\MediaService::TYPE_MUSIC    => $translator->trans('form.torrent_add.type_music'),
                    Services\MediaService::TYPE_PICTURE  => $translator->trans('form.torrent_add.type_picture'),
                    Services\MediaService::TYPE_GAMES    => $translator->trans('form.torrent_add.type_games'),
                    Services\MediaService::TYPE_BOOK     => $translator->trans('form.torrent_add.type_book'),
                    Services\MediaService::TYPE_SOFTWARE => $translator->trans('form.torrent_add.type_software'),
                ],
                'attr' => [
                    'required' => true,
                    'class' => 'form-control'
                ],
                'label' => false,
                'empty_value' => $translator->trans('form.torrent_add.type.placeholder'),
                'constraints' => [
                    new Assert\NotBlank()
                ]
            ])
            ->add('attachment', 'file', [
                'attr' => [
                    'required' => true,
                    'class' => 'form-control'
                ]
            ])
            ->add('add', 'submit', [
                'label' => $translator->trans('form.torrent_add.add.value'),
                'attr' => [
                    'class' => 'btn btn-primary btn-outline'
                ]
            ])
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'torrent_add';
    }
}
