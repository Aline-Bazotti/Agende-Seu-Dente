<?php

require "../../Util/Metodo.php";
$metodo = new Metodo();
$grupos = $metodo->buscarGrupos();

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Novo Usuário</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>

<form action="#">

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
        <label class="desc" id="status" for="Status">
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
        <label class="desc" id="email" for="Email">Email</label>
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
        <label class="desc" id="grupo" for="Grupo">
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
        <label class="desc" id="title4" for="Field4">
            Message
        </label>

        <div>
            <textarea id="Field4" name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4"></textarea>
        </div>
    </div>

    <div>
        <fieldset>

            <legend id="title5" class="desc">
                Select a Choice
            </legend>

            <div>
                <input id="radioDefault_5" name="Field5" type="hidden" value="">
                <div>
                    <input id="Field5_0" name="Field5" type="radio" value="First Choice" tabindex="5" checked="checked">
                    <label class="choice" for="Field5_0">First Choice</label>
                </div>
                <div>
                    <input id="Field5_1" name="Field5" type="radio" value="Second Choice" tabindex="6">
                    <label class="choice" for="Field5_1">Second Choice</label>
                </div>
                <div>
                    <input id="Field5_2" name="Field5" type="radio" value="Third Choice" tabindex="7">
                    <label class="choice" for="Field5_2">Third Choice</label>
                </div>
            </div>
        </fieldset>
    </div>

    <div>
        <fieldset>
            <legend id="title6" class="desc">
                Check All That Apply
            </legend>
            <div>
                <div>
                    <input id="Field6" name="Field6" type="checkbox" value="First Choice" tabindex="8">
                    <label class="choice" for="Field6">First Choice</label>
                </div>
                <div>
                    <input id="Field7" name="Field7" type="checkbox" value="Second Choice" tabindex="9">
                    <label class="choice" for="Field7">Second Choice</label>
                </div>
                <div>
                    <input id="Field8" name="Field8" type="checkbox" value="Third Choice" tabindex="10">
                    <label class="choice" for="Field8">Third Choice</label>
                    </span>
                </div>
        </fieldset>
    </div>

    <div>
        <label class="desc" id="title106" for="Field106">
            Select a Choice
        </label>
        <div>
            <select id="Field106" name="Field106" class="field select medium" tabindex="11">
                <option value="First Choice">First Choice</option>
                <option value="Second Choice">Second Choice</option>
                <option value="Third Choice">Third Choice</option>
            </select>
        </div>
    </div>

    <div>
        <div>
            <input id="saveForm" name="saveForm" type="submit" value="Submit">
        </div>
    </div>

</form>
</body>
</html>