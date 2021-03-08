<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb22a48b0026e7a91152d81a07d05ba98
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestSinuca\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestSinuca\\' => 
        array (
            0 => __DIR__ . '/..' . '/test_sinuca/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb22a48b0026e7a91152d81a07d05ba98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb22a48b0026e7a91152d81a07d05ba98::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb22a48b0026e7a91152d81a07d05ba98::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb22a48b0026e7a91152d81a07d05ba98::$classMap;

        }, null, ClassLoader::class);
    }
}
