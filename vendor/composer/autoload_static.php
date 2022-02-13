<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2067516d2ee59931956d3be9203bb560
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2067516d2ee59931956d3be9203bb560::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2067516d2ee59931956d3be9203bb560::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2067516d2ee59931956d3be9203bb560::$classMap;

        }, null, ClassLoader::class);
    }
}
