<?php

namespace ItJonction\OptimizeImages\ITJ;

use Composer\Autoload\ClassLoader;
use ErrorException;

/**
 * Bootstrap class for the Magerun applications (Symfony console based application)
 *
 * @package ItJonction\OptimizeImages\ItjonctionBootstrap
 */
class ItjonctionBootstrap
{

    //public static function createApplication(ClassLoader $loader = null)
    public static function createApplication()
    {
        echo "hello world";
    }

    // /**
    //  * @throws ErrorException
    //  * @return ClassLoader
    //  */
    // public static function getLoader()
    // {
    //     $projectBasedir = __DIR__ . '/../..';
    //     if (
    //         !($loader = self::includeIfExists($projectBasedir . '/vendor/autoload.php'))
    //         && !($loader = self::includeIfExists($projectBasedir . '/../../autoload.php'))
    //     ) {
    //         throw new ErrorException(
    //             'You must set up the project dependencies, run the following commands:' . PHP_EOL .
    //             'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
    //             'php composer.phar install' . PHP_EOL
    //         );
    //     }

    //     return $loader;
    // }

    // /**
    //  * @param string $file
    //  * @return mixed
    //  */
    // public static function includeIfExists($file)
    // {
    //     if (file_exists($file)) {
    //         return include $file;
    //     }
    // }
}
