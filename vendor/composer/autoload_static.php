<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd084dd1456ec862afd1612be077d7f6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abe\\Demande\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abe\\Demande\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd084dd1456ec862afd1612be077d7f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd084dd1456ec862afd1612be077d7f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}