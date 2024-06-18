<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/site/felipesite/Site%20Novo%20do%20Felipe/TechAcademy-2/imagens/";

    $banners[0] = array("nome"=>"Souls in the Dark","imagem"=>"{$path}JogoLogo.png","id_game"=>1);
    $banners[1] = array("nome"=>"Ghost of Tsushima","imagem"=>"{$path}GoT.jpg","id_game"=>2);
    $banners[2] = array("nome"=>"ULTRAKILL","imagem"=>"{$path}Uk.jpg","id_game"=>3);
    $banners[3] = array("nome"=>"Ghosts of Tarbor","imagem"=>"{$path}GsOT.jpg","id_game"=>4);

    echo json_encode($banners);