<?php
$apiBanner = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/banners.php";
$apiGames = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/games.php/";

$jsonBanner = file_get_contents($apiBanner);
$jsonGames = file_get_contents($apiGames);

$dadosBanner = json_decode($jsonBanner);
$dadosGames = json_decode($jsonGames);
?>
<h1>Jogos de terceiros:</h1>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="gamesPage/1">
        <img src="http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/imagens/BannerLogo.png" class="d-block w-100" alt="">
      </a>
    </div>
    <?php
    foreach ($dadosBanner as $dados) {
      if ($dados->id_game != 1) {
    ?>
        <div class="carousel-item">
          <a href="gamesPage/<?= $dados->id_game ?>">
            <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
          </a>
        </div>
    <?php
      }
    }
    ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<h2>Jogos autorais:</h2>
<div class="card" style="width: 18rem;">
  <img src="imagens/JogoLogo.png" class="card-img-top" alt="...">
  <div class="card-body bg-dark">
    <h5 class="card-title text-light">Souls in the Dark</h5>
    <p class="card-text">Souls in The Dark é um jogo de aventura e sobrevivência que se passa em um mundo sombrio e misterioso,
    na qual o jogador enfrenta desafios e perigos em ambientes obscuros e hostis.</p>
    <a href="Souls in the Dark/index.html" target="_blank" class="btn btn-primary">Jogar</a>
  </div>
</div>
