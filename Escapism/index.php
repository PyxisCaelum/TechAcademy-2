<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="imagens\Logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">

    <link rel="stylesheet" href="css/style.css">

    <title>Escapism</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $url = "http://localhost/site/felipesite/PastaTech/TechAcademy-2/Escapism/api/games.php/";

    $dadosJson = file_get_contents($url);

    $dadosBanner = json_decode($dadosJson);

    foreach ($dadosBanner as $dados) {
    }
    ?>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/Logo.png" alt="Escapism">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <img src="imagens/seta-direita.png" id="dir" onclick="giro()">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?pagina=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=sobre">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach ($dadosBanner as $dados) : ?>
                                <li>
                                    <a class="dropdown-item" href="gamesPage/<?= $dados->id ?>"><?= $dados->nome ?></a>
                                </li>
                            <?php endforeach; ?>
                            </ul>

                    </li>
                </ul>
                <div class="d-flex">
                    <a href="index.php?pagina=contato" title="Contato" class="btn btn-info">
                        <i class="fas fa-envelope"></i>
                        Entre em Contato
                    </a>
                </div>
            </div>
    </nav>
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
    <script src="js\bootstrap.bundle.min.js"></script>
    <script>
        function giro() {
            document.getElementById("dir").classList.toggle('giro');
        }
    </script>
</body>

</html>