<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fear and Hunger - Protagonistas</title>
</head>
<body>
    <h1>Perssonagens jogaveis de fear & hunger</h1>
    <section>
        <?php 
            foreach($characters as $character) {
                echo "
                    <h2>Classe: {$character['class']}</h2>
                    <h3>Nome: {$character['name']}</h2>
                    <p><strong>Lore:</strong> {$character['lore']}</p>
                ";
            }
        ?>
    </section>
</body>
</html>
