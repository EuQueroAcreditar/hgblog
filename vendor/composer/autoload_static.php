<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb229024648b5cf556307c66639d6ab73
{
    public static $files = array (
        '80bdbe1b5ecca1d9a519819a74d72267' => __DIR__ . '/..' . '/jbzoo/utils/src/defines.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Klein\\' => 6,
        ),
        'J' => 
        array (
            'JBZoo\\Utils\\' => 12,
            'JBZoo\\Data\\' => 11,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Klein\\' => 
        array (
            0 => __DIR__ . '/..' . '/klein/klein/src/Klein',
        ),
        'JBZoo\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/jbzoo/utils/src',
        ),
        'JBZoo\\Data\\' => 
        array (
            0 => __DIR__ . '/..' . '/jbzoo/data/src',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb229024648b5cf556307c66639d6ab73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb229024648b5cf556307c66639d6ab73::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb229024648b5cf556307c66639d6ab73::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}