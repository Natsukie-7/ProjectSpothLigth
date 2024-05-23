<?php

namespace app\controllers;

class LoginController
{
    public function index()
    {
        render('Home', ['name' => 'nathan']);
    }

    public function store() {
        echo 'login';
    }
}