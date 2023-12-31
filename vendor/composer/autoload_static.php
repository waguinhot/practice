<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1bfa958c3fc4abbffc4f897fe71b660e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wagner\\Pi\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wagner\\Pi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1bfa958c3fc4abbffc4f897fe71b660e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1bfa958c3fc4abbffc4f897fe71b660e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1bfa958c3fc4abbffc4f897fe71b660e::$classMap;

        }, null, ClassLoader::class);
    }
}
