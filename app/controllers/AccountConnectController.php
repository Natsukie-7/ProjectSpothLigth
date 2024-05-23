<?php

namespace app\controllers;

class AccountConnectController
{
    public function index()
    {
        render('AccountConnect', ['name' => 'nathan']);
    }
}