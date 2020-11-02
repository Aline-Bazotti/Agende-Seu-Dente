<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Grupo</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Grupos/Controller/addGrupo.php" method="post">

    <header>
        <h2>Cadastro Novo Grupo</h2>
        <div>Insira as informações do grupo.</div><br/>
    </header>

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
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=gruposList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>