<?php

namespace App\FeatherInstallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Filesystem\Filesystem;
use Transmission\Client;
use Transmission\Transmission;

class InstallController extends Controller
{
	private $app_cache_path;
	private $app_kernel_path;
	private $app_base_path;

	private $app_bin_transmission_daemon;
	private $app_bin_php5;
	private $app_bin_apache2;

    private $_user_username;

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

        // Load Core if INSTALL doesn't exist
        if (!$filesystem->exists('../INSTALL')) {
        return $this->redirect($this->generateUrl('app_feather_login')); } else {

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

            // Host path informations
        	'host' => $host,
        )); }
    }

    public function stepAction()
    {
        return $this->render('AppFeatherInstallBundle:Install:step.html.twig');    
    }

    public function processAction(Request $request)
    {
        // Initialize filesystem Manager
        $filesystem = new Filesystem();

        // init var
        $user_username = "";
        $user_password = "";
        $transmission_dir = "";
        $transmission_tmp = "";
        $transmission_hostname = "";
        $transmission_port = "";
        $transmission_authentication = "";
        $transmission_username = "";
        $transmission_password = "";

        // Load Core if INSTALL doesn't exist
        if (!$filesystem->exists('../INSTALL')) {
            return $this->redirect($this->generateUrl('app_feather_login'));
        } 
        else 
        {
            // Check transmissions settings
            if ($request->isMethod('POST')) {
                if ($request->request->get('_transmission_lostinfo') == true) {
                    $transmission_hostname = "127.0.0.1";
                    $transmission_port = "9091";
                    $transmission_authentication = true;
                    $transmission_username = "transmission0";
                    $transmission_password = "transmission";
                }     
                else {
                    $transmission_hostname = $request->request->get('_transmission_hostname');
                    $transmission_port = $request->request->get('_transmission_port');
                    if ($request->request->get('_transmission_authentication') == true) {
                        $transmission_username = $request->request->get('_transmission_username');
                        $transmission_password = $request->request->get('_transmission_password');
                    }
                }

                // Set username and password value
                $user_username = $request->request->get('_user_username');
                $user_password = $request->request->get('_user_password');

                // Set dir and tmp value
                $transmission_dir = $request->request->get('_transmission_dir');
                $transmission_tmp = $transmission_dir . "/tmp";

                // Turn on/off authentication transmission
                if ($transmission_authentication == true) {
                    // Initialize client infos
                    $client = new Client($transmission_hostname, $transmission_port); 
                    $client->authenticate($transmission_username, $transmission_password);

                    // Intialize transmission
                    $transmission = new Transmission();
                    $transmission->setClient($client);
                }
                else $transmission = new Transmission();

                // Instance of form setting
                $this->_user_username = $user_username;
                $this->_user_password = $user_password;

                $this->_transmission_dir = $transmission_dir;
                $this->_transmission_tmp = $transmission_tmp;
                $this->_transmission_hostname = $transmission_hostname;
                $this->_transmission_port = $transmission_port;

                if ($transmission_authentication == true)
                    $this->_transmission_authentication = "true";
                else
                    $this->_transmission_authentication = "false";
                $this->_transmission_username = $transmission_username;
                $this->_transmission_password = $transmission_password;

                // Redirect to the next step if all checkpoints is green
                return $this->processexecAction();
            }
            else {
                // Return flashbag info_box
                $session = $request->getSession();
                $session->getFlashBag()->add('error', 'Merci de saisir correctements les informations.');

                return $this->redirect($this->generateUrl('app_feather_install_step')); 
            }
        }
    }
    private function processexecAction()
    {
        echo $this->_transmission_authentication;
        die();
        return new Response('ok');
    }
}