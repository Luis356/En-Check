<?php
$nome_cad = $_POST["nome_cadastro"];
$usuario_cad = $_POST["usuario_cadastro"];
$email_cad = $_POST['email_cadastro'];
$senha_cad = $_POST["senha_cadastro"];

if (strlen($nome_cad) != 0 && strlen($usuario_cad) != 0 && strlen($email_cad) != 0 && strlen($senha_cad) != 0) {

    include("conexao.php");

    $sql = mysqli_query($con, "SELECT * FROM clientes WHERE usuario = '{$usuario_cad}'");

    if (mysqli_num_rows($sql) > 0) {

        header("Location: ../erro404.html");
    } else {

        mysqli_query($con, "INSERT INTO clientes VALUES (null, '$nome_cad', '$usuario_cad', '$email_cad', '$senha_cad', 0)");
        header("Location: Acessar.php?email=$email_cad&senha=$senha_cad");
    }
} else {

    header("Location: ../erro404.html");
}
