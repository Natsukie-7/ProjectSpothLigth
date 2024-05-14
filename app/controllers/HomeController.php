<?php

namespace app\controllers;

class HomeController
{
    public function index()
    {
        echo "
            <h2>Tela de Home</h2>
            <ul>
                <li><a href='/mercenary'>Mercenary</a></li>
                <li><a href='/knight'>Knight</a></li>
                <li><a href='/dark-priest'>Dark Priest</a></li>
                <li><a href='/outlander'>Outlander</a></li>
            </ul>
        ";
    }
}