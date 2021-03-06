<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf293228f6ed0664f9a2fbd58e3eb9edd
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Strava' => 
            array (
                0 => __DIR__ . '/..' . '/basvandorst/stravaphp/src',
            ),
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Pest' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'PestJSON' => __DIR__ . '/..' . '/educoder/pest/PestJSON.php',
        'PestXML' => __DIR__ . '/..' . '/educoder/pest/PestXML.php',
        'PestXML_Exception' => __DIR__ . '/..' . '/educoder/pest/PestXML.php',
        'Pest_BadRequest' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_ClientError' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Conflict' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Curl_Exec' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Curl_Init' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Curl_Meta' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Exception' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Forbidden' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Gone' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_InvalidRecord' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Json_Decode' => __DIR__ . '/..' . '/educoder/pest/PestJSON.php',
        'Pest_Json_Encode' => __DIR__ . '/..' . '/educoder/pest/PestJSON.php',
        'Pest_MethodNotAllowed' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_NotFound' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_ServerError' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_Unauthorized' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
        'Pest_UnknownResponse' => __DIR__ . '/..' . '/educoder/pest/Pest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf293228f6ed0664f9a2fbd58e3eb9edd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf293228f6ed0664f9a2fbd58e3eb9edd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf293228f6ed0664f9a2fbd58e3eb9edd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf293228f6ed0664f9a2fbd58e3eb9edd::$classMap;

        }, null, ClassLoader::class);
    }
}
