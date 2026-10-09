<?php
require_once __DIR__ . "/init.php";
?>
<html>
    <head></head>
    <body>
        <center>
            <h1>Remoção de Eventos</h1>
            <form action="processaRemocao.php" method="GET">
                <select name="id" id="id">
                    <?php foreach($_SESSION['eventos'] as $id => $evento): ?>
                    <option value="<?= $id ?>"><?= $evento['titulo'] ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit">Remover</button>
            </center>
        </form>
    </body>
</html>