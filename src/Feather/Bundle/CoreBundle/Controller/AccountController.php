<?php

namespace Feather\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/* debug*/
use Symfony\Component\HttpFoundation\Response;
/**
 * @Route("/account")
 * @Security("has_role('ROLE_USER')")
 *
 * @author Jonathan gleyze <jonathan.gleyze.pro@gmail.com>
 */
class AccountController extends Controller
{
    /**
     * @Route("/setting", name="setting")
     * @Template()
     *
     * Load setting index
     *
     * @author William Rudent <william.rudent@gmail.com>
     *
     * @return Template
     */
	public function settingAction()
    {
    	 return [];
    }
}
