<?php
require_once 'init.php';
?>
<html>
    <head>Página Inicial</head>
    <body>
        <center>
            <h1>SenaiEvents</h1>
        </center>
        <?php foreach($_SESSION['eventos'] as $evento => $id): ?>
            <h2><?= $_SESSION['titulo'] ?></h2>
            <p><?= $_SESSION['descricao'] ?></p>
            <p>Data: <?= $_SESSION['data'] ?></p>
            <p>Área: <?= $_SESSION['area'] ?></p>
            <a href="detalhes.php?id=<?= $id ?>"></a>
        <?php endforeach ?>
    </body>
</html>