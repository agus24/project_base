<?php

if(!function_exists("dd"))
{
    function dd($text)
    {
        echo "<pre>";
        var_dump(die($text));
        echo "</pre>";
    }
}

