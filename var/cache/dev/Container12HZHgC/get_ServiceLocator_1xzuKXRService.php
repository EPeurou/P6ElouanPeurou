<?php

namespace Container12HZHgC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1xzuKXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1xzuKXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1xzuKXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\CommentController::delete' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\CommentController::edit' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\CommentController::index' => ['privates', '.service_locator.BwLcYXx', 'get_ServiceLocator_BwLcYXxService', true],
            'App\\Controller\\CommentController::show' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\TricksController::delete' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'App\\Controller\\TricksController::edit' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'App\\Controller\\TricksController::index' => ['privates', '.service_locator.4ZU5zm2', 'get_ServiceLocator_4ZU5zm2Service', true],
            'App\\Controller\\TricksController::new' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\TricksController::show' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\CommentController:delete' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\CommentController:edit' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\CommentController:index' => ['privates', '.service_locator.BwLcYXx', 'get_ServiceLocator_BwLcYXxService', true],
            'App\\Controller\\CommentController:show' => ['privates', '.service_locator.CbsAoJ.', 'get_ServiceLocator_CbsAoJ_Service', true],
            'App\\Controller\\TricksController:delete' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'App\\Controller\\TricksController:edit' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'App\\Controller\\TricksController:index' => ['privates', '.service_locator.4ZU5zm2', 'get_ServiceLocator_4ZU5zm2Service', true],
            'App\\Controller\\TricksController:new' => ['privates', '.service_locator.fZXk27d', 'get_ServiceLocator_FZXk27dService', true],
            'App\\Controller\\TricksController:show' => ['privates', '.service_locator.hAV0MEA', 'get_ServiceLocator_HAV0MEAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\CommentController::delete' => '?',
            'App\\Controller\\CommentController::edit' => '?',
            'App\\Controller\\CommentController::index' => '?',
            'App\\Controller\\CommentController::show' => '?',
            'App\\Controller\\TricksController::delete' => '?',
            'App\\Controller\\TricksController::edit' => '?',
            'App\\Controller\\TricksController::index' => '?',
            'App\\Controller\\TricksController::new' => '?',
            'App\\Controller\\TricksController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\CommentController:delete' => '?',
            'App\\Controller\\CommentController:edit' => '?',
            'App\\Controller\\CommentController:index' => '?',
            'App\\Controller\\CommentController:show' => '?',
            'App\\Controller\\TricksController:delete' => '?',
            'App\\Controller\\TricksController:edit' => '?',
            'App\\Controller\\TricksController:index' => '?',
            'App\\Controller\\TricksController:new' => '?',
            'App\\Controller\\TricksController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
