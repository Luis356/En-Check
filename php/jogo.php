<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jogo inglês</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Palavra em Inglês</th>
        </tr>

        <?php

        require_once("conexao.php");
        $sql = mysqli_query($con, "SELECT palavra FROM palavras ORDER BY rand() LIMIT 1");
        $linha = $sql->fetch_assoc();

        ?>

        <tr>
            <td><?= $linha['palavra'] ?></td>
        </tr>

    </table>

    <form action="verificaPalavra.php" method="get">
        Tradução: <input type="text" name="traducao_texto" id="traducao_texto">
        <button type="submit">Traduzir</button>
    </form>

</body>

</html>