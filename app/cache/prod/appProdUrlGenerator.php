<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'app_feather_install' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\FeatherInstallBundle\\Controller\\InstallController::installAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/install',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_core' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::coreAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_add_torrent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_delete_torrent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_start_torrent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::startAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/start',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_stop_torrent' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::stopAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stop',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_data' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\FeatherBundle\\Controller\\CoreController::dataAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/data',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'App\\FeatherUserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_feather_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
