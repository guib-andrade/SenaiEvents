<?php
require_once __DIR__ . "/init.php";
?>
<html>
    <head></head>
    <body>
        <center>
            <h1>Remoção de Eventos</h1>
            <form action="">
                <select id="evento">
                    <?php foreach($_SESSION['eventos'] as $id => $evento): ?>
                    <option value="<?= $id ?>"><?= $evento['titulo'] ?></option>
                    <?php endforeach; ?>
                </select>
            </center>
        </form>
    </body>
</html>