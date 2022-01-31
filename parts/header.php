<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Jane Doe</title>
        <link rel="stylesheet" href="../public/style.css">
        <script src="https://kit.fontawesome.com/351e9300a0.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php
        if (isset($_GET['e'])) {
            displayMessage($_GET['e'], ERROR);
        }
        elseif (isset($_GET['s'])) {
            displayMessage($_GET['s']);
        }
    ?>
    <header>
        <h1>Jane Doe</h1>
        <?php require __DIR__ . '/../parts/menu.php';?>
    </header>