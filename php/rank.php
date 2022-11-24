<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menuResponsivo.css">
    <link rel="stylesheet" href="../css/principal.css">
    <title>Ranking</title>
</head>

<body>
    <header>
        <nav class="menu-top">
            <a href="../php/index.php" class="link" id="logo">En-Check</a>
            <ul class="menu-lista">
                <li class="itens-menu" id="item-home">
                    <a class="link" href="../html/sobre.html">SOBRE</a>
                </li>
                <li class="itens-menu" id="item-home">
                    <a class="link" href="../html/contato.html">CONTATO</a>
                </li>
                <li class="itens-menu" id="item-login">
                    <a class="link" href="../html/entrar.html">ENTRAR</a>
                </li>
            </ul>
            <div class="menu-mobile">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <div class="conteudo">
            <?php

            $css = '<link href="../css/ranking.css" rel="stylesheet">';
            require('conexao.php');
            $sql = mysqli_query($con, "SELECT nome, pontuacao FROM clientes ORDER BY pontuacao DESC LIMIT 0,3");

            $i = 0;
            while ($row = mysqli_fetch_assoc($sql)) {
                $i++;
                echo $css;
            ?>
                <div class="rank">
                    <p class="nome"><?php echo $row['nome']; ?> </p>
                    <p class="ponto"><?php echo $row['pontuacao']; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>