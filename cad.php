<?php

require_once("conexao.php");

//TABELA: dados

    $nome_cad = $_POST["nome"];
    $email_cad = $_POST["email"];
    $senha_cad = $_POST["senha"];
    $cep_cad = $_POST["cep"];
    $ra_cad = $_POST["ra"];

    $inserir = "INSERT INTO dados VALUES (null, '$nome_cad', '$email_cad', '$senha_cad', '$cep_cad', '$ra_cad')";

    $result = $con->query($inserir);

    header("Location: restrita.html");