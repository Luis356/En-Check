<?php

$traducao_usuario = $_GET["traducao_texto"];
require_once('conexao.php');

$sql = mysqli_query($con, "SELECT traducao FROM palavras WHERE traducao = '{$traducao_usuario}'");

if (mysqli_num_rows($sql) == 0) {
    echo '<p>Erro</p>';
} else {
    echo '<p>Acertou</p>';

    $sql_cliente_seleciona = mysqli_query($con, "SELECT pontuacao FROM clientes WHERE usuario = '{}'");

    header("Location: redireciona.html");
}
