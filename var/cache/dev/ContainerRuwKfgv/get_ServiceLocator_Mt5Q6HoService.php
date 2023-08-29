<?php

namespace ContainerRuwKfgv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mt5Q6HoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mt5Q6Ho' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mt5Q6Ho'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'contact' => ['privates', '.errored..service_locator.Mt5Q6Ho.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.Mt5Q6Ho": it needs an instance of "App\\Entity\\Contact" but this type has been excluded in "config/services.yaml".'],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'serializer' => '?',
        ]);
    }
}
