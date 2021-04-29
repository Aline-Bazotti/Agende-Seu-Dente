<?php
require '../Util/Metodo.php';
$metodo = new Metodo();
session_start();

if (isset($_SESSION['logged'])) {
    $usuario = $_SESSION['logged'];
} else{
    header('Location: ../site/login.php');
}
$dados = $metodo->buscarPacientePorId($usuario['user_id']);
$arquivos = $metodo->buscarArquivoPorIdPaciente($usuario['user_id']);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Área do Cliente</title>

    <link type="text/css" rel="stylesheet" href="../css/cliente.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
</head>
<body>
<div style="padding-left: 20px">
    <div>
        <div class="row">
            <div class="col-sm-6">
                <h2>Seus dados</h2>
            </div>
            <div class="col-sm-6 text-center h2">
                <a href="../Util/logout.php">
                    <i class="fa fa-power-off"></i>
                    SAIR
                </a>
            </div>
        </div>
            <div><label class="desc">Nome:</label> <?= $dados['nome']; ?></div>
            <div><label class="desc">CPF: </label> <?= $dados['cpf_cnpj']; ?></div>
            <div><label class="desc">E-mail:</label> <?= $dados['email']; ?></div>
            <div><label class="desc">Telefone:</label> <?= $dados['telefone']; ?></div>
            <div><label class="desc">Telefone Secundário:</label> <?= $dados['telefone_s']; ?></div>
            <div><label class="desc">RG:</label> <?= $dados['rg_ie']; ?></div>
            <div><label class="desc">Data de Nascimento:</label> <?= $dados['data_nascimento']; ?></div>
            <div><label class="desc">Naturalidade:</label> <?= $dados['naturalidade']; ?></div>
            <div><label class="desc">Nacionalidade:</label> <?= $dados['nacionalidade']; ?></div>
            <div><label class="desc">Estado Civíl:</label> <?= $dados['estado_civil']; ?></div>
            <div><label class="desc">Nome Cônjuge:</label> <?= $dados['nome_conjuge']; ?></div>

        <h2>Filiação</h2>

            <div><label class="desc">Nome do Pai:</label> <?= $dados['nome_pai']; ?></div>
            <div><label class="desc">Nome da Mãe:</label> <?= $dados['nome_mae']; ?></div>
            <div><label class="desc">Nome do Responsável:</label> <?= $dados['nome_responsavel']; ?></div>

        <h2>Empresa</h2>

            <div><label class="desc">Nome da Empresa:</label> <?= $dados['nome_empresa']; ?></div>
            <div><label class="desc">Telefone da Empresa:</label> <?= $dados['telefone_empresa']; ?></div>
            <div><label class="desc">Profissão:</label> <?= $dados['profissao']; ?></div>
            <div><label class="desc">Horário de Trabalho:</label> <?= $dados['horario_trabalho']; ?></div>
            <div><label class="desc">Cargo:</label> <?= $dados['cargo']; ?></div>
    </div>
    <div class="two-row-4-col-logos-with-text horizontal-flip text-black">
        <h1>Seus Arquivos</h1>
        <div class="row-fluid">
        <?php
        if ($arquivos) {
            foreach($arquivos as $arquivo):?>
                <div class="span3">
                    <div class="magic-box">
                        <div class="flipper">
                            <div class="magic-box-cover" style="background-color:#FF268D8D;">
                                <div class="industry" style="text-align: center;">
                                    <h1><?= $arquivo['nome']; ?></h1>
                                </div>
                            </div>
                            <div class="magic-box-content" style="background-color:#00dbc9;">
                                <div class="industry">
                                    <div style="text-align: center;">
                                        <a href="Arquivos/files/<?= $arquivo['caminho_arquivo']; ?>" download>
                                           Clique aqui para baixar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <tr>
                <td colspan="6">Nenhum arquivo no cadastrado.</td>
            </tr>
        <?php } ?>
    </div>
</div>

</body>
</html>