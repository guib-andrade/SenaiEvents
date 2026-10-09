<?php
require_once __DIR__ . "/init.php";
$eventoRemover = $_GET['id'];
if(!isset($_SESSION['eventos'][$eventoRemover])):
    print "
    <center>
    <h1>Atenção! Você está tentando remover um evento inexiste, retorne a página inicial!</h1>
    <button><a href='/index.php'>Retornar</a></button>
    </center>
    ";
else:
unset($_SESSION['eventos'][$eventoRemover]);
header("Location:index.php");
endif;