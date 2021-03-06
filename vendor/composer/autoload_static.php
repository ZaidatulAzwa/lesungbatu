<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'D' => 
        array (
            'Dedelang\\' => 9,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'Dedelang\\' => 
        array (
            0 => __DIR__ . '/..' . '/Dedelang',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit719729e2b0dadf0fef9b94ae19318d8a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
