<?php $this->extends('Master', ['title' => $title]); ?>

<form action="/addContent/send" method="POST" enctype="multipart/form-data">
    <label for="audioFile">Arquivo de Áudio:</label>
    <input type="file" id="audioFile" name="audioFile" accept="audio/*" required>
    
    <label for="imageFile">Imagem:</label>
    <input type="file" id="imageFile" name="imageFile" accept="image/*" required>
    
    <label for="contentName">Nome do Conteúdo:</label>
    <input type="text" id="contentName" name="contentName" required>
    
    <label for="contentDescription">Descrição do Conteúdo:</label>
    <textarea id="contentDescription" name="contentDescription" required></textarea>
    
    <button type="submit">Enviar</button>
</form>


<style>
    form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #333;
    border-radius: 8px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="file"],
input[type="text"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    background-color: #444;
    border: none;
    border-radius: 4px;
    color: #fff;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: var(--magenta);
    border: none;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #78004c;
}

</style>