<?php
require_once __DIR__ . "/init.php";
?>
<html>
    <head><title>Página inicial</title></head>
    <body>
        <a href="resetaSessao.php">Resetar Sessão</a>
        <a href="remocao.php">Remover Notícia</a>
        <center>
            <h1>SenaiEvents</h1>
        </center>
        <?php foreach($_SESSION['eventos'] as $id => $eventos): ?>
            <h2><?= $eventos['titulo'] ?></h2>
            <p><b><?= $eventos['descricao'] ?></b></p>
            <p>Data: <?= $eventos['data'] ?></p>
            <p>Área: <?= $eventos['area'] ?></p>
            <p><a href="detalhes.php?id=<?= $id ?>">Detalhes</a></p>
            <p><a href="edicao.php?id=<?= $id ?>">Editar</a></p>
        <?php endforeach ?>
    </body>
</html>