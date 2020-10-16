<?php
require "../../../Util/Metodo.php";

$metodo = new Metodo();

if (isset($_POST['edit_status'])){
    $id = $_POST['edit_status'];
    $servico = $metodo->buscarServicoPorid($id);
    if ($servico['status'] == 1){
        $metodo->editServicoStatus($id,0);
    }else{
        $metodo->editServicoStatus($id,1);
    }
    header("Location: ../../?page=servicosList");
}
if (isset($_POST['edit_inicial'])){
    $id = $_POST['edit_inicial'];
    $servico = $metodo->buscarServicoPorid($id);
    if ($servico['inicial'] == 1){
        $metodo->editServicoInicial($id,0);
    }else{
        $metodo->editServicoInicial($id,1);
    }
    header("Location: ../../?page=servicosList");
}

$id = isset($_POST['servicoId']) ? $_POST['servicoId'] : null;
$desc = isset($_POST['descricao']) ? $_POST['descricao'] : null;
$texto = isset($_POST['texto']) ? $_POST['texto'] : null;
$status = isset($_POST['status']) ? $_POST['status'] : null;
$inicial = isset($_POST['inicial']) ? $_POST['inicial'] : null;

if (empty($id) || empty($desc) ||  empty($texto)) {
    echo "Preencha todos os campos.";
    exit;
}
if ($_FILES["imagem"]["tmp_name"]) {
    $imagem = $_FILES["imagem"]["name"];
    $ext_permitidas = array(".jpg", ".jpeg", ".gif", ".png");
    $ext = substr($imagem, strpos($imagem, '.'), strlen($imagem) - 1);
    if (!in_array($ext, $ext_permitidas)) {
        header("Location:../../?page=servicosList&erro=1");
        exit();
    } else {
        list($width, $height, $type, $attr) = getimagesize($_FILES["imagem"]["tmp_name"]);
        if ($width > 1500) {
            header("Location:../../?page=servicosList&erro=2");
            exit();
        } else {
            if ($height > 1500) {
                header("Location:../../?page=servicosList&erro=4");
                exit();
            } else {
                $imagem = $_FILES["imagem"]["name"];
                move_uploaded_file($_FILES["imagem"]["tmp_name"], "../img/" . $imagem);
                rename("../img/$imagem", '../img/' . $imagem);
                $metodo->editServicoComImagem($id,$desc,$texto,$status,$inicial,$imagem);
            }
        }
    }
} else {
    $metodo->editServico($id,$desc,$texto,$status,$inicial);
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

header("Location: ../../?page=servicosList");

?>