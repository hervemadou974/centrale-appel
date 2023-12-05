<?php

namespace ContainerA8WT4di;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y7rZdNRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y7rZdNR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y7rZdNR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'centraleRepository' => ['privates', 'App\\Repository\\CentraleRepository', 'getCentraleRepositoryService', true],
        ], [
            'centraleRepository' => 'App\\Repository\\CentraleRepository',
        ]);
    }
}
