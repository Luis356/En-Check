<?php

$email_verifica = $_GET['email_recupera'];

require('conexao.php');

$verificandoEmail = mysqli_query($con, "SELECT senha FROM clientes WHERE email = '$email_verifica'");

$linha = mysqli_fetch_assoc($verificandoEmail);

if (mysqli_num_rows($verificandoEmail) > 0) {

    echo "<p>Sua senha é: $linha[senha]";

}
