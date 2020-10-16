<?php
require "../../../Util/Metodo.php";

$metodo = new Metodo();

if (isset($_POST['edit_status'])){
    $id = $_POST['edit_status'];
    $banner = $metodo->buscarBannerPorId($id);
    if ($banner['status'] == 1){
        $metodo->editBannerStatus($id,0);
    }else{
        $metodo->editBannerStatus($id,1);
    }
    header("Location: ../../?page=bannersList");
}

$id = isset($_POST['bannerId']) ? $_POST['bannerId'] : null;
$titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
$descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$botao = isset($_POST['botao']) ? $_POST['botao'] : null;
$botaoLink = isset($_POST['botaoLink']) ? $_POST['botaoLink'] : null;
$ordem = isset($_POST['ordem']) ? $_POST['ordem'] : null;
$status = isset($_POST['status']) ? $_POST['status'] : null;

if (empty($id) || empty($descricao)) {
    echo "Preencha todos os campos.";
    exit;
}
if ($_FILES["imagem"]["tmp_name"]) {
    $imagem = $_FILES["imagem"]["name"];
    $ext_permitidas = array(".jpg", ".jpeg", ".gif", ".png");
    $ext = substr($imagem, strpos($imagem, '.'), strlen($imagem) - 1);
    if (!in_array($ext, $ext_permitidas)) {
        header("Location:../../?page=bannersList&erro=1");
        exit();
    } else {
        list($width, $height, $type, $attr) = getimagesize($_FILES["imagem"]["tmp_name"]);
        if ($width > 1500) {
            header("Location:../../?page=bannersList&erro=2");
            exit();
        } else {
            if ($height > 1500) {
                header("Location:../../?page=bannersList&erro=4");
                exit();
            } else {
                $imagem = $_FILES["imagem"]["name"];
                move_uploaded_file($_FILES["imagem"]["tmp_name"], "../img/" . $imagem);
                rename("../img/$imagem", '../img/' . $imagem);
                $metodo->editBannerComImagem($id,$titulo,$descricao,$botao,$imagem,$ordem,$status,$botaoLink);
            }
        }
    }
} else {
    $metodo->editBanner($id,$titulo,$descricao,$botao,$ordem,$status,$botaoLink);
}

$erro = isset($_GET['erro']) ? $_GET['erro'] : '';
if ($erro == "") {
} else {
    if ($erro == "1") {
        echo "Selecione somente imagens em .jpg, .png, .gif.";
    }
    if ($erro == "2") {
        echo "A imagem não pode ultrapassar os 1500px da largura.";
    }
    if ($erro == "4") {
        echo "A imagem não pode ultrapassar os 1500px da altura.";
    }
    if ($erro == "3") {
        echo "Selecione uma imagem para ser enviada";
    }
}

header("Location: ../../?page=bannersList");

?>