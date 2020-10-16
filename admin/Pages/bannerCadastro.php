<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Banner</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Banner/Controller/addBanner.php" method="post" enctype="multipart/form-data">

    <header>
        <h2>Cadastro Novo Banner</h2>
        <div>Insira as informações do banner.</div><br/>
    </header>

    <div>
        <label class="desc" for="titulo">Título</label>
        <div>
            <input id="titulo" name="titulo" type="text" class="field text fn" value="" size="20" tabindex="1">
        </div>
    </div>

    <div>
        <label class="desc" for="descricao">Descrição*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="" size="50" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" for="botao">Botão</label>
        <div>
            <input id="botao" name="botao" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="Digite o nome do botão">
        </div>
        <div>
            <input id="botaoLink" name="botaoLink" type="url" class="field text fn" value="" size="80" tabindex="1" placeholder="Digite o link do botão">
        </div>
    </div>
    <div>
        <label class="desc" id="imagem" for="imagem">Imagem</label>
        <div>
            <input id="imagem" name="imagem" type="file">
        </div>
    </div>
    <div>
        <label class="desc" for="ordem">Ordem</label>
        <div>
            <input id="ordem" name="ordem" type="number" class="field text fn" value="" size="10" tabindex="1" required="required">
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
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=bannersList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
</body>
</html>