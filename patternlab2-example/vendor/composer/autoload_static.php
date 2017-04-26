<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa4ffee2b69b315685bc2001d8b7924a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Shudrum\\Component\\ArrayFinder\\' => 30,
            'Seld\\JsonLint\\' => 14,
        ),
        'A' => 
        array (
            'Alchemy\\Zippy\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Shudrum\\Component\\ArrayFinder\\' => 
        array (
            0 => __DIR__ . '/..' . '/shudrum/array-finder',
        ),
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Alchemy\\Zippy\\' => 
        array (
            0 => __DIR__ . '/..' . '/alchemy/zippy/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'W' => 
        array (
            'Wrench' => 
            array (
                0 => __DIR__ . '/..' . '/wrench/wrench/lib',
            ),
        ),
        'P' => 
        array (
            'PatternLab\\Reload' => 
            array (
                0 => __DIR__ . '/..' . '/pattern-lab/plugin-reload/src',
            ),
            'PatternLab\\PatternEngine\\Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/pattern-lab/patternengine-mustache/src',
            ),
            'PatternLab' => 
            array (
                0 => __DIR__ . '/../..' . '/core/src',
                1 => __DIR__ . '/..' . '/pattern-lab/core/src',
            ),
        ),
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
            'Michelf' => 
            array (
                0 => __DIR__ . '/..' . '/michelf/php-markdown',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
        ),
        'C' => 
        array (
            'Colors' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/colors.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa4ffee2b69b315685bc2001d8b7924a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa4ffee2b69b315685bc2001d8b7924a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfa4ffee2b69b315685bc2001d8b7924a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
