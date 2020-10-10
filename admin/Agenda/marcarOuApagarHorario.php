<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();

if (isset($_POST['marcar'])){
    $id = $_POST['marcar'];
    $metodo->horarioMarcado($id);
}
if (isset($_POST['apagar'])){
    $id = $_POST['apagar'];
    $metodo->apagarHorario($id);
}
header("Location: http://localhost/admin/?page=agendaList");
?>
