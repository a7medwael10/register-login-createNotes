<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcba3e0ec9bc4df63f2e106f02e85b5da
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Http\\' => 5,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Http\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Http',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcba3e0ec9bc4df63f2e106f02e85b5da::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcba3e0ec9bc4df63f2e106f02e85b5da::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcba3e0ec9bc4df63f2e106f02e85b5da::$classMap;

        }, null, ClassLoader::class);
    }
}