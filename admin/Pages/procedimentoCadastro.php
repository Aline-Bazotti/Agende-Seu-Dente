<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Procedimento</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Procedimento/Controller/addProcedimento.php" method="post">

    <header>
        <h2>Cadastro Novo Procedimento</h2>
        <div>Insira as informações do Procedimento.</div><br/>
    </header>

    <div>
        <label class="desc" id="descricao" for="descricao">Descrição*</label>
        <div>
            <input id="descricao" name="descricao" type="text" class="field text fn" value="" size="80" tabindex="1"  required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="duracao" for="duracao">Duração Média*</label>
        <div>
            <input id="duracao" name="duracao" type="time" class="field text fn" value="" required="required">
        </div>
    </div>


    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=procedimentosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>