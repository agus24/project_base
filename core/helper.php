<?php

function dd($var)
{
    die(var_dump($var));
}

function makeUrl($link)
{
    $php = $_SERVER['PHP_SELF'];
    $base = explode("index.php",$php)[0];
    return
            // $_SERVER['REQUEST_SCHEME'].
            "http://".
            $_SERVER['HTTP_HOST'].
            $base.
            $link
            ;
}

function view($file,$variables = [])
{
    extract($variables);

    return require "app/views/{$file}.view.php";
}

function redirect($path)
{
    header("location:{$path}");
}
