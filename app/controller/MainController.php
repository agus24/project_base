<?php
namespace App\Controller;

use Core\View\View;

class MainController
{
    public function test()
    {
        $var['b'] = "asdf";
        return View::make('index.php',$var);
    }
}
