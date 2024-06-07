<?php

namespace app\controllers;

use app\framework\database\Connection;

class HomeController
{
    public function index()
    {
        render('Home', ['title' => 'SpothLigth - Home']);
    }

    public function getArtists()
    {
        $connection = Connection::getConnection();
        $query = $connection->prepare("SELECT `nome`, `user_picture` FROM users WHERE `user_type` = 'artist'");
        $query->execute();
        $data = $query->fetchAll();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}