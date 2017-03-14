<?php
define('DS', DIRECTORY_SEPARATOR, true);
define('BASE_PATH', __DIR__ . DS, TRUE);

$config = require "config.php";

require "vendor/autoload.php";
require "core/function/function.php";
require "core/route/route.php";
