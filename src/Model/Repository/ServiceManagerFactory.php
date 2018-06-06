<?php
namespace Jon\Model\Repository;

use League\Plates\Engine;
use Zend\ServiceManager\ServiceManager;

class ServiceManagerFactory
{
    public static function getServiceManager()
    {
        return new ServiceManager([
            'factories' => [
                'League\Plates\Engine' => function () {
                    return new Engine(dirname(dirname(dirname(__FILE__))).'/View');
                }
            ]
        ]);
    }
}