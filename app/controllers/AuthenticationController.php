<?php

namespace app\controllers;

class AuthenticationController
{
    public function login() {
        render("AccountConnect", []);
    }

    public function register() {
        render("AccountRegister", []);
    }
}