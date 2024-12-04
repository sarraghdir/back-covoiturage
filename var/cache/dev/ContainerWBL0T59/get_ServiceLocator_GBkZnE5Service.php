<?php

namespace ContainerWBL0T59;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GBkZnE5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gBkZnE5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gBkZnE5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'reservation' => ['privates', '.errored..service_locator.gBkZnE5.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.gBkZnE5": it needs an instance of "App\\Entity\\Reservation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'reservation' => 'App\\Entity\\Reservation',
        ]);
    }
}
