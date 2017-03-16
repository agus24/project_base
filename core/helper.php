<?php

function dd($var)
{
    die(var_dump($var));
}

function url($link)
{
    $php = $_SERVER['PHP_SELF'];
    $base = explode("index.php",$php)[0];
    return $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'].$base.$link;
}

function view($file,$variables = [])
{
    extract($variables);

    return require "views/{$file}.view.php";
}

function redirect($path)
{
    header("location:{$path}");
}
