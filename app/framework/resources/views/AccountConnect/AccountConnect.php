<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css"> <!-- Referencia do css global -->
    <link rel="stylesheet" href="../assets/css/authenticatioin.css"> <!-- Referencia do css de authenticação -->
    <link rel="shortcut icon" href="../assets/imgs/spothlight-logo.ico" type="image/x-icon">
    <title>Loggar SpothLigth</title>
</head>
<body>
    <header class="logo-container">
        <img src="../assets/imgs/spothlight-logo.png" alt="logo SpothLigth">
    </header>
    
    <main>
        <h1>Faça o login e comece a curtir</h1>
        <form action="/authentication/login" method="post">
            <content class="input-label">
                <label for="email">Endereço de e-mail</label>
                <input type="email" id="email" name="email" placeholder="Inssira seu nome" required>
            </content>
            
            <content class="input-label">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="*************" required>
            </content>
            
            <input class="submit" type="submit" value="Cadastrar">
        </form>

        <content class="action-container">
            <span>Ainda não tem uma conta? <a href="/authentication/register">Se registre aqui.</a></span>
        </content>
        
    </main>
</body>
</html>
