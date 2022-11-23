<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <title>Pagina Inicial</title>
  <link rel="stylesheet" href="css/principal.css" />
  <link rel="stylesheet" href="css/menuResponsivo.css" />
  <link rel="stylesheet" href="css/inicial.css" />
  <link rel="shortcut icon" href="imagens/logo-pw.png" />
</head>

<body>
  <header>
    <nav class="menu-top">
      <a href="index.html" class="link" id="logo">En-Check</a>

      <ul class="menu-lista">
        <li class="itens-menu" id="item-home">
          <a class="link" href="sobre.html">SOBRE</a>
        </li>
        <li class="itens-menu" id="item-home">
          <a class="link" href="contato.html">CONTATO</a>
        </li>
        <li class="itens-menu" id="item-login">
          <a class="link" href="entrar.html">ENTRAR</a>
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
        <h1 class="texto-titulo">Aprimore Seu Ingês</h1>
        <p class="descricao-titulo">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem,
          impedit quos! Assumenda sequi minima in repellat! Error doloremque
          est dolor facere! Officia et minima dolorem recusandae reprehenderit
          labore, mollitia cupiditate.
        </p>
      </div>
      <!--FIM DO TITULO-->
      <div class="container">
        <div class="card">
          <div class="img">
            <span>Texto 1</span>
          </div>

          <div class="content">
            <span class="title">Titulo texto 1</span>
            <p class="desc">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
              dolorum reprehenderit officia iste ab quo veniam quis corporis,
              facere ipsum beatae. Nesciunt vel voluptatem quam asperiores
              necessitatibus dolorem atque minima.
            </p>
          </div>
        </div>
        <div class="card">
          <div class="img">
            <span>texto 2</span>
          </div>

          <div class="content">
            <span class="title">titulo texto 2</span>
            <div class="rank">
              <?php
              include('rank.php')
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>

  <script src="scripts/menu.js"></script>
</body>

</html>