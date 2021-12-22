<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdb71d4141894935bfc38dd1f47abafc
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Laravel\\Contact\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Laravel\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdb71d4141894935bfc38dd1f47abafc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdb71d4141894935bfc38dd1f47abafc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfdb71d4141894935bfc38dd1f47abafc::$classMap;

        }, null, ClassLoader::class);
    }
}