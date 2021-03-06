<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11a34f05c4d7e2608496dcf6679ab519
{
    public static $files = array (
        '35d1e42abf4d8c181ae544a92d8f3f6a' => __DIR__ . '/..' . '/kint-php/kint/Kint.class.php',
        'c5994afef298788638bd9456be9b50d9' => __DIR__ . '/../..' . '/includes/functions/core.php',
    );

    public static $classMap = array (
        'PCTDL_Core' => __DIR__ . '/../..' . '/includes/classes/class-core.php',
        'PCTDL_Shortcodes' => __DIR__ . '/../..' . '/includes/shortcode/class-shortcodes.php',
        'PCTDL_Shortcodes_Resources' => __DIR__ . '/../..' . '/includes/shortcode/class-shortcodes-resources.php',
        'PCTDL_Shortcodes_Resources_Admin' => __DIR__ . '/../..' . '/includes/shortcode/class-shortcodes-resources-admin.php',
        'PCTDL_Shortcodes_Resources_Run' => __DIR__ . '/../..' . '/includes/shortcode/class-shortcodes-resources-run.php',
        'Template_Loader' => __DIR__ . '/../..' . '/includes/templates/class-template-loader.php',
        'Template_View_Loader' => __DIR__ . '/../..' . '/includes/templates/class-template-view-loader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit11a34f05c4d7e2608496dcf6679ab519::$classMap;

        }, null, ClassLoader::class);
    }
}
