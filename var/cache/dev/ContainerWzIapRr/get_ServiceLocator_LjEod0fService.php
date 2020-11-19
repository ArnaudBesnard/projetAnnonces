<?php

namespace ContainerWzIapRr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LjEod0fService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ljEod0f' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ljEod0f'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'advertRepository' => ['privates', 'App\\Repository\\AdvertRepository', 'getAdvertRepositoryService', true],
        ], [
            'advertRepository' => 'App\\Repository\\AdvertRepository',
        ]);
    }
}
