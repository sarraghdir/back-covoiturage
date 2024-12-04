<?php

namespace ContainerXQcNRPw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTrajetControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TrajetController' shared autowired service.
     *
     * @return \App\Controller\TrajetController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TrajetController.php';

        $container->services['App\\Controller\\TrajetController'] = $instance = new \App\Controller\TrajetController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\TrajetController', $container));

        return $instance;
    }
}