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
    private $_user_password;
    private $_transmission_dir;
    private $_transmission_tmp;
    private $_transmission_hostname;
    private $_transmission_port;
    private $_transmission_authentication;
    private $_transmission_username;
    private $_transmission_password;

    private $basepath;

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
        // Check Dataspace available
        $system_diskspace = disk_free_space('/');

        // Determine the os architectur compare of x86 and x86_64 bits
        $system_architecture = 8 * PHP_INT_SIZE;

        return $this->render('AppFeatherInstallBundle:Install:step.html.twig', array(
            'system_os' => PHP_OS,
            'system_diskspace' => $system_diskspace,
            'system_architecture' => $system_architecture,
        ));    
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
        $transmission_hostname = "127.0.0.1";
        $transmission_port = "9091";
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
                    $transmission_username = "transmission";
                    $transmission_password = "transmission";
                }     
                else {
                    if ($request->request->get('_transmission_hostname'))
                        $transmission_hostname = $request->request->get('_transmission_hostname');
                    if ($request->request->get('_transmission_port'))
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

                // Instance of basepath
                $this->basepath = $this->container->get('kernel')->getRootdir() . "/config";

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

                // Create download repository
                if (!is_dir($this->_transmission_dir)) {
                    if (!@mkdir($this->_transmission_dir)) {
                        // Return flashbag info_box
                        $session = $request->getSession();
                        $session->getFlashBag()->add('error', 'Vous n\'avez pas les permissions suffisantes pour créer ce dossier de téléchargement. Veuiller en choisir un autre ou vous autoriser les droit de création!');

                        return $this->redirect($this->generateUrl('app_feather_install_step'));
                    }
                    else
                        $filesystem->mkdir($this->_transmission_dir, $mode = 0777);
                        if (!is_dir($this->_transmission_tmp)) 
                            $filesystem->mkdir($this->_transmission_tmp, $mode = 0777);
                }
 
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
        // Seting up transmission config file (.yml)
        $file_path = $this->basepath . "/transmission.yml";
        $file_open = fopen($file_path, "r+");
        ftruncate($file_open, 0);

        // Initialize transmission setting array
        $transmission_setting_ouptput = array(
            "transmission_dir: " . $this->_transmission_dir, 
            "transmission_tmp: " . $this->_transmission_tmp, 
            "transmission_hostname: " . $this->_transmission_hostname, 
            "transmission_port: " . $this->_transmission_port, 
            "transmission_authentication: " . $this->_transmission_authentication, 
            "transmission_username: " . $this->_transmission_username, 
            "transmission_password: " . $this->_transmission_password,
        );

        // Put settings into the config file
        fputs($file_open, "parameters:\n");
        for ($i = 0 ; $i < 7 ; $i++)
           fputs($file_open, "    " . $transmission_setting_ouptput[$i]."\n");
        fclose($file_open);


        // Seting up transmission config file (.yml)
        $file_path = $this->basepath . "/feather.yml";
        $file_open = fopen($file_path, "r+");
        ftruncate($file_open, 0);

        // Initialize transmission setting array
        $transmission_setting_ouptput = array(
            "user_username: " . $this->_user_username, 
            "user_password: " . $this->_user_password, 
        );

        // Put settings into the config file
        fputs($file_open, "parameters:\n");
        for ($i = 0 ; $i < 2 ; $i++)
           fputs($file_open, "    " . $transmission_setting_ouptput[$i]."\n");
        fclose($file_open);

        $filesystem = new Filesystem();
        $filesystem->touch($this->basepath . "/settings.json");

        // Seting up transmission config file (.yml)
        $file_path = $this->basepath . "/settings.json";
        $file_open = fopen($file_path, "r+");
        ftruncate($file_open, 0);

        // Initialize transmission setting array
        $transmission_setting_ouptput = array(
            "\"alt-speed-down\": 50,", 
            "\"alt-speed-enabled\": false,", 
            "\"alt-speed-time-begin\": 540,", 
            "\"alt-speed-time-day\": 127,", 
            "\"alt-speed-time-enabled\": false,", 
            "\"alt-speed-time-end\": 1020,", 
            "\"alt-speed-up\": 50,", 
            "\"bind-address-ipv4\": \"0.0.0.0\",", 
            "\"bind-address-ipv6\": \"::\",", 
            "\"blocklist-enabled\": false,", 
            "\"blocklist-url\": \"http://www.example.com/blocklist\",", 
            "\"cache-size-mb\": 4,", 
            "\"dht-enabled\": true,", 
            "\"download-dir\": \"" . $this->_transmission_dir . "\",", 
            "\"download-limit\": 100,", 
            "\"download-limit-enabled\": 0,", 
            "\"download-queue-enabled\": true,", 
            "\"download-queue-size\": 15,", 
            "\"encryption\": 1,", 
            "\"idle-seeding-limit\": 30,", 
            "\"idle-seeding-limit-enabled\": false,", 
            "\"incomplete-dir\": \"" . $this->_transmission_tmp . "\",", 
            "\"incomplete-dir-enabled\": true,", 
            "\"lpd-enabled\": false,", 
            "\"max-peers-global\": 200,", 
            "\"message-level\": 2,", 
            "\"peer-congestion-algorithm\": \"\",", 
            "\"peer-limit-global\": 240,", 
            "\"peer-limit-per-torrent\": 60,", 
            "\"peer-port\": 51413,", 
            "\"peer-port-random-high\": 65535,", 
            "\"peer-port-random-low\": 49152,", 
            "\"peer-port-random-on-start\": false,", 
            "\"peer-socket-tos\": \"default\",", 
            "\"pex-enabled\": true,", 
            "\"port-forwarding-enabled\": false,", 
            "\"preallocation\": 1,", 
            "\"prefetch-enabled\": 1,", 
            "\"queue-stalled-enabled\": true,", 
            "\"queue-stalled-minutes\": 30,", 
            "\"ratio-limit\": 2,", 
            "\"ratio-limit-enabled\": false,", 
            "\"rename-partial-files\": true,", 
            "\"rpc-authentication-required\": " . $this->_transmission_authentication . ",", 
            "\"rpc-bind-address\": \"0.0.0.0\",", 
            "\"rpc-enabled\": true,", 
            "\"rpc-password\": \"" . $this->_transmission_password . "\",", 
            "\"rpc-port\": " . $this->_transmission_port . ",", 
            "\"rpc-url\": \"/transmission/\",", 
            "\"rpc-username\": \"" . $this->_transmission_username . "\",", 
            "\"rpc-whitelist\": \"127.0.0.1\",", 
            "\"rpc-whitelist-enabled\": false,", 
            "\"scrape-paused-torrents-enabled\": true,", 
            "\"script-torrent-done-enabled\": false,", 
            "\"script-torrent-done-filename\": \"\",", 
            "\"seed-queue-enabled\": false,", 
            "\"seed-queue-size\": 10,", 
            "\"speed-limit-down\": 100,", 
            "\"speed-limit-down-enabled\": false,", 
            "\"speed-limit-up\": 100,", 
            "\"speed-limit-up-enabled\": false,", 
            "\"start-added-torrents\": true,", 
            "\"trash-original-torrent-files\": false,", 
            "\"umask\": 18,", 
            "\"upload-limit\": 100,", 
            "\"upload-limit-enabled\": 0,", 
            "\"upload-slots-per-torrent\": 14,", 
            "\"utp-enabled\": true", 
        );

        // Put settings into the config file
        fputs($file_open, "{\n");
        for ($i = 0 ; $i < 68 ; $i++)
           fputs($file_open, "    " . $transmission_setting_ouptput[$i]."\n");
        fputs($file_open, "}\n");
        fclose($file_open);

        // Return process exec action
        // return $this->redirect($this->generateUrl('app_feather_install_step_final')); 
        return $this->stepfinalAction();
    }

    private function stepfinalAction()
    {
        // Initialize filesystem Manager
        $filesystem = new Filesystem();

        // Remove install file from base of symfony
        $filesystem->remove($this->basepath . "/../../INSTALL");

        // Return congratulation page
        return $this->render('AppFeatherInstallBundle:Install:stepfinal.html.twig', array(
            'username' => $this->_user_username,
            'password' => $this->_user_password,
        ));
    }
}