<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit703af5a656478c392861a37f0d7137e7
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit703af5a656478c392861a37f0d7137e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit703af5a656478c392861a37f0d7137e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
