<?php

namespace ContainerA8WT4di;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommuneTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CommuneType' shared autowired service.
     *
     * @return \App\Form\CommuneType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CommuneType.php';

        return $container->privates['App\\Form\\CommuneType'] = new \App\Form\CommuneType();
    }
}
