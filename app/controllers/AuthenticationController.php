<?php

namespace app\controllers;

use app\framework\database\Connection;

class AuthenticationController
{
    public function login() {
        render("AccountConnect", []);
    }

    public function register() {
        render("AccountRegister", []);
    }
}