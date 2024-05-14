<?php

use app\framework\classes\Engine;
use app\framework\classes\Router;

function path() {
    return $_SERVER['REQUEST_URI'];
}

function request() {
    return strtolower($_SERVER['REQUEST_METHOD']);
}

function routerExecute() {
    try {
        $routes = require '../app/routes/routes.php';
        $router = new Router;

        $router->execute($routes);
    } catch (\Throwable $err) {
        echo $err->getMessage();
    }
}

function view(string $view, array $data = []) {
    try {
        $engine = new Engine;
        echo $engine->render($view, $data);
    } catch (\Throwable $err) {
        echo $err->getMessage();
    }
}