<?php

namespace ContainerV158tZ2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4ZU5zm2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4ZU5zm2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4ZU5zm2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'tricksRepository' => ['privates', 'App\\Repository\\TricksRepository', 'getTricksRepositoryService', true],
        ], [
            'tricksRepository' => 'App\\Repository\\TricksRepository',
        ]);
    }
}
