<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/global.css"> <!-- Referencia do css global -->
    <link rel="stylesheet" href="./assets/css/master.css"> <!-- Referencia do css global -->
    <link rel="shortcut icon" href="./assets/imgs/spothlight-logo.ico" type="image/x-icon">

    <?php if (isset($childCss))  {
        foreach($childCss as $css) {
            echo '<link rel="stylesheet" href="' . $css . '">';
        }
    } ?>

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

    <a href="/addContent" class="add-anchor">
        <div id="add-content">
            +
        </div>
    </a>
    <?php if (isset($childScripts))  {
        foreach($childScripts as $script) {
            echo '<script src="' . $script . '"></script>';
        }
    } ?>
    <script src="./assets/js/master.js"></script>
</body>
</html>