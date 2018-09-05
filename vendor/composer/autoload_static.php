<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdf513a89816d207560adb2bdbe08052
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iconic.SearchEngine\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iconic.SearchEngine\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdf513a89816d207560adb2bdbe08052::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdf513a89816d207560adb2bdbe08052::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}