<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9762e5fcdce538b91e91081e745993ef
{
    public static $prefixLengthsPsr4 = array (
        'L' =>
        array (
            'obeidat\\Src\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'obeidat\\Src\\' =>
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9762e5fcdce538b91e91081e745993ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9762e5fcdce538b91e91081e745993ef::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9762e5fcdce538b91e91081e745993ef::$classMap;

        }, null, ClassLoader::class);
    }
}