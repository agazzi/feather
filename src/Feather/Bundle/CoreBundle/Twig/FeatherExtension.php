<?php

namespace Feather\Bundle\CoreBundle\Twig;

use Twig_Extension;
use Twig_SimpleFunction;
use Twig_SimpleFilter;
use Twig_Environment;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class FeatherExtension extends Twig_Extension implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('humanize', array($this, 'humanize')),
            new Twig_SimpleFilter('duration', array($this, 'duration')),
            new Twig_SimpleFilter('progressbar', array($this, 'progressbar')),
            new Twig_SimpleFilter('rate', array($this, 'rate')),
        ];
    }

    public function getFunctions()
    {
        return [
            new Twig_SimpleFunction('rate', [$this, 'rate']),
        ];
    }

    public function humanize($value, $state = null)
    {
        $type = [
            'B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'
        ];

        switch ($state) {
            case 'name':
                foreach (self::TORRENT_SERIALIZER as $unit) {
                    if ($unit == '.') {
                        $value = str_replace($unit, ' ', $value);
                    } else {
                        $value = str_replace($unit, '', $value);
                    }
                }

                $value = rtrim($value, " \r");
                $value = strtolower($value);
                $value = str_replace(' ', '_', $value);
                break;

            case 'size':
                $i = 0;

                while($value >= 1024)
                {
                    $value /= 1024;
                    $i++;
                }

                $value = number_format($value, 1);
                $value = $value . ' ' . $type[$i];
                break;
        }


        return $value;
    }

    public function rate($side, $torrent)
    {

        switch ($side) {
            case 'up':
                $speed = $torrent->getUploadRate();
                break;

            case 'down':
                $speed = $torrent->getDownloadRate();
                break;
        }

        $type = [
            'B', 'KB/s', 'MB/s', 'GB/s', 'TB/s', 'PB/s', 'EB/s', 'ZB/s', 'YB/s'
        ];

        $i = 0;

        while($speed >= 1024)
        {
            $speed /= 1024;
            $i++;
        }

        if ($speed == '0.0') {
            return '~';
        }

        $speed = number_format($speed, 1);
        $speed = $speed . ' ' . $type[$i];

        return $speed;
    }

    public function duration($torrent)
    {
        $translator = $this->container->get('translator');
        $data = $this->container->get('service.transmission')->getData($torrent);

        $duration = $torrent->getEta();


        if ($torrent->isSeeding()) {
            if (!$data->isValid()) {
                return $translator->trans('global_duration_checking');
            }

            return $translator->trans('global_duration_seeding');
        }

        if ($torrent->isStopped()) {
            return $translator->trans('global_duration_stopped');
        }

        if ($torrent->isChecking()) {
            return $translator->trans('global_duration_checking');
        }

        if ($torrent->isFinished()) {
            return $translator->trans('global_duration_finished');
        }

        if ($torrent->getEta() == -1 ||
            $torrent->getEta() == -2) {
            return $translator->trans('global_duration_starting');
        }


        $duration = gmdate("H:i:s", $duration);
        $duration = explode(':', $duration);

        $h = $duration[0];
        $m = $duration[1];
        $s = $duration[2];

        if ($h >= 02) {
            return sprintf('%d %s', $h, $translator->trans('global_duration_hours'));
        } elseif ($h == 01) {
            return sprintf('%d %s', $h, $translator->trans('global_duration_hour'));
        } elseif ($m >= 02) {
            return sprintf('%d %s', $m, $translator->trans('global_duration_minutes'));
        } elseif ($m == 01) {
            return sprintf('%d %s', $m, $translator->trans('global_duration_minute'));
        } elseif ($s >= 02) {
            return sprintf('%d %s', $s, $translator->trans('global_duration_seconds'));
        } elseif ($s == 01) {
            return sprintf('%d %s', $s, $translator->trans('global_duration_second'));
        }

        return sprintf('~');
    }

    public function progressbar($value)
    {
        if ($value >= 90) {
            return 'success';
        } elseif ($value >= 60) {
            return 'primary';
        } elseif ($value >= 30) {
            return 'warning';
        } else {
            return 'danger';
        }

        return $value;
    }


    public function getName()
    {
        return 'feather_extension';
    }

    const TORRENT_SERIALIZER = [
        '[ www Cpasbien pw ]',
        '[ www.CpasBien.pw ]',
        'pw',
        '[',
        ']',
        'pe',
        'www',
        'md',
        'MeMe',
        'Cpasbien',
        'MULTi',
        'Slay3R',
        'BDRiP',
        'Wita',
        'XViD',
        'AViTECH',
        '-',
        'AC3SVR',
        '1080p',
        'XviD',
        'TRUE',
        'WEBRip',
        'XviDWita',
        'LD',
        'avi',
        'FRENCH',
        '720p',
        'BluRay',
        'x264',
        'LOST',
        'mkv',
        'DVDRiP',
        'ALBOY',
        '.'
    ];
}
