<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb53a329f2de6d2fb9c017a4f182eef61
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vis\\ImageStorage\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vis\\ImageStorage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Vis\\ImageStorage\\AbstractImageStorage' => __DIR__ . '/../..' . '/src/Models/AbstractImageStorage.php',
        'Vis\\ImageStorage\\GalleriesController' => __DIR__ . '/../..' . '/src/Http/Controllers/GalleriesController.php',
        'Vis\\ImageStorage\\Gallery' => __DIR__ . '/../..' . '/src/Models/Gallery.php',
        'Vis\\ImageStorage\\Image' => __DIR__ . '/../..' . '/src/Models/Image.php',
        'Vis\\ImageStorage\\ImagesController' => __DIR__ . '/../..' . '/src/Http/Controllers/ImagesController.php',
        'Vis\\ImageStorage\\Tag' => __DIR__ . '/../..' . '/src/Models/Tag.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb53a329f2de6d2fb9c017a4f182eef61::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb53a329f2de6d2fb9c017a4f182eef61::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb53a329f2de6d2fb9c017a4f182eef61::$classMap;

        }, null, ClassLoader::class);
    }
}
