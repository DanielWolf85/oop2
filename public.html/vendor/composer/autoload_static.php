<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita77c7814da6d27d5d6840590937ec3bd
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita77c7814da6d27d5d6840590937ec3bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita77c7814da6d27d5d6840590937ec3bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}