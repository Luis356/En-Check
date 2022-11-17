<?php
$usuario = $_COOKIE["usuario"];
$senha = $_COOKIE["senha"];

include_once("conexao.php");

$sql = mysqli_query($con, "SELECT * FROM clientes WHERE email = '$usuario'  AND  senha = '$senha'");

if ($sql->num_rows != 1) {

    header("Location: Erro.php");
    exit(0);

}