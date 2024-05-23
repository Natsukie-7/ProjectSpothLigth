<?php

namespace app\controllers;

use app\framework\database\Connection;

class AuthenticationController
{
    public function index() {
        render("AccountConnect", ["Nome" => "nathan"]);
    }
    public function login() {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if (empty($email) || empty($password)) {
            echo 'Invalido';
        }

        $connection = Connection::getConnection();
        $query = "SELECT * FROM users WHERE email = :email";
        $statement = $connection->prepare($query);
        $statement->bindParam(':email', $email);
        $statement->execute();
        $user = $statement->fetchObject();

        foreach ($user as $key => $value) {
            echo $key . ': ' . $value . '<br>';
        }
        

        if (empty($user)) {
            echo 'Usuario não encontrado';
        }

        $_SESSION['Logged'] = true;
        $_SESSION['user'] = $user;

        redirect('home');
    }


    public function register() {

    }
}