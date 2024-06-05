<?php

use app\framework\classes\Macros;
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
        $engine->dependecies([new Macros]);
        echo $engine->render($view, $data);
    } catch (\Throwable $err) {
        echo $err;
    }
}

function getCommomTemplate(string $template) {
    $path = dirname(__FILE__, 2);
    $file = "$path/resources/templates/$template.php";

    if (file_exists($file)) {
        return $file;
    } else {
        return false;
    }
}

function redirect(string $target) {
    return header('Location:'. $target);
}