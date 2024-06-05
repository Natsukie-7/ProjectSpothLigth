<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css"> <!-- Referencia do css global -->
    <link rel="stylesheet" href="./assets/css/master.css"> <!-- Referencia do css global -->
    <link rel="shortcut icon" href="./assets/imgs/spothlight-logo.ico" type="image/x-icon">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php require "MenuEsquerdo.php" ?>

    <main>
        <?php require "Header.php" ?>

        <div id="container">
            <?php echo $this->load(); ?>
        </div>
    </main>

    <script src="./assets/js/master.js"></script>
</body>
</html>