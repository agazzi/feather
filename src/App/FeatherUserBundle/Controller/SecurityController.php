<?php

namespace App\FeatherUserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Filesystem\Filesystem;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // Initialize filesystem Manager
        $filesystem = new Filesystem();

        // Load Core if config.yml exist
        if ($filesystem->exists('../INSTALL')) {
        return $this->redirect($this->generateUrl('app_feather_install')); } else {

    	// if user is already logged in, redirect to the core index
    	if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
    	  return $this->redirect($this->generateUrl('app_feather_core'));
    	}

    	$session = $request->getSession();

    	// Check if previously trying form error is detected
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    	  $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    	  $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    	  $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    	}

    	return $this->render('AppFeatherUserBundle:Security:login.html.twig', array(
    	  'last_username' => $session->get(SecurityContext::LAST_USERNAME),
    	  'error'         => $error,
    	)); }
	}
}
