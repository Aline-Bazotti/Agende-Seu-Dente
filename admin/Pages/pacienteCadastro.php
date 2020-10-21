<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Paciente</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="../admin/Paciente/Controller/addPaciente.php" method="post">
    <header>
        <h2>Cadastro Novo Paciente</h2>
        <div>Insira as informações do paciente.</div><br/>
    </header>
    <br/><div><h3>Dados Pessoais</h3></div>
    <div>
        <label class="desc" id="nome" for="nome">Nome completo*</label>
        <div>
            <input id="nome" name="nome" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="José Maria da Penha" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="cpf_cnpj" for="cpf_cnpj">CPF*</label>
        <div>
            <input id="cpf_cnpj" name="cpf_cnpj" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="999.999.999-99"required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="rg_ie" for="rg_ie">RG</label>
        <div>
            <input id="rg_ie" name="rg_ie" type="text" class="field text fn" value="" size="20" tabindex="1" placeholder="9.999.999">
        </div>
    </div>
    <div>
        <label class="desc" id="data_nascimento" for="data_nascimento">Data de Nascimento</label>
        <div>
            <input id="data_nascimento" name="data_nascimento" type="date" spellcheck="false" value="" tabindex="3" placeholder="01/01/9999">
        </div>
    </div>
    <div>
        <label class="desc" id="telefone" for="telefone">Telefone*</label>
        <div>
            <input id="telefone" name="telefone" type="tel" spellcheck="false" value="" maxlength="15" tabindex="3" placeholder="(99)99999-9999" required="required">
        </div>
    </div>
    <div>
        <label class="desc" id="telefone_s" for="telefone_s">Telefone Secundário</label>
        <div>
            <input id="telefone_s" name="telefone_s" type="tel" spellcheck="false" value="" maxlength="15" tabindex="3" placeholder="(99)99999-9999">
        </div>
    </div>
    <div>
        <label class="desc" id="naturalidade" for="naturalidade">Naturalidade</label>
        <div>
            <input id="naturalidade" name="naturalidade" type="text" class="field text fn" value="" size="30" tabindex="1">
        </div>
    </div>
    <div>
        <label class="desc" id="nacionalidade" for="nacionalidade">Nacionalidade</label>
        <div>
            <input id="nacionalidade" name="nacionalidade" type="text" class="field text fn" value="" size="30" tabindex="1">
        </div>
    </div>
    <div>
        <label class="desc" id="estado_civil" for="estado_civil">
            Estado Civil
        </label>
        <div>
            <select id="estado_civil" name="estado_civil" class="field select medium" tabindex="11">
                <option value="solteiro">Solteiro</option>
                <option value="união estável">União Estável</option>
                <option value="noivo">Noivo</option>
                <option value="casado">Casado</option>
                <option value="viúvo">Viúvo</option>
            </select>
        </div>
    </div>
    <div>
        <label class="desc" id="sexo" for="sexo">
            Sexo
        </label>
        <div>
            <select id="sexo" name="sexo" class="field select medium" tabindex="11">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
        </div>
    </div>
    <div>
        <label class="desc" id="nome_conjuge" for="nome_conjuge">Nome Cônjuge</label>
        <div>
            <input id="nome_conjuge" name="nome_conjuge" type="text" class="field text fn" value="" size="50" tabindex="1">
        </div>
    </div>
    <br/><div><h3>Filiação</h3></div>
    <div>
        <label class="desc" id="nome_pai" for="nome_pai">Nome Pai</label>
        <div>
            <input id="nome_pai" name="nome_pai" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>

    <div>
        <label class="desc" id="nome_mae" for="nome_mae">Nome Mãe</label>
        <div>
            <input id="nome_mae" name="nome_mae" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="nome_responsavel" for="nome_responsavel">Responsável Legal</label>
        <div>
            <input id="nome_responsavel" name="nome_responsavel" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="indicacao_dr" for="indicacao_dr">Indicação Dr(a)</label>
        <div>
            <input id="indicacao_dr" name="indicacao_dr" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <br/><div><h3>Dados Profissionais</h3></div>
    <div>
        <label class="desc" id="nome_empresa" for="nome_empresa">Nome da empresa que trabalha</label>
        <div>
            <input id="nome_empresa" name="nome_empresa" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="telefone_empresa" for="telefone_empresa">Telefone da Empresa</label>
        <div>
            <input id="telefone_empresa" name="telefone_empresa" type="tel" spellcheck="false" value="" maxlength="15" tabindex="3" placeholder="(99)99999-9999">
        </div>
    </div>
    <div>
        <label class="desc" id="profissao" for="profissao">Profissão</label>
        <div>
            <input id="profissao" name="profissao" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="horario_trabalho" for="horario_trabalho">Horário de Trabalho</label>
        <div>
            <input id="horario_trabalho" name="horario_trabalho" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="cargo" for="cargo">Cargo</label>
        <div>
            <input id="cargo" name="cargo" type="text" spellcheck="false" value="" size="50" tabindex="3">
        </div>
    </div>
    <br/><div><h3>Acesso do paciente</h3></div>
    <div>
        <label class="desc" id="email" for="email">Email</label>
        <div>
            <input id="email" name="email" type="email" spellcheck="false" value="" size="50" tabindex="3" placeholder="blabla@dominio.com" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="senha" for="senha">Senha</label>
        <div>
            <input id="senha" name="senha" type="password" spellcheck="false" value="" maxlength="255" tabindex="3" required="required">
        </div>
    </div>

    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=pacientesList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>

</form>
</body>
</html>