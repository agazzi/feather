<?php

namespace App\FeatherInstallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;

class InstallController extends Controller
{
	private $app_cache_path;
	private $app_kernel_path;
	private $app_base_path;

	private $app_bin_transmission_daemon;
	private $app_bin_php5;
	private $app_bin_apache2;

	private function getPathPermission($path)
	{
		return substr(sprintf('%o', fileperms($path)), -4);
	}

	private function ifDirExist($dir)
	{
		if (!is_dir($dir)) {
   			return false;        
		}
		return true;
	}

    public function installAction(Request $request)
    {
    	// Initialize filesystem Manager
        $filesystem = new Filesystem();

        $host = $request->headers->get('host') . $this->container->get('router')->getContext()->getBaseUrl();

        // check prerequire exist
        if ($this->ifDirExist('/var/lib/transmission-daemon')) $this->app_bin_transmission_daemon = 1; else $this->app_bin_transmission_daemon = 0;
        if ($this->ifDirExist('/var/lib/php5')) $this->app_bin_php5 = 1; else $this->app_bin_php5 = 0;
        if ($this->ifDirExist('/var/run/apache2')) $this->app_bin_apache2 = 1; else $this->app_bin_apache2 = 0;

    	$this->app_cache_path = $this->getPathPermission($this->container->get('kernel')->getRootdir() . '/cache');
    	$this->app_kernel_path = $this->getPathPermission($this->container->get('kernel')->getRootdir());
    	$this->app_base_path = $this->getPathPermission($this->container->get('kernel')->getRootdir() . '/../web');

    	// Return install.html.twig
        return $this->render('AppFeatherInstallBundle:Install:install.html.twig', array(
        	// Path to the kernel, cache and web based
        	'app_cache_path' => $this->app_cache_path,
        	'app_kernel_path' => $this->app_kernel_path,
        	'app_base_path' => $this->app_base_path,

        	// var of the active prerequire daemon
        	'app_bin_transmission_daemon' => $this->app_bin_transmission_daemon,
        	'app_bin_php5' => $this->app_bin_php5,
        	'app_bin_apache2' => $this->app_bin_apache2,

        	'host' => $host,
        ));    
    }
}
