<?php
include_once("valida.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../css/menuNaoResponsivo.css" />
  <link rel="shortcut icon" href="../imagens/jogo.jpeg" />
  <title>En-check Inglês</title>
</head>

<body>
  <header>
    <nav class="menu-top">
      <a href="index.php" class="link" id="logo">En-Check</a>

      <ul class="menu-lista">
        <li class="itens-menu" id="item-home">
          <a class="link" href="rank.php">RANK</a>
        </li>
        <li class="itens-menu" id="item-login">
          <a class="link" href="sair.php">SAIR</a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <?php
    require('jogo.php');
    ?>
  </main>
</body>

</html>