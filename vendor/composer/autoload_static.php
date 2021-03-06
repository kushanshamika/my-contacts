<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf0f9a4b051b2e9a489e3fdcd0dc01a9
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf0f9a4b051b2e9a489e3fdcd0dc01a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf0f9a4b051b2e9a489e3fdcd0dc01a9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf0f9a4b051b2e9a489e3fdcd0dc01a9::$classMap;

        }, null, ClassLoader::class);
    }
}
