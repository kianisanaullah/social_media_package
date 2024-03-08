<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2d504f9a2c1422295bd5e6709ebfa97f
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kianisanaullah\\SocialMedia\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kianisanaullah\\SocialMedia\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2d504f9a2c1422295bd5e6709ebfa97f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2d504f9a2c1422295bd5e6709ebfa97f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2d504f9a2c1422295bd5e6709ebfa97f::$classMap;

        }, null, ClassLoader::class);
    }
}
