<?php

$traducao_usuario = $_GET["traducao_texto"];

require('conexao.php');
require('Valida.php');

$sql = mysqli_query($con, "SELECT traducao FROM palavras WHERE traducao = '{$traducao_usuario}'");

if (mysqli_num_rows($sql) == 0) {

    echo '<p>Erro</p>';
} else {

    echo '<p>Acertou</p>';

    $sql_seleciona = mysqli_query($con, "SELECT pontuacao FROM clientes WHERE email = '$cookie_usuario'");

    if (mysqli_num_rows($sql_seleciona) == 1) {

        $sql_insere = mysqli_query($con, "UPDATE clientes SET pontuacao = 10 WHERE email = '$cookie_usuario'");
        header("Location: redireciona.html");
    }
}
