<?php
    require_once __DIR__ . "/init.php";

?>

<html>
    <head></head>
    <body>
        <center>
        <h1>SenaiEvents</h1>
        <form action="processaEdicao.php" method="POST">
            <select name="evento" id="evento">
                <?php foreach($_SESSION['eventos'] as $chave => $evento): ?>
                    <option value="<?= $chave ?>"><?= $evento['titulo'] ?></option>
                <?php endforeach; ?>
            </select>
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>