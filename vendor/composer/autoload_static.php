<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48f0d440465edc7fdd51ae29470455cc
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\Home' => __DIR__ . '/../..' . '/src/Controllers/Home.php',
        'App\\Controllers\\Invoice' => __DIR__ . '/../..' . '/src/Controllers/Invoice.php',
        'App\\Exception\\RouteNotFoundException' => __DIR__ . '/../..' . '/src/Exception/RouteNotFoundException.php',
        'App\\Exception\\ViewNotFoundException' => __DIR__ . '/../..' . '/src/Exception/ViewNotFoundException.php',
        'App\\Public\\Router' => __DIR__ . '/../..' . '/src/Public/Router.php',
        'App\\View' => __DIR__ . '/../..' . '/src/View.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48f0d440465edc7fdd51ae29470455cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48f0d440465edc7fdd51ae29470455cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48f0d440465edc7fdd51ae29470455cc::$classMap;

        }, null, ClassLoader::class);
    }
}
