<?php
require "../../../Util/Metodo.php";
$metodo = new Metodo();

$id = isset($_GET['bannerId']) ? $_GET['bannerId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}

$metodo->delBanner($id);

header("Location: ../../?page=bannersList");

?>