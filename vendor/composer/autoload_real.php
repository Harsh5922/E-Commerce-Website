<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite43b4be17426eddd8ac4a1e4dc051a0b
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInite43b4be17426eddd8ac4a1e4dc051a0b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite43b4be17426eddd8ac4a1e4dc051a0b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite43b4be17426eddd8ac4a1e4dc051a0b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
