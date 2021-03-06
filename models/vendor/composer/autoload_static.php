<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b38fc9de0bbdb8385fca790d9e2691a
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Filebase\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Filebase\\' => 
        array (
            0 => __DIR__ . '/..' . '/tmarois/filebase/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b38fc9de0bbdb8385fca790d9e2691a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b38fc9de0bbdb8385fca790d9e2691a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
