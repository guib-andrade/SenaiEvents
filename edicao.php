<?php
require_once __DIR__ . '/init.php';

$id = $_GET['id'];
if (!isset($_SESSION['eventos'][$id])):
    header('Location: index.php');
    exit;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $area = $_POST['area'];
    $data = $_POST['data'];
    $inicio = $_POST['inicio'];
    $fim = $_POST['fim'];
    $local = $_POST['local'];
    $responsavel = $_POST['responsavel'];

    $_SESSION['eventos'][$id] = [
        'titulo' => $titulo,
        'descricao' => $descricao,
        'area' => $area,
        'data' => $data,
        'inicio' => $inicio,
        'fim' => $fim,
        'local' => $local,
        'responsavel' => $responsavel
    ];
    header('Location: index.php');
    exit;
}

$evento = $_SESSION['eventos'][$id];
?>

<html>
    <head></head>
    <body>
      <h1>Editar Eventos</h1>  
    </body>
</html>
<?php endif; ?>