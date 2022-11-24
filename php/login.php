<?php

@$email = trim($_GET["email"]);
@$senha = trim($_GET["senha"]);

include("conexao.php");

if (strlen($email) == 0 || strlen($senha) == 0) {
    header("Location: ../html/entrar.html");
    exit(0);
} else {

    $sql = mysqli_query($con, "SELECT email, senha FROM clientes WHERE email='$email' AND senha='$senha'");

    if (mysqli_num_rows($sql) == 1) {

        setcookie("usuario", "$email");
        setcookie("senha", "$senha");
        header("Location: en-check.php");
        exit(0);
    } else {

        header("Location: ../html/erro404");
        exit(0);
    }
}
