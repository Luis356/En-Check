<?php

@$email = trim($_GET["email"]);
@$senha = trim($_GET["senha"]);

include("conexao.php");

if (strlen($email) == 0 || strlen($senha) == 0) {
    echo "erro - lenght";
    exit(0);
} else {

    $sql = mysqli_query($con, "SELECT email, senha FROM clientes WHERE email='$email' AND senha='$senha'");

    if (mysqli_num_rows($sql) == 1) {

        setcookie("usuario", "$email");
        setcookie("senha", "$senha");
        header("Location: restrita.php");
        exit(0);
    } else {

        echo "erro - num_rows";
        exit(0);
    }
}
