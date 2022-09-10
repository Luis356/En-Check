<?php

require_once("conexao.php");

    $nome_cad = $_GET["nome"];
    $email_cad = $_GET["idade"];
    $senha_cad = $_GET["genero"];
    $emai_d = $_GET["email"];
    $senha_d = $_GET["senha"];

    $inserir = "INSERT INTO dados VALUES (null, '$nome_cad', '$email_cad', '$senha_cad', '$emai_d', '$senha_d')";

    $result = $con->query($inserir);
