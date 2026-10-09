<?php
require_once __DIR__ . "/init.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noticiaEditar = $_GET['id'];
    $eventoAlterado = $_POST;

    $_SESSION['eventos'][$noticiaEditar] = $eventoAlterado;
    header('Location: index.php');
    exit;
}