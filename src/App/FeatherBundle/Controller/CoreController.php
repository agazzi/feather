<?php

namespace App\FeatherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Transmission\Client;
use Transmission\Transmission;

class CoreController extends Controller
{
	private $username;
	private $password;

    /**
     * @Security("has_role('ROLE_SUPER_ADMIN')")
     */
    public function coreAction()
    {
        // Initialize filesystem Manager
    	$filesystem = new Filesystem();

        // Load Core if config.yml exist
        if ($filesystem->exists('../INSTALL')) {
        return $this->redirect($this->generateUrl('app_feather_install')); } else {

        // Checking authentication parameter
    	$transmission_authentication = $this->container->getParameter('transmission_authentication');

    	// Get download and  temporary path
    	$transmission_dir = $this->container->getParameter('transmission_dir');
    	$transmission_tmp = $this->container->getParameter('transmission_tmp');

    	// Checking if transmission authentication is enabled
    	if ($transmission_authentication == true) {
    		$this->username = $this->container->getParameter('transmission_username');
    		$this->password = $this->container->getParameter('transmission_password');
    		
    		// Initialize Client 
    		if (!isset($client)) {
    			$client = new Client();
				$client->authenticate($this->username, $this->password);
			}
    	}
  	
    	// Initialize Transmission Connector
		$transmission = new Transmission();
		$transmission->setClient($client);

		// Configuring many var of transmission and save as session
		$session = $transmission->getSession();
		$session->setDownloadDir($transmission_dir);
		$session->setIncompleteDir($transmission_tmp);
		$session->setIncompleteDirEnabled(true);
		$session->save();

		// Get list of current torrents in queue
		$torrents = $transmission->all();

		// Display total disk free space left
		$diskspace = disk_free_space($transmission_dir);

		// Return twig file
        return $this->render('AppFeatherBundle:Core:index.html.twig', array(
        	'torrents' => $torrents,
        	'diskspace' => $diskspace,
        )); }
    }

    public function addAction(Request $request)
    {
    	// Checking authentication parameter
    	$transmission_authentication = $this->container->getParameter('transmission_authentication');

    	// Get download and  temporary path
    	$transmission_dir = $this->container->getParameter('transmission_dir');
    	$transmission_tmp = $this->container->getParameter('transmission_tmp');

    	// Checking if transmission authentication is enabled
    	if ($transmission_authentication == true) {
    		$this->username = $this->container->getParameter('transmission_username');
    		$this->password = $this->container->getParameter('transmission_password');
    		
    		// Initialize Client 
    		if (!isset($client)) {
    			$client = new Client();
				$client->authenticate($this->username, $this->password);
			}
    	}
  	
    	// Initialize Transmission Connector
		$transmission = new Transmission();
		$transmission->setClient($client);

		// Configuring many var of transmission and save as session
		$session = $transmission->getSession();
		$session->setDownloadDir($transmission_dir);
		$session->setIncompleteDir($transmission_tmp);
		$session->setIncompleteDirEnabled(true);
		$session->save();

		// If form is call
		if ($request->isMethod('POST'))
		{
			// Get torrent 'uri'
			$uri = $request->request->get('addtorrent_uri');

			// Add new torrent with form 'uri' submitted
			$transmission->add($uri);
		}

		// Return flashbag info_box
		$session = $request->getSession();
		$session->getFlashBag()->add('info', 'Fichier ajouté avec succès !');

		// Return redirect uri to the core controller
    	return $this->redirect($this->generateUrl('app_feather_core'));
    }

