<?php
$id_prontuario = isset($_GET['prontuarioId']) ? $_GET['prontuarioId'] : null;

if (empty($id_prontuario)) {
    echo "Pedido inválido.";
    exit;
}
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Procedimento Realizado</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Prontuario/Controller/addHistorico.php" method="post">
    <header>
        <h2>Cadastro Novo Procedimento Realizado</h2>
    </header>
    <br/><div><h3>Relatório de Procedimentos</h3></div>
    <input type="hidden" id="prontuarioId" name="prontuarioId" value="<?= $id_prontuario;?>">
    <div>
        <label class="desc" id="data_procedimento" for="data_procedimento">Data</label>
        <div>
            <input id="data_procedimento" name="data_procedimento" type="date" spellcheck="false" value="" tabindex="3" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="dente" for="dente">Dente(s)</label>
        <div>
            <input id="dente" name="dente" type="text" class="field text fn" value="" maxlength="50">
        </div>
    </div>

    <div class="form-group">
        <label class="desc" id="procedimento" for="procedimento">Procedimentos Realizados</label>
        <div>
            <textarea id="procedimento" name="procedimento" type="text" class="form-control" value="" size="70" rows="3"></textarea>
        </div>
    </div>

    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=prontuariosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>