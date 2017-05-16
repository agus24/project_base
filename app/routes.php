<?php

$route->get('', '\App\Controllers\PagesController@home');
$route->get('about', '\App\Controllers\PagesController@about');
$route->get('contact', '\App\Controllers\PagesController@contact');
$route->get('user', '\App\Controllers\UserController@index');
$route->get('about/culture', '\App\Controllers\PagesController@aboutCulture');
$route->post('user', '\App\Controllers\UserController@store');
$route->get('user/{data}', '\App\Controllers\UserController@test');
