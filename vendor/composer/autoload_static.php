<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61beb805e49ae2c2f9d5f1f0893cfc18
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
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61beb805e49ae2c2f9d5f1f0893cfc18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61beb805e49ae2c2f9d5f1f0893cfc18::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit61beb805e49ae2c2f9d5f1f0893cfc18::$classMap;

        }, null, ClassLoader::class);
    }
}
