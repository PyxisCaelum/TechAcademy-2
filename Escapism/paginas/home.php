<?php
$apiBanner = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/banners.php";
$apiGames = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/games.php/";

$jsonBanner = file_get_contents($apiBanner);
$jsonGames = file_get_contents($apiGames);

$dadosBanner = json_decode($jsonBanner);
$dadosGames = json_decode($jsonGames);
?>
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