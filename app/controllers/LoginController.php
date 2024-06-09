<?php

namespace app\controllers;

use app\framework\database\Connection;

class LoginController
{
    public function bind() {
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        if (empty($email) || empty($password)) {
            echo "Usuarios ou senhas invalidos";
            die();
        }

        $connection = Connection::getConnection();
        $prepare = $connection->prepare("SELECT * FROM users WHERE email = :email");
        $prepare->execute([
            'email' => $email
        ]);

        $userFound = $prepare->fetchObject();

        if (!$userFound) {
            echo "Usuario não indentificado";
            die();
        }

        if ($password != $userFound->senha) {
            echo "$password igual a $userFound->senha";
            die();
        }

        $_SESSION['logged'] = true;
        unset($userFound->senha);
        $_SESSION['user'] = $userFound;

        return redirect("/");
    }

    public function store() {
        $picture = $_FILES['picture']['tmp_name'];
        $name = strip_tags($_POST['name']);
        $user_type = strip_tags($_POST['user_type']);
        $email = strip_tags($_POST['email']);
        $password = strip_tags($_POST['password']);

        $fileContent = file_get_contents($picture);
        $fileContentBase64 = base64_encode($fileContent);
    
        if (empty($name) || empty($email) || empty($password) || empty($user_type)) {
            echo "Nome, email, senha ou tipo de usuário inválidos";
            die();
        }
    
        $connection = Connection::getConnection();
    
        $prepare = $connection->prepare("SELECT * FROM users WHERE email = :email");
        $prepare->execute(['email' => $email]);
    
        if ($prepare->fetchObject()) {
            echo "Este e-mail já está em uso";
            die();
        }
    
        $prepare = $connection->prepare("INSERT INTO users (nome, email, senha, user_type, user_picture) VALUES (:name, :email, :password, :user_type, :picture)");
        $prepare->execute(['name' => $name, 'email' => $email, 'password' => $password, 'user_type' => $user_type, 'picture' => !empty($fileContentBase64) ? "data:image/jpeg;base64,$fileContentBase64" : '']);
    
    
        $prepare = $connection->prepare("SELECT * FROM users WHERE email = :email");
        $prepare->execute(['email' => $email]);
        $userFound = $prepare->fetchObject();
    
        $_SESSION['logged'] = true;
        unset($userFound->senha);
        $_SESSION['user'] = $userFound;
    
        return redirect("/");
    }
    
    public function logout() {
        session_destroy();
        return redirect('/authentication/login');
    }

    public function getStatus() {
        header('Content-Type: application/json');
    
        $response = [
            "logged" => isset($_SESSION['logged']) && $_SESSION['logged'],
            'userPicture' => $_SESSION['user']->user_picture ?? null,
            'userType' => $_SESSION['user']->user_type ?? null,
            'userId' => $_SESSION['user']->id ?? null
        ];
        echo json_encode($response);
    }
    
    
}