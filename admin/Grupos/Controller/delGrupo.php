<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$grupo_id = isset($_GET['grupoId']) ? $_GET['grupoId'] : null;

if (empty($grupo_id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delGrupo($grupo_id);

header("Location: ../../?page=gruposList");

?>
