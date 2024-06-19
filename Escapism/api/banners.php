<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/imagens/";

    $banners[0] = array("nome"=>"Souls in the Dark","imagem"=>"{$path}JogoLogo.png","id_games"=>1);
    $banners[1] = array("nome"=>"Ghost of Tsushima","imagem"=>"{$path}GoT.jpg","id_games"=>2);
    $banners[2] = array("nome"=>"ULTRAKILL","imagem"=>"{$path}Uk.jpg","id_games"=>3);
    $banners[3] = array("nome"=>"Ghosts of Tarbor","imagem"=>"{$path}GsOT.jpg","id_games"=>4);

    echo json_encode($banners);