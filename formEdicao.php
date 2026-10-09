<?php
require_once __DIR__ . "/init.php";
$indiceEvento = $_GET['id'];
$noticiaAtual = $_SESSION['eventos'][$indiceEvento];
?>
<html>
    <head></head>
    <body>
        <center>
            <h1>Edicao - SenaiEvents</h1>
        <form action="processaEdicao.php?id=<?= $indiceEvento ?>" method="POST">
            <label for="titulo">Titulo: </label>
            <input type="text" name="titulo" id="titulo"
            value="<?= $noticiaAtual['titulo'] ?>">
            <br>
            <label for="descricao">Descrição: </label>
            <input type="text" name="descricao" id="descricao"
            value="<?= $noticiaAtual['descricao'] ?>">
            <br>
            <label for="area">Área: </label>
            <input type="text" name="area" id="area"
            value="<?= $noticiaAtual['area'] ?>">
            <br>
            <label for="data">Data: </label>
            <input type="date" name="data" id="data"
            value="<?= $noticiaAtual['data'] ?>">
            <br>
            <label for="inicio">Início: </label>
            <input type="time" name="inicio" id="inicio"
            value="<?= $noticiaAtual['inicio'] ?>">
            <br>
            <label for="fim">Fim: </label>
            <input type="time" name="fim" id="fim"
            value="<?= $noticiaAtual['fim'] ?>">
            <br>
            <label for="local">Local: </label>
            <input type="text" name="local" id="local"
            value="<?= $noticiaAtual['local'] ?>">
            <br>
            <label for="responsavel">Responsável: </label>
            <input type="text" name="responsavel" id="responsavel"
            value="<?= $noticiaAtual['responsavel'] ?>">
            <br>
            <button type="submit">Editar</button>
        </form>
        </center>
    </body>
</html>