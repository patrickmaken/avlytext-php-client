<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb636adddaaa1785f4dbddb6d521f1f6e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Patrickmaken\\AvlyText\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Patrickmaken\\AvlyText\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb636adddaaa1785f4dbddb6d521f1f6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb636adddaaa1785f4dbddb6d521f1f6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb636adddaaa1785f4dbddb6d521f1f6e::$classMap;

        }, null, ClassLoader::class);
    }
}
