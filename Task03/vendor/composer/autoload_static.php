<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdfc0872b712067c90fe60b9f3ff15cd9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdfc0872b712067c90fe60b9f3ff15cd9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdfc0872b712067c90fe60b9f3ff15cd9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdfc0872b712067c90fe60b9f3ff15cd9::$classMap;

        }, null, ClassLoader::class);
    }
}
