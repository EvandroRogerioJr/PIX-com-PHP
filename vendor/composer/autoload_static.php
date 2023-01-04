<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e3817506ceba5a9e805f00734477d4b
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mpdf\\QrCode\\' => 12,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mpdf\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/mpdf/qrcode/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e3817506ceba5a9e805f00734477d4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e3817506ceba5a9e805f00734477d4b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e3817506ceba5a9e805f00734477d4b::$classMap;

        }, null, ClassLoader::class);
    }
}