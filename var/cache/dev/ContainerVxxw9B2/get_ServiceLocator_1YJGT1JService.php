<?php

namespace ContainerVxxw9B2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1YJGT1JService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1YJGT1J' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1YJGT1J'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdvertController::delete' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\AdvertController::edit' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\AdvertController::index' => ['privates', '.service_locator.ljEod0f', 'get_ServiceLocator_LjEod0fService', true],
            'App\\Controller\\AdvertController::show' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdvertController:delete' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\AdvertController:edit' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\AdvertController:index' => ['privates', '.service_locator.ljEod0f', 'get_ServiceLocator_LjEod0fService', true],
            'App\\Controller\\AdvertController:show' => ['privates', '.service_locator.S5x0jv8', 'get_ServiceLocator_S5x0jv8Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdvertController::delete' => '?',
            'App\\Controller\\AdvertController::edit' => '?',
            'App\\Controller\\AdvertController::index' => '?',
            'App\\Controller\\AdvertController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdvertController:delete' => '?',
            'App\\Controller\\AdvertController:edit' => '?',
            'App\\Controller\\AdvertController:index' => '?',
            'App\\Controller\\AdvertController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
