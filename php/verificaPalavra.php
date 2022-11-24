<?php

$traducao_usuario = $_GET["traducao_texto"];

require('conexao.php');
require('valida.php');

$sql = mysqli_query($con, "SELECT traducao FROM palavras WHERE traducao = '{$traducao_usuario}'");

if (mysqli_num_rows($sql) == 0) {

    echo '<p>Errou a tradução, Tente novamente!!!</p>';
    header('Location: en-check.php');
    exit();
} else {

    echo '<p>Acertou</p>';

    $sql_seleciona = mysqli_query($con, "SELECT pontuacao FROM clientes WHERE email = '$cookie_usuario'");
    $row = mysqli_fetch_assoc($sql_seleciona);

    if (mysqli_num_rows($sql_seleciona) > 0) {

        $valor = $row['pontuacao'] + 10;

        $sql_insere = mysqli_query($con, "UPDATE clientes SET pontuacao = '$valor' WHERE email = '$cookie_usuario'");
        header("Location: ../html/redireciona.html");
        exit();
    }
}
