<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();

$grupo_id = isset($_POST['grupoId']) ? $_POST['grupoId'] : null;

if (empty($grupo_id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delGrupo($grupo_id);

header("Location: ../Grupos/gruposList.php");

?>
