<?php

use core\Router;
use controllers\front\HomeController;
use controllers\front\ArticleController;
use controllers\back\UserController;
// use controllers\back\DashboardController;

$router = new Router();

$router->get('/', HomeController::class, 'home');
$router->get('/article', ArticleController::class, 'article');

$router->get('/login', UserController::class, 'getLogin');
$router->get('/register', UserController::class, 'getRegister');

$router->post('/login',UserController::class, 'login');
$router->post('/register',UserController::class, 'register');


$router->dispatch();
?>