    public function deleteAction($id, Request $request)
    {
    	// Convert string($id) to integer
    	$id = intval($id);

    	// Checking authentication parameter
    	$transmission_authentication = $this->container->getParameter('transmission_authentication');

    	// Get download and  temporary path
    	$transmission_dir = $this->container->getParameter('transmission_dir');
    	$transmission_tmp = $this->container->getParameter('transmission_tmp');

    	// Checking if transmission authentication is enabled
    	if ($transmission_authentication == true) {
    		$this->username = $this->container->getParameter('transmission_username');
    		$this->password = $this->container->getParameter('transmission_password');
    		
    		// Initialize Client 
    		if (!isset($client)) {
    			$client = new Client();
				$client->authenticate($this->username, $this->password);
			}
    	}
  	
    	// Initialize Transmission Connector
		$transmission = new Transmission();
		$transmission->setClient($client);

		// Configuring many var of transmission and save as session
		$session = $transmission->getSession();
		$session->setDownloadDir($transmission_dir);
		$session->setIncompleteDir($transmission_tmp);
		$session->setIncompleteDirEnabled(true);
		$session->save();

		// Remove torrent with get id
		$transmission->get($id)->remove();

		// Return flashbag info_box
		$session = $request->getSession();
		$session->getFlashBag()->add('info', 'Fichier supprimé avec succès !');

		// Sleep 2 seconds for update transmission infos
		sleep(2);

		// Return redirect uri to the core controller
    	return $this->redirect($this->generateUrl('app_feather_core'));
    }

    public function startAction($id)
    {
    	// Convert string($id) to integer
    	$id = intval($id);

    	// Checking authentication parameter
    	$transmission_authentication = $this->container->getParameter('transmission_authentication');

    	// Get download and  temporary path
    	$transmission_dir = $this->container->getParameter('transmission_dir');
    	$transmission_tmp = $this->container->getParameter('transmission_tmp');

    	// Checking if transmission authentication is enabled
    	if ($transmission_authentication == true) {
    		$this->username = $this->container->getParameter('transmission_username');
    		$this->password = $this->container->getParameter('transmission_password');
    		
    		// Initialize Client 
    		if (!isset($client)) {
    			$client = new Client();
				$client->authenticate($this->username, $this->password);
			}
    	}
  	
    	// Initialize Transmission Connector
		$transmission = new Transmission();
		$transmission->setClient($client);

		// Configuring many var of transmission and save as session
		$session = $transmission->getSession();
		$session->setDownloadDir($transmission_dir);
		$session->setIncompleteDir($transmission_tmp);
		$session->setIncompleteDirEnabled(true);
		$session->save();

		// Remove torrent with get id
		$transmission->get($id)->start();

		// Sleep 2 seconds for update transmission infos
		sleep(2);

		// Return redirect uri to the core controller
    	return $this->redirect($this->generateUrl('app_feather_core'));
    }

    public function stopAction($id)
    {
    	// Convert string($id) to integer
    	$id = intval($id);

    	// Checking authentication parameter
    	$transmission_authentication = $this->container->getParameter('transmission_authentication');

    	// Get download and  temporary path
    	$transmission_dir = $this->container->getParameter('transmission_dir');
    	$transmission_tmp = $this->container->getParameter('transmission_tmp');

    	// Checking if transmission authentication is enabled
    	if ($transmission_authentication == true) {
    		$this->username = $this->container->getParameter('transmission_username');
    		$this->password = $this->container->getParameter('transmission_password');
    		
    		// Initialize Client 
    		if (!isset($client)) {
    			$client = new Client();
				$client->authenticate($this->username, $this->password);
			}
    	}
  	
    	// Initialize Transmission Connector
		$transmission = new Transmission();
		$transmission->setClient($client);

		// Configuring many var of transmission and save as session
		$session = $transmission->getSession();
		$session->setDownloadDir($transmission_dir);
		$session->setIncompleteDir($transmission_tmp);
		$session->setIncompleteDirEnabled(true);
		$session->save();

		// Remove torrent with get id
		$transmission->get($id)->stop();

		// Sleep 2 seconds for update transmission infos
		sleep(2);

		// Return redirect uri to the core controller
    	return $this->redirect($this->generateUrl('app_feather_core'));
    }

    // Build this controller for some many test
	public function dataAction()
    {
        return $this->render('AppFeatherBundle:Core:data.html.twig');
    }
}
