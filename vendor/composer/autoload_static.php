<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbf343da4db1911f9485e028a5c752c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sunqiaoyu\\Demo1\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sunqiaoyu\\Demo1\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbf343da4db1911f9485e028a5c752c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbf343da4db1911f9485e028a5c752c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbf343da4db1911f9485e028a5c752c4::$classMap;

        }, null, ClassLoader::class);
    }
}