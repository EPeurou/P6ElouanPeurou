<?php

namespace ContainerHDc7AS8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HAV0MEAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hAV0MEA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hAV0MEA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trick' => ['privates', '.errored..service_locator.hAV0MEA.App\\Entity\\Tricks', NULL, 'Cannot autowire service ".service_locator.hAV0MEA": it references class "App\\Entity\\Tricks" but no such service exists.'],
        ], [
            'trick' => 'App\\Entity\\Tricks',
        ]);
    }
}
