<?php
require "../../../Util/Metodo.php";

$metodo = new Metodo();

$id_paciente = isset($_POST['id_paciente']) ? $_POST['id_paciente'] : null;
$nome = isset($_POST['nome']) ? $_POST['nome'] : null;

if (empty($id_paciente)) {
    echo "Preencha todos os campos.";
    exit;
}

if ($_FILES["arquivo"]["tmp_name"]) {
    $arquivo = $_FILES["arquivo"]["name"];
    $ext_permitidas = array(".jpg", ".jpeg", ".gif", ".png",".doc",".docx", ".odt", ".pdf", ".xlsx", ".csv");
    $ext = substr($arquivo, strpos($arquivo, '.'), strlen($arquivo) - 1);
    if (!in_array($ext, $ext_permitidas)) {
        header("Location:../../?page=arquivosList&erro=1");
        exit();
    } else {
        $arquivo = $_FILES["arquivo"]["name"];
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], "../files/" . $arquivo);
        $metodo->addArquivo($nome,$arquivo,$id_paciente);
    }
}
$erro = isset($_GET['erro']) ? $_GET['erro'] : '';
if ($erro == "") {
} else {
    if ($erro == "1") {
        echo "Selecione somente arquivos em .jpg, .png, .gif, doc, odt, pdf, xlsx, csv. ";
    }
}

header("Location: ../../?page=arquivosList");

?>