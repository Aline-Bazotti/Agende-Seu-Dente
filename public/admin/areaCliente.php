<?php
require '../Util/Metodo.php';
require '../Util/verifica.php';
$metodo = new Metodo();

$paciente = isset($_GET['id']) ? $_GET['id'] : '';
$dados = $metodo->buscarPacientePorId($paciente);
$arquivos = $metodo->buscarArquivoPorIdPaciente($paciente);
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Área do Cliente</title>

    <link type="text/css" rel="stylesheet" href="../css/cliente.css">
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap-responsive.min.css">
</head>
<body>
<div>
    <h1>Seus dados</h1>

        <div><label class="desc"><b>Nome:</b> <?= $dados['nome']; ?></label></div>
        <div><label class="desc"><b>CPF:</b> <?= $dados['cpf_cnpj']; ?></label></div>
        <div><label class="desc"><b>E-mail:</b> <?= $dados['email']; ?></label></div>
        <div><label class="desc"><b>Telefone:</b> <?= $dados['telefone']; ?></label></div>
        <div><label class="desc"><b>Telefone Secundário:</b> <?= $dados['telefone_s']; ?></label></div>
        <div><label class="desc"><b>RG:</b> <?= $dados['rg_ie']; ?></label></div>
        <div><label class="desc"><b>Data de Nascimento:</b> <?= $dados['data_nascimento']; ?></label></div>
        <div><label class="desc"><b>Naturalidade:</b> <?= $dados['naturalidade']; ?></label></div>
        <div><label class="desc"><b>Nacionalidade:</b> <?= $dados['nacionalidade']; ?></label></div>
        <div><label class="desc"><b>Estado Civíl:</b> <?= $dados['estado_civil']; ?></label></div>
        <div><label class="desc"><b>Nome Cônjuge:</b> <?= $dados['nome_conjuge']; ?></label></div>

    <h2>Filiação</h2>

        <div><label class="desc"><b>Nome do Pai:</b> <?= $dados['nome_pai']; ?></label></div>
        <div><label class="desc"><b>Nome da Mãe:</b> <?= $dados['nome_mae']; ?></label></div>
        <div><label class="desc"><b>Nome do Responsável:</b> <?= $dados['nome_responsavel']; ?></label></div>

    <h2>Empresa</h2>

        <div><label class="desc"><b>Nome da Empresa:</b> <?= $dados['nome_empresa']; ?></label></div>
        <div><label class="desc"><b>Telefone da Empresa:</b> <?= $dados['telefone_empresa']; ?></label></div>
        <div><label class="desc"><b>Profissão:</b> <?= $dados['profissao']; ?></label></div>
        <div><label class="desc"><b>Horário de Trabalho:</b> <?= $dados['horario_trabalho']; ?></label></div>
        <div><label class="desc"><b>Cargo:</b> <?= $dados['cargo']; ?></label></div>

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