<?php
$url = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/banners.php/";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);
?>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="">
        <img src="http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/imagens/BannerLogo.png" class="d-block w-100" alt="">
      </a>
    </div>
    <?php
    foreach ($dadosBanner as $dados) {
    ?>
      <div class="carousel-item">
        <a href="paginas/<?= $dados->id ?>">
          <img src="<?= $dados->banner ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
        </a>
      </div>
      <?php
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