<?php
require_once __DIR__ . "/init.php";
$eventoEscolhido = $_GET['id'];
if(!isset($_SESSION['eventos'][$eventoEscolhido])):
    print "
    <html>
    <body>
    <center>
    <h1>Atenção! Esse evento não existe/expirou, por favor, retornar a página inicial.</h1>
    <button><a href='/index.php'>Retornar</a></button>
    </center>
    </body>
    </html>
    ";
else:
?>
<html>
    <head><title>Detalhes-<?= $_SESSION['eventos'][$eventoEscolhido]['titulo'] ?></title></head>
    <a href="/index.php">Retornar</a>
    <h1><?= $_SESSION['eventos'][$eventoEscolhido]['titulo'] ?></h1>
    <h2><b><?= $_SESSION['eventos'][$eventoEscolhido]['descricao'] ?></b></h2>
    <h2>Responsável: <b><?= $_SESSION['eventos'][$eventoEscolhido]['responsavel'] ?></b></h2>
    <h2>Data: <?= $_SESSION['eventos'][$eventoEscolhido]['data'] ?></h2>
    <h2>Área: <?= $_SESSION['eventos'][$eventoEscolhido]['area'] ?></h2>
    <h3>Horário de Início: <?= $_SESSION['eventos'][$eventoEscolhido]['inicio'] ?></h3>
    <h3>Horário de Finalização: <?= $_SESSION['eventos'][$eventoEscolhido]['fim'] ?></h3>
    <h3>Local do Evento: <?= $_SESSION['eventos'][$eventoEscolhido]['local'] ?></h3>
</html>
<?php endif ?>