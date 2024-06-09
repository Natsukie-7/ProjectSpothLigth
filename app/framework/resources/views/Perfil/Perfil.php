<?php $this->extends('Master', [
    'title' => $user->nome,
    "childCss" => [
        "./assets/css/perfil.css"
        ],
    "childScripts" => [
        "./assets/js/perfil.js"
    ]
    ]);?>

<h1>Perfil:</h1>

<form action="/perfil/edit" method="post" enctype="multipart/form-data">
    <div class="input-label">
        <label for="picture">Foto de perfil:</label>
        <input type="file" id="picture" name="picture" accept="image/*" required>
    </div>

    <div class="input-label">
        <label for="name">Inssira seu nome</label>
        <input value="<?php echo $user->nome ?>" type="input" id="name" name="name" placeholder="Inssira seu nome" required>
    </div>

    <div class="input-label">
        <label for="user_type">Tipo de usuário:</label>
        <select id="user_type" name="user_type" required>
            <option value="default">Padrão</option>
            <option value="artist">Artista</option>
        </select>
    </div>

    <div class="input-label">
        <label for="email">Endereço de e-mail</label>
        <input value="<?php echo $user->email ?>" type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
    </div>
    
    <div class="input-label">
        <label for="password">Senha:</label>
        <input value="<?php echo $user->senha ?>" type="input" id="password" name="password" placeholder="*************" required>
    </div>
    
    <input class="submit" type="submit" value="Concluir edição">
</form>

