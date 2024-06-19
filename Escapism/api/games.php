<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Souls in the Dark", "descricao"=>"<p>Souls in The Dark é um jogo de aventura e sobrevivência que se passa em um mundo sombrio e misterioso,
    onde o jogador enfrenta desafios e perigos em ambientes obscuros e hostis.</p>",
    "banner"=>"{$path}JogoLogo.png");

    $games[2] = array("id"=>2, "nome"=>"Ghost of Tsushima", "descricao"=>"<p>Ghost of Tsushima é um jogo de ação ambientado no Japão feudal. Os jogadores assumem o papel de Jin Sakai, um samurai que arrisca tudo para defender Tsushima dos invasores mongóis que saqueiam a terra.</p>",
    "banner"=>"{$path}GoT.jpg");

    $games[3] = array("id"=>3, "nome"=>"ULTRAKILL", "descricao"=>"<p>A humanidade foi extinta e os únicos seres que restam na terra são máquinas movidas a sangue. Mas agora esse sangue está começando a escorrer pela superfície... As máquinas estão correndo para as profundezas do Inferno em busca de mais.</p>",
    "banner"=>"{$path}Uk.jpg");

    $games[4] = array("id"=>4, "nome"=>"Ghosts of Tabor", "descricao"=>"<p>Ghosts of Tabor é o único jogo de sobrevivência VR FPS PvPvE baseado em extração, onde você terá que usar sua inteligência, habilidades e recursos para sobreviver. Inspirado em jogos semelhantes do gênero, Ghosts of Tabor apresenta uma variedade de cenários, desde coleta, saque e criação.</p>",
    "banner"=>"{$path}GsOT.jpg");

    echo json_encode($games);