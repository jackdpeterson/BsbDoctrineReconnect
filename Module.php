<?php

namespace BsbDoctrineReconnect;

use Zend\ModuleManager\Feature;

/**
 * BsbDoctrineReconnect
 */
class Module implements
    Feature\AutoloaderProviderInterface,
    Feature\DependencyIndicatorInterface
{
    /**
     * {@inheritDoc}
     */
    public function getAutoloaderConfig()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function getModuleDependencies()
    {
        return array('DoctrineORMModule');
    }
}
