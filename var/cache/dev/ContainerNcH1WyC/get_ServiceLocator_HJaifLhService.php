<?php

namespace ContainerNcH1WyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HJaifLhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hJaifLh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hJaifLh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'serializer' => ['privates', 'serializer', 'getSerializerService', false],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'em' => '?',
            'serializer' => '?',
            'urlGenerator' => '?',
        ]);
    }
}
