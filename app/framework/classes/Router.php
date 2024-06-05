<?php

namespace app\framework\classes;

use Exception;

class Router
{
    private string $path;
    private string $request;
    
    public function execute($routes) {
        $this->path = path();
        $this->request = request();

        $this->checkRouteUriExistence($routes); // valida se a rota chamada na url é valida no sistema

        [$controller, $action] = explode("@", $routes[$this->request][$this->path]);

        if (str_contains($action, ":")) {
            [$action, $auth] = explode(':', $action);

            Auth::check($auth);
        }

        $controllerNameSpace = "app\\controllers\\{$controller}";

        $this->validateController($controllerNameSpace, $controller, $action);

        $controllerInstance = new $controllerNameSpace;
        $controllerInstance->$action();
    }
    private function checkRouteUriExistence($routes) {
        if(!isset($routes[$this->request])) {
            throw new Exception("Route {$this->request} doesn't exist");
        }

        if(!isset($routes[$this->request][$this->path])) {
            throw new Exception("Route {$this->path} doesn't exist");
        }
    }

    private function validateController(string $controllerNameSpace, string $controller, string $action) {
        if (!class_exists($controllerNameSpace)) {
            throw new Exception("Controller {$controller} is not valid!");
        }

        if (!method_exists($controllerNameSpace, $action)) {
            throw new Exception("The action {$action} doesn't exist in {$controller}");
        }
    }
}
