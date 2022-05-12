<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49c2a78a90d1c1594bd144faa03b2c5d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Shihab\\Pandago\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Shihab\\Pandago\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit49c2a78a90d1c1594bd144faa03b2c5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit49c2a78a90d1c1594bd144faa03b2c5d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit49c2a78a90d1c1594bd144faa03b2c5d::$classMap;

        }, null, ClassLoader::class);
    }
}