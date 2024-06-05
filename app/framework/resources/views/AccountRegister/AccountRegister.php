<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css"> <!-- Referencia do css global -->
    <link rel="stylesheet" href="../assets/css/authenticatioin.css"> <!-- Referencia do css de authenticação -->
    <link rel="shortcut icon" href="../assets/imgs/spothlight-logo.ico" type="image/x-icon">
    <title>Inscrever-se SpothLigth</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="../assets/imgs/spothlight-logo.png" alt="logo SpothLigth">
        </div>
        
    </header>
    
    <main>
        <h1>Se registre e comece a curtir</h1>
        <form action="/authentication/register" method="post">
            <div class="input-label">
                <label for="picture">Foto de perfil:</label>
                <input type="file" id="picture" name="picture" accept="image/*">
            </div>

            <div class="input-label">
                <label for="name">Inssira seu nome</label>
                <input type="input" id="name" name="name" placeholder="Inssira seu nome" required>
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
                <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
            </div>
            
            <div class="input-label">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="*************" required>
            </div>
            
            <input class="submit" type="submit" value="Cadastrar">
        </form>

        <div class="action-container">
            <span>Já tem uma conta? <a href="/authentication/login">Faça login aqui.</a></span>
        </div>
        
    </main>
</body>
</html>
