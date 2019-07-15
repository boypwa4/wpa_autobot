<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd9d83a8d743a546723908619353d4341
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd9d83a8d743a546723908619353d4341::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd9d83a8d743a546723908619353d4341::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
