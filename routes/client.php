<?php

use Nam\Xuongoop\Controllers\Client\AboutController;
use Nam\Xuongoop\Controllers\Client\ContactController;
use Nam\Xuongoop\Controllers\Client\HomeController;
use Nam\Xuongoop\Controllers\Client\ProductController;


$router->get('/',                  HomeController::class       . '@index');
$router->get('/about',             AboutController::class      . '@index');

$router->get('/contact',           ContactController::class    . '@index');
$router->post('/contact/store',    ContactController::class    . '@store');

$router->get('/products',          ProductController::class    . '@index');
$router->get('/products/{id}',     ProductController::class    . '@detail');

// $router->get('/',function(){
//     echo "123";
// });