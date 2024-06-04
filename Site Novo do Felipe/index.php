<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escapism</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagens\Logo.png">  
</head>
<body>
<header class="header">
      <a href="index.php" title="Escapism" class="header-logo">
          <img src="imagens\Logo.png" alt="Escapism" style="width: 110px; height: 110px;">
      </a>
      <nav class="header-menu">
          <ul>
              <li>
                  <a href="index.php?pagina=home">
                      Home
                  </a>
              </li>
              <li>
                   <a href="index.php?pagina=games">
                      Games
                   </a>
              </li>
              <li>
                  <a href="index.php?pagina=sobre">
                      Sobre
                  </a>
              </li>
              <li>
                  <a href="index.php?pagina=contato">
                      Contato
                  </a>
              </li>
          </ul>
      </nav>
  </header>
  <main>
      <?php
          //imprimir o conteúdo do array do get
          //print_r($_GET);
          //recuperar variável página
          $pagina = $_GET["pagina"] ?? "home";
          //paginas/home.php
          $pagina = "paginas/{$pagina}.php";
          //verificar se o arquivo existe
          if (file_exists($pagina)) {
              include $pagina;
          } else {
              include "paginas/erro.php"; 
          }
      ?>
  </main>
  <footer class="footer">
      <p>Escapism - Todos os direitos reservados</p>
  </footer>
</body>
</html>