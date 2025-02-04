<?php

use core\Router;
use controllers\front\HomeController;

$router = new Router();

$router->get('/home', HomeController::class, 'home');

$router->dispatch();
?>