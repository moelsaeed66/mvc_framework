<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd95004a41a2f54c57a405062712f3a95
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MVC\\core\\app' => __DIR__ . '/../..' . '/app/core/app.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd95004a41a2f54c57a405062712f3a95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd95004a41a2f54c57a405062712f3a95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd95004a41a2f54c57a405062712f3a95::$classMap;

        }, null, ClassLoader::class);
    }
}
