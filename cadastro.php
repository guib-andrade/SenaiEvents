<?php
require_once 'init.php';
?>

<html>
    <head>
        <title>Cadastro - SenaiEvents</title>
    </head>
    <body>
        <center><h1>Cadastre-se para o SenaiEvents</h1></center>

        <center><form action="/processaCadastro.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required><br><br>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea><br><br>

            <label for="area">Área:</label>
            <input type="text" id="area" name="area" required><br><br>

            <label for="data">Data:</label>
            <input type="date" id="data" name="data" required><br><br>

            <label for="inicio">Início:</label>
            <input type="time" id="inicio" name="inicio" required><br><br>

            <label for="fim">Fim:</label>
            <input type="time" id="fim" name="fim" required><br><br>

            <label for="local">Local:</label>
            <input type="text" id="local" name="local" required><br><br>

            <label for="responsavel">Responsável:</label>
            <input type="text" id="responsavel" name="responsavel" required><br><br>

            <?php  
                if(isset ($_GET['erro']) && $_GET['erro'] !=""){
                    echo "<p>Erro Detectado: {$_GET['erro']} <p>";
                }
            ?>

            <button type="submit">Cadastrar</button>

        </form></center>
    </body>
</html>