<?php
require_once __DIR__ . '/init.php';

$id = $_GET['id'];
if (!isset($_SESSION['eventos'][$id])):
    header('Location: index.php');
    exit;
else:
?>
<html>
    <head></head>
    <body>
        
    </body>
</html>
<?php endif; ?>