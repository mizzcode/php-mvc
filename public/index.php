<?php

use Mizz\Belajar\PHP\MVC\App\Router;
use Mizz\Belajar\PHP\MVC\Controller\HomeController;
use Mizz\Belajar\PHP\MVC\Controller\ProdukController;

require_once __DIR__ . "/../vendor/autoload.php";

// Home Controller
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
Router::add('GET', '/register', HomeController::class, 'register');
Router::add('GET', '/logout', HomeController::class, 'logout');

// Produk Controller
Router::add('GET', '/produk/([0-9a-zA-Z]*)/category/([a-zA-Z]*)', ProdukController::class, 'category');

Router::run();