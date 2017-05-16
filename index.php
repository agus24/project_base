<?php

use App\Core\Router;
use Core\App;
use System\Request;
use System\Route;

require 'core/helper.php';
require 'vendor/autoload.php';
require 'core/bootstrap.php';

App::run();

$route->end();
