<?php

use App\Controller\PostController;
//var_dump($_SERVER['REQUEST_URI']);die;
//var_dump($_GET['p']);die;
require './vendor/autoload.php';
$router = new \App\Fram\Route\Router();
$router->getController();

