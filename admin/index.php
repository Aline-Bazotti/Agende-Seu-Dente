<?php
require '../Util/Metodo.php';
$metodo = new Metodo();

?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <title>Agende Seu Dente - Admin</title>
        <?php
        if(isset($_GET['page'])) {
            $pgAtual = $_GET['page'];
            echo "<title>ProTatto - ".ucfirst($pgAtual)."</title>";
        } else {
            echo "<title>ProTatto - Home</title>";
        }
        ?>
    </head>
    <body>
        <link href="../css/menu.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="#">Agende Seu Dente - Admin </a>
                        <div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>Geral</span>
                            </li>
                            <li>
                            <a href="?page=agenda">
                                <i class="fa fa-calendar-alt"></i>
                                <span>Agenda</span>
                            </a>
                            </li>
                            <li>
                                <a href="?page=arquivosList">
                                    <i class="fa fa-folder"></i>
                                    <span>Arquivos</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=bannersList">
                                    <i class="fa fa-bookmark"></i>
                                    <span>Banners</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=institucionalList">
                                    <i class="fa fa-building"></i>
                                    <span>Institucional</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=servicosList">
                                    <i class="fa fa-handshake"></i>
                                    <span>Serviços</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=pacientesList">
                                    <i class="fa fa-user-circle"></i>
                                    <span>Paciente</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=procedimentosList">
                                    <i class="fa fa-plus-square"></i>
                                    <span>Procedimento</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=prontuariosList">
                                    <i class="fa fa-id-card"></i>
                                    <span>Prontuários</span>
                                </a>
                            </li>
                            <li class="header-menu">
                                <span>Extra</span>
                            </li>
                            <li>
                                <a href="?page=siteList">
                                    <i class="fa fa-window-maximize"></i>
                                    <span>Site</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=ususriosList">
                                    <i class="fa fa-user"></i>
                                    <span>Usuários</span>
                                </a>
                            </li>
                            <li>
                                <a href="?page=gruposList">
                                    <i class="fa fa-address-book"></i>
                                    <span>Grupos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
                <div class="sidebar-footer">
                    <a href="?page=login">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </nav>
            <main class="page-content">
                <div class="container">
                    <?php
                    if(isset($_GET['page'])) {
                        $pgAtual = $_GET['page'];
                        if(file_exists("pages/".$pgAtual.".php")) {
                            include("pages/".$pgAtual.".php");
                        } else {
                            include("pages/404.php");
                        }
                    } else {
                        include("pages/404.php");
                    }
                    ?>
                </div> <!-- /container -->
            </main>
        </div>
    </body>
</html>
    <!-- page-wrapper -->
    <script src="../js/menu.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js" type="text/javascript"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/main.js"></script>1
