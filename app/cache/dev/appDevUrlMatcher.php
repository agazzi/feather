<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/cda2f0c')) {
            // _assetic_cda2f0c
            if ($pathinfo === '/css/cda2f0c.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cda2f0c',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_cda2f0c',);
            }

            // _assetic_cda2f0c_0
            if ($pathinfo === '/css/cda2f0c_part_1_stylesheet_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'cda2f0c',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_cda2f0c_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/e7a5247')) {
                // _assetic_e7a5247
                if ($pathinfo === '/js/e7a5247.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e7a5247',);
                }

                if (0 === strpos($pathinfo, '/js/e7a5247_')) {
                    // _assetic_e7a5247_0
                    if ($pathinfo === '/js/e7a5247_jquery-1.9.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e7a5247_0',);
                    }

                    // _assetic_e7a5247_1
                    if ($pathinfo === '/js/e7a5247_bootstrap.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_e7a5247_1',);
                    }

                    // _assetic_e7a5247_2
                    if ($pathinfo === '/js/e7a5247_globalize.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_e7a5247_2',);
                    }

                    // _assetic_e7a5247_3
                    if ($pathinfo === '/js/e7a5247_jquery.nicescroll.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_e7a5247_3',);
                    }

                    if (0 === strpos($pathinfo, '/js/e7a5247_d')) {
                        // _assetic_e7a5247_4
                        if ($pathinfo === '/js/e7a5247_dx.chartjs_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_e7a5247_4',);
                        }

                        // _assetic_e7a5247_5
                        if ($pathinfo === '/js/e7a5247_demo-charts_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_e7a5247_5',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/e7a5247_jquery.sparkline.')) {
                        // _assetic_e7a5247_6
                        if ($pathinfo === '/js/e7a5247_jquery.sparkline.min_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_e7a5247_6',);
                        }

                        // _assetic_e7a5247_7
                        if ($pathinfo === '/js/e7a5247_jquery.sparkline.demo_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_e7a5247_7',);
                        }

                    }

                    // _assetic_e7a5247_8
                    if ($pathinfo === '/js/e7a5247_angular.min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_e7a5247_8',);
                    }

                    // _assetic_e7a5247_9
                    if ($pathinfo === '/js/e7a5247_jquery.dataTables_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_e7a5247_9',);
                    }

                    // _assetic_e7a5247_10
                    if ($pathinfo === '/js/e7a5247_DT_bootstrap_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_e7a5247_10',);
                    }

                    // _assetic_e7a5247_11
                    if ($pathinfo === '/js/e7a5247_jquery.dataTables-conf_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_e7a5247_11',);
                    }

                    // _assetic_e7a5247_12
                    if ($pathinfo === '/js/e7a5247_custom_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7a5247',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_e7a5247_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/5')) {
                if (0 === strpos($pathinfo, '/js/5f69957')) {
                    // _assetic_5f69957
                    if ($pathinfo === '/js/5f69957.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '5f69957',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_5f69957',);
                    }

                    if (0 === strpos($pathinfo, '/js/5f69957_')) {
                        // _assetic_5f69957_0
                        if ($pathinfo === '/js/5f69957_jquery-1.9.1.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f69957',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_5f69957_0',);
                        }

                        // _assetic_5f69957_1
                        if ($pathinfo === '/js/5f69957_bootstrap.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f69957',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_5f69957_1',);
                        }

                        // _assetic_5f69957_2
                        if ($pathinfo === '/js/5f69957_jquery.nicescroll.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f69957',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_5f69957_2',);
                        }

                        // _assetic_5f69957_3
                        if ($pathinfo === '/js/5f69957_custom_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '5f69957',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_5f69957_3',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/56a3189')) {
                    // _assetic_56a3189
                    if ($pathinfo === '/js/56a3189.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '56a3189',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_56a3189',);
                    }

                    if (0 === strpos($pathinfo, '/js/56a3189_')) {
                        // _assetic_56a3189_0
                        if ($pathinfo === '/js/56a3189_jquery-1.9.1.min_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56a3189',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_56a3189_0',);
                        }

                        // _assetic_56a3189_1
                        if ($pathinfo === '/js/56a3189_bootstrap.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56a3189',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_56a3189_1',);
                        }

                        // _assetic_56a3189_2
                        if ($pathinfo === '/js/56a3189_globalize.min_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '56a3189',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_56a3189_2',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/install')) {
            // app_feather_install
            if ($pathinfo === '/install') {
                return array (  '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::installAction',  '_route' => 'app_feather_install',);
            }

            // app_feather_install_step
            if ($pathinfo === '/install/step') {
                return array (  '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::stepAction',  '_route' => 'app_feather_install_step',);
            }

            if (0 === strpos($pathinfo, '/install/process')) {
                // app_feather_install_process
                if ($pathinfo === '/install/process') {
                    return array (  '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::processAction',  '_route' => 'app_feather_install_process',);
                }

                // app_feather_install_process_exec
                if ($pathinfo === '/install/process/exec') {
                    return array (  '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::processexecAction',  '_route' => 'app_feather_install_process_exec',);
                }

            }

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
