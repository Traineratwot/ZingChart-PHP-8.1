<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdd6ad91660eb18506049f02f19bc172d
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'ZingChart\\PHPWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ZingChart\\PHPWrapper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdd6ad91660eb18506049f02f19bc172d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdd6ad91660eb18506049f02f19bc172d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdd6ad91660eb18506049f02f19bc172d::$classMap;

        }, null, ClassLoader::class);
    }
}