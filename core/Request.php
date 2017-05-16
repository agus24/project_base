<?php

namespace Core;

class Request
{
    public static function uri()
    {
        $php = $_SERVER['PHP_SELF'];
        $php = explode("index.php",$php)[0];
        $uri = $_SERVER['REQUEST_URI'];
        // $uri = explode($php,$uri)[1];
        return trim(
            parse_url($uri, PHP_URL_PATH), '/'
        );
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
