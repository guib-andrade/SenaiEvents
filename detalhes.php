<?php
require_once __DIR__ . "/init.php";
$eventoEscolhido = $_GET['id'];
?>
<html>
    <head><title>Detalhes-<?= $_SESSION['eventos'][$eventoEscolhido]['titulo'] ?></title></head>
    <h1><?= $_SESSION['eventos'][$eventoEscolhido]['titulo'] ?></h1>
</html>