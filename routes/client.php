<?php

use Nam\Xuongoop\Controllers\Client\AuthentController;
use Nam\Xuongoop\Controllers\Client\AboutController;
use Nam\Xuongoop\Controllers\Client\ContactController;
use Nam\Xuongoop\Controllers\Client\HomeController;
use Nam\Xuongoop\Controllers\Client\LoginController;
use Nam\Xuongoop\Controllers\Client\ProductController;

$router->get('/',                  HomeController::class       . '@index');
$router->get('/about',             AboutController::class      . '@index');

$router->get('/contact',           ContactController::class    . '@index');
$router->post('/contact/store',    ContactController::class    . '@store');

$router->get('/login',             LoginController::class    . '@showFormLogin');
$router->post('/handle-login',     LoginController::class    . '@login');
$router->get('/logout',            LoginController::class    . '@logout');
// Authent
// $router->get('/login',                  AuthentController::class       . '@showFormLogin');
// $router->post('/login/handle-login',    AuthentController::class       . '@login');
// $router->get('/logout',                 AuthentController::class       . '@logout');
// $router->get('/register',               AuthentController::class       . '@showFormRegister');
// $router->post('/register/store',        AuthentController::class       . '@store');
