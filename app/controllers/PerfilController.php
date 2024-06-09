<?php

namespace app\controllers;

use app\framework\database\Connection;

class PerfilController
{
    public function renderPerfil() {
        $connection = Connection::getConnection();
        $prepare = $connection->prepare("SELECT * FROM users WHERE id = :user_id");
        $prepare->bindParam(':user_id', $_SESSION['user']->id);
        $prepare->execute();
        $user = $prepare->fetch();
        render("Perfil", ["user" => $user]);
    }

    public function edit() {
        $userId = $_SESSION['user']->id;
        $nome = $_POST["name"];
        $user_type = $_POST["user_type"];
        $email = $_POST["email"];
        $senha = $_POST["password"];
        $picture = $_FILES['picture']['tmp_name'];
        $fileContent = file_get_contents($picture);
        $fileContentBase64 = base64_encode($fileContent);

        $connection = Connection::getConnection();

        $connection = Connection::getConnection();
        $query = "UPDATE users SET nome = :nome, user_type = :user_type, email = :email, senha = :senha, user_picture = :fileContentBase64 WHERE id = :userId";
        $stmt = $connection->prepare($query);
        $stmt->execute([
            "nome" => $nome,
            "user_type" => $user_type,
            "email" => $email,
            "senha" => $senha,
            "fileContentBase64" => "data:image/jpeg;base64,$fileContentBase64",
            "userId" => $userId
        ]);
        $stmt->execute();

        $query = "SELECT nome, user_type, email, user_picture FROM users WHERE id = :userId";
        $stmt = $connection->prepare($query);
        $stmt->execute(["userId" => $userId]);
        $userData = $stmt->fetch();

        $_SESSION['user']->nome = $userData->nome;
        $_SESSION['user']->user_type = $userData->user_type;
        $_SESSION['user']->email = $userData->email;
        $_SESSION['user']->user_picture = $userData->user_picture;

        redirect('/');
    }
    

    public function renderArtistProfile() {
        render("ArtistPerfil",
            []);
    }
}