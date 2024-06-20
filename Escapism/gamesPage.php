<?php
$param = $_GET["param"] ?? NULL;
$p = explode("/", $param);
$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/games.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<div class="Container">
    <img src="<?=$jogo->banner?>" alt="Souls in the Dark" title>Souls in the Dark</title> class="banner">
    <h1 class="text-center"><?=$jogo->nome?></h1>


    <div class="row">
        <div class="col-12 col-md-7 aos init aos animate" data-aos="fade-up">
            <p><=jogo->descricao?></p>
        </div>
</div>