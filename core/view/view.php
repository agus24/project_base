<?php

namespace Core\View;

class View
{
    public static function make($path,$var = null)
    {
        global $config;
        $path = $config['view']['path']."/".$path;
        require $path;
    }
}
