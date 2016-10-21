<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita73da63af9ebff8458605d9ed29d87b0
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dompdf\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
        'S' => 
        array (
            'Svg\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-svg-lib/src',
            ),
        ),
        'F' => 
        array (
            'FontLib\\' => 
            array (
                0 => __DIR__ . '/..' . '/phenx/php-font-lib/src',
            ),
        ),
    );

    public static $classMap = array (
        'Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'HTML5_Data' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Data.php',
        'HTML5_InputStream' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/InputStream.php',
        'HTML5_Parser' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Parser.php',
        'HTML5_Tokenizer' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/Tokenizer.php',
        'HTML5_TreeBuilder' => __DIR__ . '/..' . '/dompdf/dompdf/lib/html5lib/TreeBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita73da63af9ebff8458605d9ed29d87b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita73da63af9ebff8458605d9ed29d87b0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita73da63af9ebff8458605d9ed29d87b0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita73da63af9ebff8458605d9ed29d87b0::$classMap;

        }, null, ClassLoader::class);
    }
}
