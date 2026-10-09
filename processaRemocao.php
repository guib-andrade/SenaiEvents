<?php
require_once __DIR__ . "/init.php";
$eventoRemover = $_GET['id'];
unset($_SESSION['eventos'][$eventoRemover]);
header("Location:index.php");