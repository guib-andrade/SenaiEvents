<?php
    require_once __DIR__ . "/init.php";

?>

<html>
    <head></head>
    <body>
        <center>
        <h1>SenaiEvents</h1>
        <form action="formEdicao.php" method="POST">
            <select name="id" id="id">
                <?php foreach($_SESSION['eventos'] as $chave => $evento): ?>
                    <option value="<?= $chave ?>"><?= $evento['titulo'] ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>