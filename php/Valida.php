<?php
$cookie_usuario = $_COOKIE["usuario"];
$cookie_senha = $_COOKIE["senha"];

include_once("conexao.php");

$sql = mysqli_query($con, "SELECT * FROM clientes WHERE email = '$cookie_usuario'  AND  senha = '$cookie_senha'");

if ($sql->num_rows != 1) {

    header("Location: ../html/entrar.html");
    exit();
}
