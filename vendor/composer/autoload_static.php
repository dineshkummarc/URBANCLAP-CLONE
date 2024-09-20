<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc02fa765ae97cbe60b353fee20e138fc
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsstream/src/main/php',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc02fa765ae97cbe60b353fee20e138fc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc02fa765ae97cbe60b353fee20e138fc::$classMap;

        }, null, ClassLoader::class);
    }
}