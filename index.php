<?php
require 'Util/Metodo.php';
$metodo = new Metodo();

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    if(isset($_GET['page'])) {
        $pgAtual = $_GET['page'];
        echo "<title>Agende Seu Dente - ".ucfirst($pgAtual)."</title>";
    } else {
        echo "<title>Agende Seu Dente - Home</title>";
    }
    ?>
</head>
<body>
<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">
<link href="css/carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/agenda.css">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">


<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="?">Agende Seu Dente</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="?page=agendaList">
                    <i class="fa fa-calendar-alt"></i>
                    <span>Agenda</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=institucionalList">
                    <i class="fa fa-building"></i>
                    <span>Institucional</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=servicosList">
                    <i class="fa fa-handshake"></i>
                    <span>Serviços</span>
                </a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <a href="/admin/login.php">
                <button class="btn btn-outline-info my-2 my-sm-0" type="button">Admin</button>
            </a>
        </form>
        <form class="form-inline mt-2 mt-md-0">
            <a href="/site/login.php">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" >Login Paciente</button>
            </a>
        </form>
    </div>
</nav>
<main role="main">

            <?php
            if(isset($_GET['page'])) {
                $pgAtual = $_GET['page'];
                if(file_exists("site/pages/".$pgAtual.".php")) {
                ?><div class="container"><?php
                    include("site/pages/".$pgAtual.".php");
                ?></div> <!-- /container --><?php
                } else {
                    include("site/Pages/404.php");
                }
            } else {
                include("site/Pages/home.php");
            }
            ?>

</main>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</html>
