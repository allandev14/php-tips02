<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac2a2401a7dc9fe81c550a7d871d0875
{
    public static $files = array (
        'af5143383ed5a867b3f76c9c5805d3b5' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitac2a2401a7dc9fe81c550a7d871d0875::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitac2a2401a7dc9fe81c550a7d871d0875::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitac2a2401a7dc9fe81c550a7d871d0875::$classMap;

        }, null, ClassLoader::class);
    }
}
