<?php

namespace app\controllers;

use app\framework\database\Connection;
use PDO;

class ContentController
{
    public function index() {
        render("AddContent", [
            "title" => "Adicionar Conteudo",
            "userInfo" => $_SESSION["user"]
        ]);
    }

    public function renderContent($id) {
        $connection = Connection::getConnection();
    
        $query = "SELECT
            content.nome,
            content.descricao,
            content.thumbnail,
            content.audio,
            users.nome AS nome_usuario
        FROM content
        INNER JOIN users ON content.created_by = users.id
        WHERE content.id = :id
        ";
    
        $statement = $connection->prepare($query);
        $statement->execute(['id' => $id]);
        $contentData = $statement->fetch();

        render('Content', ["contentData" => $contentData]);
    }
    

    public function register() {
        if (!isset($_FILES['audioFile']) || !isset($_FILES['imageFile'])) {
            echo "Erro: Arquivos de áudio e imagem são obrigatórios.";
            return;
        }
        
        // Verifica se os campos de texto foram preenchidos
        if (empty($_POST['contentName']) || empty($_POST['contentDescription'])) {
            echo "Erro: Nome do conteúdo e descrição do conteúdo são obrigatórios.";
            return;
        }
    
        $contentAudioRaw = $_FILES['audioFile']['tmp_name'];
        $contentPictureRaw = $_FILES['imageFile']['tmp_name'];
    
        $contentAudio = file_get_contents($contentAudioRaw);
        $contentPicture = file_get_contents($contentPictureRaw);
    

        $userId = $_SESSION['user']->id;
        $contentAudioEncoded = base64_encode($contentAudio);
        $contentPictureEncoded = base64_encode($contentPicture);
        $contentName = $_POST['contentName'];
        $contentDescription = $_POST["contentDescription"];

    
        $connection = Connection::getConnection();
        $prepare = $connection->prepare("INSERT INTO content (
                nome,
                descricao,
                thumbnail,
                audio,
                created_by
            ) 

            VALUES (
                :contentName,
                :contentDescription,
                :contentPictureEncoded,
                :contentAudioEncoded,
                :userId
            )
        ");

        $prepare->execute([
            "contentName" => $contentName,
            "contentDescription" => $contentDescription,
            "contentPictureEncoded" => "data:image/jpeg;base64,$contentPictureEncoded",
            "contentAudioEncoded" => "data:audio/mpeg;base64,$contentAudioEncoded",
            "userId" => $userId
        ]);

        redirect('/');
    }
    
    public function getContents() {
        $connection = Connection::getConnection();
        $query = $connection->prepare("SELECT id, nome, thumbnail FROM content");
        $query->execute();
        $data = $query->fetchAll();

        header('Content-Type: application/json');
        echo json_encode($data);
    }
}