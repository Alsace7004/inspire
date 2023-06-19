<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2b282f6b983a91520191f500be86f4d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alsace7004\\Inspire\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alsace7004\\Inspire\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2b282f6b983a91520191f500be86f4d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2b282f6b983a91520191f500be86f4d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2b282f6b983a91520191f500be86f4d::$classMap;

        }, null, ClassLoader::class);
    }
}