<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04c164d2cd90f723569852fc7a37e407
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'I' => 
        array (
            'Ifsnop\\' => 7,
        ),
        'E' => 
        array (
            'ElephantIO\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Ifsnop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ifsnop/mysqldump-php/src/Ifsnop',
        ),
        'ElephantIO\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library',
            1 => __DIR__ . '/..' . '/wisembly/elephant.io/src',
            2 => __DIR__ . '/..' . '/wisembly/elephant.io/test',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04c164d2cd90f723569852fc7a37e407::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04c164d2cd90f723569852fc7a37e407::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit04c164d2cd90f723569852fc7a37e407::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit04c164d2cd90f723569852fc7a37e407::$classMap;

        }, null, ClassLoader::class);
    }
}
