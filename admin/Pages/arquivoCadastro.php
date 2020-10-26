<?php
$pacientes = $metodo->buscarTodosPacientes()
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Arquivo</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Arquivos/Controller/addArquivo.php" method="post" enctype="multipart/form-data">

    <header>
        <h2>Cadastro Arquivo</h2>
    </header>

    <div>
        <label class="desc" id="id_paciente" for="id_paciente">
            Paciente
        </label>
        <div>
            <select id="id_paciente" name="id_paciente" class="field select medium" tabindex="11">
                <?php foreach($pacientes as $paciente):?>
                    <option value="<?= $paciente['id'] ?>"><?= $paciente['nome'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>

    <div>
        <label class="desc" for="nome">Nome do Arquivo</label>
        <div>
            <input id="nome" name="nome" type="text" class="field text fn" value="" size="20" tabindex="1">
        </div>
    </div>
    <div
        <label class="desc" id="arquivo" for="arquivo">Faça o upload do Arquivo</label>
        <div>
            <input id="arquivo" name="arquivo" type="file">
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=arquivosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
</body>
</html>