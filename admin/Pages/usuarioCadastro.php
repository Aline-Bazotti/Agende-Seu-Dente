<?php

$grupos = $metodo->buscarGrupos();

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Usuário</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Usuario/Controller/addUsuario.php" method="post">

    <header>
        <h2>Cadastro Novo Usuário</h2>
        <div>Insira as informações do usuário.</div><br/>
    </header>

    <div>
        <label class="desc" id="nome" for="Nome">Nome completo*</label>
        <div>
            <input id="Nome" name="Nome" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="José Maria da Penha" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="cpf_cpnj" for="Cpf_cpnj">CPF/CNPJ*</label>
        <div>
            <input id="Cpf_cpnj" name="Cpf_cpnj" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="999.999.999-99"required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="data_nasc" for="Data_nasc">Data de Nascimento</label>
        <div>
            <input id="Data_nasc" name="Data_nasc" type="date" spellcheck="false" value="" tabindex="3" placeholder="01/01/9999">
        </div>
    </div>
    <div>
        <label class="desc" id="cro" for="CRO">CRO</label>
        <div>
            <input id="CRO" name="CRO" type="text" spellcheck="false" value="" maxlength="10" tabindex="3" placeholder="99999-UF">
        </div>
    </div>

    <div>
        <label class="desc" id="assinatura" for="Assinatura">Assinatura Digital</label>
        <div>
            <input id="Assinatura" name="Assinatura" type="url" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="Link da assinatura digital">
        </div>
    </div>

    <div>
        <label class="desc" id="telefone" for="Telefone">Telefone*</label>
        <div>
            <input id="Telefone" name="Telefone" type="tel" spellcheck="false" value="" maxlength="15" tabindex="3" placeholder="(99)99999-9999" required="required">
        </div>
    </div>
    <div>
        <label class="desc" id="telefone_s" for="Telefone_s">Telefone Secundário</label>
        <div>
            <input id="Telefone_s" name="Telefone_s" type="tel" spellcheck="false" value="" maxlength="15" tabindex="3" placeholder="(99)99999-9999">
        </div>
    </div>
    <br/><br/>
    <div>
        <label class="desc" id="Status" for="Status">
            Ativo*
        </label>
        <div>
            <select id="Status" name="Status" class="field select medium" tabindex="11" required="required">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
    </div>

    <div>
        <label class="desc" id="Email" for="Email">Email</label>
        <div>
            <input id="Email" name="Email" type="email" spellcheck="false" value="" maxlength="255" tabindex="3" placeholder="blabla@dominio.com" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="senha" for="Senha">Senha</label>
        <div>
            <input id="Senha" name="Senha" type="password" spellcheck="false" value="" maxlength="255" tabindex="3" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="Grupo" for="Grupo">
            Grupo
        </label>
        <div>
            <select id="Grupo" name="Grupo" class="field select medium" tabindex="11">
                <?php foreach($grupos as $grupo): ?>
                    <option value="<?= $grupo['id']; ?>"><?= $grupo['nome']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=usuariosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>