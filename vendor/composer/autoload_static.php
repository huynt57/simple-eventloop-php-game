<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b0d0d6d1dbd6f4f902da1db6fb9d07f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Revolt\\' => 7,
        ),
        'G' => 
        array (
            'Game\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Revolt\\' => 
        array (
            0 => __DIR__ . '/..' . '/revolt/event-loop/src',
        ),
        'Game\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Game',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b0d0d6d1dbd6f4f902da1db6fb9d07f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b0d0d6d1dbd6f4f902da1db6fb9d07f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b0d0d6d1dbd6f4f902da1db6fb9d07f::$classMap;

        }, null, ClassLoader::class);
    }
}
