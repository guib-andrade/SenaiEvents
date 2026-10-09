<?php
require_once __DIR__ . '/init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['titulo'] == ""){
        header("Location: cadastro.php?erro=O título do evento é obrigatório.");
        exit;
    }
    if($_POST['descricao'] == ""){
        header("Location: cadastro.php?erro=A descrição do evento é obrigatória.");
        exit;
    }
    if($_POST['area'] == ""){
        header("Location: cadastro.php?erro=A área do evento é obrigatória.");
        exit;
    }
    if($_POST['data'] == ""){
        header("Location: cadastro.php?erro=A data do evento é obrigatória.");
        exit;
    }
    if($_POST['inicio'] == ""){
        header("Location: cadastro.php?erro=O horário de início do evento é obrigatório.");
        exit;
    }
    if($_POST['fim'] == ""){
        header("Location: cadastro.php?erro=O horário de fim do evento é obrigatório.");
        exit;
    }
    if($_POST['local'] == ""){
        header("Location: cadastro.php?erro=O local do evento é obrigatório.");
        exit;
    }
    if($_POST['responsavel'] == ""){
        header("Location: cadastro.php?erro=O responsável pelo evento é obrigatório.");
        exit;
    }

}

$_SESSION['eventos'][] = $_POST;
header('Location: index.php');