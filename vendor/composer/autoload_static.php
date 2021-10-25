<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0e6e8b216dc3da1e3f7e9b73c888c51a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0e6e8b216dc3da1e3f7e9b73c888c51a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0e6e8b216dc3da1e3f7e9b73c888c51a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0e6e8b216dc3da1e3f7e9b73c888c51a::$classMap;

        }, null, ClassLoader::class);
    }
}
