<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Serviço</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Servicos/Controller/addServico.php" method="post" enctype="multipart/form-data">

    <header>
        <h2>Cadastro Novo Serviço</h2>
        <div>Insira as informações do serviço.</div><br/>
    </header>

    <div>
        <label class="desc" id="descricao" for="descricao">Título*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="" size="45" tabindex="1" placeholder="Título do Serviço" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="texto" for="texto">Descrição*</label>
        <div>
            <input id="texto" name="texto" type="text" class="field text fn" value="" size="80" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="status" for="status">
            Status*
        </label>
        <div>
            <select id="status" name="status" class="field select medium" tabindex="11" required="required">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
    </div>

    <div>
        <label class="desc" id="inicial" for="inicial">
            Inicial*
        </label>
        <div>
            <select id="inicial" name="inicial" class="field select medium" tabindex="11" required="required">
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
    </div>
    <div>
        <label class="desc" id="imagem" for="imagem">Imagem</label>
        <div>
            <input id="imagem" name="imagem" type="file">
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=servicosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>