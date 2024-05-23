<?php

use app\framework\classes\Router;
use app\framework\classes\Engine;

function path() {
    return $_SERVER['REQUEST_URI'];
}

function request() {
    return strtolower($_SERVER['REQUEST_METHOD']);
}

function routerExecute() {
    try {
        $routes = require '../app/routes/Routes.php';
        $router = new Router;

        $router->execute($routes);
    } catch (\Throwable $err) {
        echo $err->getMessage();
    }
}

function render(string $view, array $data = []) {
    try {
        $engine = new Engine;
        echo $engine->render($view, $data);
    } catch (\Throwable $err) {
        echo $err;
    }
}