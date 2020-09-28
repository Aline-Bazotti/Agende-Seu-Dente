<?php
/*
require "../../Util/Metodo.php";
$metodo = new Metodo();
$grupos = $metodo->buscarGrupos();

*/?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Grupo</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="Controller/addGrupo.php" method="post">

    <header>
        <h2>Cadastro Novo Grupo</h2>
        <div>Insira as informações do grupo.</div><br/>
    </header>

    <div>
        <label class="desc" for="Name">Grupo id</label>
        <div>
            <input id="grupoId" name="grupoId" type="number" class="field text fn" value="" size="20" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" for="Name">Nome*</label>
        <div>
            <input id="grupoNome" name="grupoNome" type="text" class="field text fn" value="" size="20" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" for="Name">
            Permissões
        </label>
        <div>
            <select id="grupoPermissoes" name="grupoPermissoes" class="field select medium" tabindex="11">
                <option value="systemAdmin">System Admin</option>
                <option value="dentista">Dentista</option>
                <option value="auxiliar">Auxiliar</option>
            </select>
        </div>
    </div>
    <div>
        <div>
            <button class="btn-success" type="submit" >Salvar</button>
        </div>
    </div>

</form>
</body>
</html>