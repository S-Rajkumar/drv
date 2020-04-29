<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit16804aef554be60c7d3b0a28a7a235e4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit16804aef554be60c7d3b0a28a7a235e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit16804aef554be60c7d3b0a28a7a235e4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
