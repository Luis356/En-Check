<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Pagina Inicial</title>
  <link rel="stylesheet" href="../css/principal.css" />
  <link rel="stylesheet" href="../css/menuResponsivo.css" />
  <link rel="stylesheet" href="../css/inicial.css" />
  <link rel="shortcut icon" href="../imagens/inicial.jpeg" />
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
    <div class="sub-header">
      <ul class="sub-lista">
        <li class="itens-lista"><a href="#" class="link-lista">Inglês</a></li>
        <li class="itens-lista"><a href="#" class="link-lista">Alemão</a></li>
        <li class="itens-lista">
          <a href="#" class="link-lista">Espanhol</a>
        </li>
        <li class="itens-lista">
          <a href="#" class="link-lista">Japones</a>
        </li>
        <li class="itens-lista"><a href="#" class="link-lista">Chines</a></li>
        <li class="itens-lista">
          <a href="#" class="link-lista">Português</a>
        </li>
      </ul>
    </div>
  </header>
  <!--FIM DO HEADER-->

  <main>
    <div class="conteudo">
      <div class="titulo">
        <h1 class="texto-titulo">Venha aprender um novo idioma!!</h1>
        <p class="descricao-titulo">
          Com a En-Check você pode melhorar suas habilidades em diversos idiomas <b style="color: red; ">gratuitamente</b>, fazendo com que o sonho de conseguir ser fluente em algum desses idiomas seja cada vez mais possível
        </p>
      </div>
      <!--FIM DO TITULO-->
      <div class="container">
        <div class="card">
          <div class="img">
            <span>En-Check</span>
          </div>

          <div class="content">
            <p class="desc">
              A En-check usa de um jogo para que você consiga memorizar as palavras de forma muito mais rápida e eficiente em comparação com as práticas de estudo normais, ao invés de ficar horas e horas em um processo chato de memorização, aqui, você consegue resultados melhores e de forma mais intuitiva!
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <span>Rank</span>
          </div>

          <div class="content">
            <?php

            $css = '<link href="../css/rank.css" rel="stylesheet">';
            require('conexao.php');
            $sql = mysqli_query($con, "SELECT nome, pontuacao FROM clientes ORDER BY pontuacao DESC LIMIT 0,3");

            $i = 0;
            while ($row = mysqli_fetch_assoc($sql)) {
              $i++;
              echo $css;
            ?>
              <div class="rank">
                <p class="nome"><?php echo $row['nome'] . "<p>-</p>"; ?> </p>
                <p class="ponto"><?php echo $row['pontuacao']; ?></p>
              </div>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>

  <script src="../scripts/menu.js"></script>
</body>

</html>