<?php
require '../Util/Metodo.php';
require '../Util/verifica.php';
$metodo = new Metodo();

if (isset($_SESSION['logged_in'])) {
    $usuario = $_SESSION['logged_in'];
}
$grupo = $metodo->buscarGrupoPorId($usuario['user_group']);
?>
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
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
        <link href="../css/menu.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
        <link href="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">

        <div class="page-wrapper chiller-theme toggled">
            <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content">
                    <div class="sidebar-brand">
                        <a href="">Agende Seu Dente - Admin </a>
                    </div>
                    <div class="sidebar-menu">
                        <ul>
                            <?php
                                switch ($grupo['permissoes']){
                                    case 'systemAdmin':?>
                                        <li class="header-menu"><span>Geral</span></li>
                                        <li><a href="?page=agendaList"><i class="fa fa-calendar-alt"></i><span>Agenda</span></a></li>
                                        <li><a href="?page=arquivosList"><i class="fa fa-folder"></i><span>Arquivos</span></a></li>
                                        <li><a href="?page=bannersList"><i class="fa fa-bookmark"></i><span>Banners</span></a></li>
                                        <li><a href="?page=institucionalList"><i class="fa fa-building"></i><span>Institucional</span></a></li>
                                        <li><a href="?page=servicosList"><i class="fa fa-handshake"></i><span>Serviços</span></a></li>
                                        <li><a href="?page=pacientesList"><i class="fa fa-user-circle"></i><span>Paciente</span></a></li>
                                        <li><a href="?page=procedimentosList"><i class="fa fa-plus-square"></i><span>Procedimento</span></a></li>
                                        <li><a href="?page=prontuariosList"><i class="fa fa-id-card"></i><span>Prontuários</span></a></li>
                                        <li class="header-menu"><span>Extra</span></li>
                                        <li><a href="?page=siteList"><i class="fa fa-window-maximize"></i><span>Site</span></a></li>
                                        <li><a href="?page=usuariosList"><i class="fa fa-user"></i><span>Usuários</span></a></li>
                                        <li><a href="?page=gruposList"><i class="fa fa-address-book"></i><span>Grupos</span></a></li>
                                        <?php break;
                                    case 'auxiliar': ?>
                                        <li class="header-menu"><span>Geral</span></li>
                                        <li><a href="?page=agendaList"><i class="fa fa-calendar-alt"></i><span>Agenda</span></a></li>
                                        <li><a href="?page=arquivosList"><i class="fa fa-folder"></i><span>Arquivos</span></a></li>
                                        <li><a href="?page=pacientesList"><i class="fa fa-user-circle"></i><span>Paciente</span></a></li>
                                        <li><a href="?page=bannersList"><i class="fa fa-bookmark"></i><span>Banners</span></a></li>
                                        <li><a href="?page=institucionalList"><i class="fa fa-building"></i><span>Institucional</span></a></li>
                                        <li><a href="?page=servicosList"><i class="fa fa-handshake"></i><span>Serviços</span></a></li>
                                        <?php break;
                                    case 'dentista':?>
                                        <li class="header-menu"><span>Geral</span></li>
                                        <li><a href="?page=agendaList"><i class="fa fa-calendar-alt"></i><span>Agenda</span></a></li>
                                        <li><a href="?page=arquivosList"><i class="fa fa-folder"></i><span>Arquivos</span></a></li>
                                        <li><a href="?page=bannersList"><i class="fa fa-bookmark"></i><span>Banners</span></a></li>
                                        <li><a href="?page=institucionalList"><i class="fa fa-building"></i><span>Institucional</span></a></li>
                                        <li><a href="?page=servicosList"><i class="fa fa-handshake"></i><span>Serviços</span></a></li>
                                        <li><a href="?page=pacientesList"><i class="fa fa-user-circle"></i><span>Paciente</span></a></li>
                                        <li><a href="?page=procedimentosList"><i class="fa fa-plus-square"></i><span>Procedimento</span></a></li>
                                        <li><a href="?page=prontuariosList"><i class="fa fa-id-card"></i><span>Prontuários</span></a></li>
                                        <li class="header-menu"><span>Extra</span></li>
                                        <li><a href="?page=usuariosList"><i class="fa fa-user"></i><span>Usuários</span></a></li>
                                        <?php break;
                                    default:
                                        header("Location: /admin/login.php");
                                }
                            ?>
                        </ul>
                    </div>
                <!-- sidebar-menu  -->
                </div>
                <!-- sidebar-content  -->
                <div class="sidebar-footer">
                    <a href="../Util/logout.php">
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
                        include("pages/agendaList.php");
                    }
                    ?>
                </div> <!-- /container -->
            </main>
        </div>
    </body>
</html>
    <!-- page-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js" type="text/javascript"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/main.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

