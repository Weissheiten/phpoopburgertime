<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita9bc46ec8bbd1c0aca89a976b211322e
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

        spl_autoload_register(array('ComposerAutoloaderInita9bc46ec8bbd1c0aca89a976b211322e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita9bc46ec8bbd1c0aca89a976b211322e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita9bc46ec8bbd1c0aca89a976b211322e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
