<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('user', 'UserController@index');
$router->post('user', 'UserController@store');
