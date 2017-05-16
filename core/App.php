<?php

namespace Core;

use System\Request;
use System\Route;

class App
{
    protected static $registry = [];

    public static function bind($key,$value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if(array_key_exists($key, static::$registry))
        {
            return static::$registry[$key];
        }

        throw new Exception("no {$key} in Container");
    }

    public static function database()
    {
        return static::$registry['database'];

        throw new Exception("Database Not Configured");
    }

    public static function run()
    {
        $request = Request::instance();
        $route = Route::instance($request);
        require "app/routes.php";
        $route->end();
    }
}
