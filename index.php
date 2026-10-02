<?php
require_once 'init.php';
?>
<html>
    <head>Página Inicial</head>
    <body>
        <center>
            <h1>SenaiEvents</h1>
        </center>
        <?php foreach($_SESSION['eventos'] as $evento): ?>
            <h2><?= $_SESSION['titulo'] ?></h2>
            <p><?= $_SESSION['descricao'] ?></p>
            <p><?= $_SESSION['data'] ?></p>
        <?php endforeach ?>
    </body>
</html>