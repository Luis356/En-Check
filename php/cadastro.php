<?php
//  DECLARA UMA VARIAVEL COM ESSE EMAIL
$nome_cad = $_POST["nome_cadastro"];
$usuario_cad = $_POST["usuario_cadastro"];
$email_cad = $_POST['email_cadastro'];
$senha_cad = $_POST["senha_cadastro"];


if (strlen($nome_cad) != 0 && strlen($usuario_cad) != 0 && strlen($email_cad) != 0 && strlen($senha_cad) != 0) {

    //  CONECTA AO BANCO DE DADOS
    include("conexao.php");

    // CONSULTA SE TEM UM EMAIL IGUAL A O EMAIL DO TESTE
    $sql = mysqli_query($con, "SELECT * FROM clientes WHERE email = '{$email_cad}'");

    //  SE O RETORNO FOR MAIOR QUE ZERO, QUER DIZER QUE ESSE EMAIL JÁ ESTÁ CADASTRADO.
    if (mysqli_num_rows($sql) > 0) {

        // usuario invalido

        header("Location: ../erro404.html");
        exit();
    } else {

        // usuario valido
        //inserindo ele na tabela

        mysqli_query($con, "INSERT INTO clientes VALUES (null, '$nome_cad', '$usuario_cad', '$email_cad', '$senha_cad', null)");
        header("Location: login.php?email=$email_cad&senha=$senha_cad");
        exit();
    }
} else {

    header("Location: ../erro404.html");
    exit();
}
