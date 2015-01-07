<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // app_feather_install
        if ($pathinfo === '/install') {
            return array (  '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::installAction',  '_route' => 'app_feather_install',);
        }

        // app_feather_core
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_feather_core');
            }

            return array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::coreAction',  '_route' => 'app_feather_core',);
        }

        // app_feather_add_torrent
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::addAction',  '_route' => 'app_feather_add_torrent',);
        }

        // app_feather_delete_torrent
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_feather_delete_torrent')), array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/st')) {
            // app_feather_start_torrent
            if (0 === strpos($pathinfo, '/start') && preg_match('#^/start/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_feather_start_torrent')), array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::startAction',));
            }

            // app_feather_stop_torrent
            if (0 === strpos($pathinfo, '/stop') && preg_match('#^/stop/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_feather_stop_torrent')), array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::stopAction',));
            }

        }

        // app_feather_data
        if ($pathinfo === '/data') {
            return array (  '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::dataAction',  '_route' => 'app_feather_data',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // app_feather_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'App\\FeatherUserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'app_feather_login',);
                }

                // app_feather_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'app_feather_login_check');
                }

            }

            // app_feather_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'app_feather_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
