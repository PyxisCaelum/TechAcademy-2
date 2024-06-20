<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/imagens/";

    $banners[1] = array("nome"=>"Souls in the Dark","imagem"=>"{$path}JogoLogo.png","id_game"=>1);
    $banners[2] = array("nome"=>"Ghost of Tsushima","imagem"=>"{$path}GoT.jpg","id_game"=>2);
    $banners[3] = array("nome"=>"ULTRAKILL","imagem"=>"{$path}Uk.jpg","id_game"=>3);
    $banners[4] = array("nome"=>"Ghosts of Tarbor","imagem"=>"{$path}GsOT.jpg","id_game"=>4);

    echo json_encode($banners);