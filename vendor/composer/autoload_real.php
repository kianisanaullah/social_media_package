<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit2d504f9a2c1422295bd5e6709ebfa97f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit2d504f9a2c1422295bd5e6709ebfa97f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit2d504f9a2c1422295bd5e6709ebfa97f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit2d504f9a2c1422295bd5e6709ebfa97f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}