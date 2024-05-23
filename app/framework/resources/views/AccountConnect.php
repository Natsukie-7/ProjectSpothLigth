<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="/login" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br>
        
        <label for="confirmar_senha">Confirmar Senha:</label><br>
        <input type="password" id="confirmar_senha" name="confirmar_senha" required><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
