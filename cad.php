<?php

require_once("conexao.php");

//TABELA: dados

    $nome_cad = $_GET["nome"];
    $email_cad = $_GET["email"];
    $senha_cad = $_GET["senha"];
    $cep_cad = $_GET["cep"];

    $inserir = "INSERT INTO dados VALUES (null, '$nome_cad', '$email_cad', '$senha_cad', '$cep_cad')";
    $result = $con->query($inserir);

    header("Location: acessar.php?email=$email_cad&senha=$senha_cad");
    exit(0);