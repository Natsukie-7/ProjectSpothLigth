<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        render('Home', ['name' => 'nathan']);
    }
}