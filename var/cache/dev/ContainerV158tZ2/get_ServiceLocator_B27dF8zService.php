<?php

namespace ContainerV158tZ2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B27dF8zService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B27dF8z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B27dF8z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'trick' => ['privates', '.errored..service_locator.B27dF8z.App\\Entity\\Tricks', NULL, 'Cannot autowire service ".service_locator.B27dF8z": it references class "App\\Entity\\Tricks" but no such service exists.'],
            'tricksRepository' => ['privates', 'App\\Repository\\TricksRepository', 'getTricksRepositoryService', true],
        ], [
            'trick' => 'App\\Entity\\Tricks',
            'tricksRepository' => 'App\\Repository\\TricksRepository',
        ]);
    }
}
