<?php
$id = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;
$addEnd = isset($_GET['addEnd'])? $_GET['addEnd'] : null;
$editEnd = isset($_GET['editEnd'])? $_GET['editEnd'] : null;
if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$paciente = $metodo->buscarPacientePorId($id);
$enderecos = $metodo->buscarEnderecoPorIdPaciente($id);
$estados = $metodo->buscarEstado();
$municipios =$metodo->buscarMunicipio();
?>

<h2>Editar Paciente - <?= $paciente['nome'] ?></h2>
<hr />
<form action="../admin/Paciente/Controller/editPaciente.php" method="post">
    <input type="hidden" id="pacienteId" name="pacienteId" value="<?= $paciente['id'] ?>">
    <br/><div><h3>Dados Pessoais</h3></div>
    <div>
        <label class="desc" id="nome" for="nome">Nome completo*</label>
        <div>
            <input id="nome" name="nome" type="text" class="field text fn" value="<?= $paciente['nome'] ?>" size="20" tabindex="1" required="required">
        </div>
    </div>

    <div>
        <label class="desc" for="cpf_cnpj">CPF*</label>
        <div>
            <input id="cpf" name="cpf_cnpj" type="text" class="field text fn" value="<?= $paciente['cpf_cnpj'] ?>" size="20" tabindex="1" placeholder="999.999.999-99"required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="rg_ie" for="rg_ie">RG</label>
        <div>
            <input id="rg_ie" name="rg_ie" type="text" class="field text fn" value="<?= $paciente['rg_ie'] ?>" size="20" tabindex="1" placeholder="9.999.999">
        </div>
    </div>
    <div>
        <label class="desc" id="data_nascimento" for="data_nascimento">Data de Nascimento</label>
        <div>
            <input id="data_nascimento" name="data_nascimento" type="date" spellcheck="false" value="<?= $paciente['data_nascimento'] ?>" tabindex="3" placeholder="01/01/9999">
        </div>
    </div>
    <div>
        <label class="desc" for="telefone">Telefone*</label>
        <div>
            <input id="telefone" name="telefone" type="tel" spellcheck="false" value="<?= $paciente['telefone'] ?>" maxlength="15" tabindex="3" placeholder="(99)99999-9999" required="required">
        </div>
    </div>
    <div>
        <label class="desc" for="telefone_s">Telefone Secundário</label>
        <div>
            <input id="telefone_s" name="telefone_s" type="tel" spellcheck="false" value="<?= $paciente['telefone_s'] ?>" maxlength="15" tabindex="3" placeholder="(99)99999-9999">
        </div>
    </div>
    <div>
        <label class="desc" id="naturalidade" for="naturalidade">Naturalidade</label>
        <div>
            <input id="naturalidade" name="naturalidade" type="text" class="field text fn" value="<?= $paciente['naturalidade'] ?>" size="30" tabindex="1">
        </div>
    </div>
    <div>
        <label class="desc" id="nacionalidade" for="nacionalidade">Nacionalidade</label>
        <div>
            <input id="nacionalidade" name="nacionalidade" type="text" class="field text fn" value="<?= $paciente['nacionalidade'] ?>" size="30" tabindex="1">
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
            <input id="nome_conjuge" name="nome_conjuge" type="text" class="field text fn" value="<?= $paciente['nome_conjuge'] ?>" size="50" tabindex="1">
        </div>
    </div>
    <br/><div><h3>Filiação</h3></div>
    <div>
        <label class="desc" id="nome_pai" for="nome_pai">Nome Pai</label>
        <div>
            <input id="nome_pai" name="nome_pai" type="text" spellcheck="false" value="<?= $paciente['nome_pai'] ?>" size="50" tabindex="3">
        </div>
    </div>

    <div>
        <label class="desc" id="nome_mae" for="nome_mae">Nome Mãe</label>
        <div>
            <input id="nome_mae" name="nome_mae" type="text" spellcheck="false" value="<?= $paciente['nome_mae'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="nome_responsavel" for="nome_responsavel">Responsável Legal</label>
        <div>
            <input id="nome_responsavel" name="nome_responsavel" type="text" spellcheck="false" value="<?= $paciente['nome_responsavel'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="indicacao_dr" for="indicacao_dr">Indicação Dr(a)</label>
        <div>
            <input id="indicacao_dr" name="indicacao_dr" type="text" spellcheck="false" value="<?= $paciente['indicacao_dr'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <br/><div><h3>Dados Profissionais</h3></div>
    <div>
        <label class="desc" id="nome_empresa" for="nome_empresa">Nome da empresa que trabalha</label>
        <div>
            <input id="nome_empresa" name="nome_empresa" type="text" spellcheck="false" value="<?= $paciente['nome_empresa'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" for="telefone_empresa">Telefone da Empresa</label>
        <div>
            <input id="telefone_empresa" name="telefone_empresa" type="tel" spellcheck="false" value="<?= $paciente['telefone_empresa'] ?>" maxlength="15" tabindex="3" placeholder="(99)99999-9999">
        </div>
    </div>
    <div>
        <label class="desc" id="profissao" for="profissao">Profissão</label>
        <div>
            <input id="profissao" name="profissao" type="text" spellcheck="false" value="<?= $paciente['profissao'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="horario_trabalho" for="horario_trabalho">Horário de Trabalho</label>
        <div>
            <input id="horario_trabalho" name="horario_trabalho" type="text" spellcheck="false" value="<?= $paciente['horario_trabalho'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <div>
        <label class="desc" id="cargo" for="cargo">Cargo</label>
        <div>
            <input id="cargo" name="cargo" type="text" spellcheck="false" value="<?= $paciente['cargo'] ?>" size="50" tabindex="3">
        </div>
    </div>
    <br/><div><h3>Acesso do paciente</h3></div>
    <div>
        <label class="desc" id="email" for="email">Email</label>
        <div>
            <input id="email" name="email" type="email" spellcheck="false" value="<?= $paciente['email'] ?>" size="50" tabindex="3" placeholder="blabla@dominio.com" required="required">
        </div>
    </div>

    <div>
        <label class="desc" id="senha" for="senha">Senha</label>
        <div>
            <input id="senha" name="senha" type="password" spellcheck="false" value="" maxlength="255" tabindex="3">
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
<div class="row">
    <div class="col-sm-6">
    <h2>Endereços</h2>
    </div>
    <div class="col-sm-6 text-center h2">
        <a class="btn btn-sm btn-success" href="?page=pacienteForm&pacienteId=<?= $paciente['id']; ?>&addEnd=1">
            <i class="fa fa-sticky-note"></i>Adicionar</a>
    </div>
</div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Identificação</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
<?php
    if ($enderecos){?>
        <?php foreach($enderecos as $endereco):
            $estado_endereco = $metodo->buscarEstadoIdEndereco($endereco['uf_estado']);
            $municipio_endereco = $metodo->buscarMunicipioIdEndereco($endereco['id_municipio']) ?>
                <tr>
                    <td><?= $endereco['descricao'] ?></td>
                    <td><?php echo $estado_endereco['descricao'].",".$municipio_endereco['descricao'].",".$endereco['cep']
                            .",".$endereco['bairro'].",".$endereco['logradouro'].",".$endereco['numero']."-".$endereco['complemento'] ?></td>

                    <td class="actions text-left">
                        <a class="btn btn-sm btn-warning" href="?page=pacienteForm&pacienteId=<?= $paciente['id']; ?>&editEnd=1">
                            <i class="fa fa-edit"></i>Editar</a>
                        <a class="btn btn-sm btn-danger" href="../admin/Paciente/Controller/delEndereco.php?id=<?= $endereco['id']; ?>&pacienteId=<?= $paciente['id']; ?>">
                            <i class="fa fa-trash"></i> Excluir</a>
                    </td>
                </tr>
         <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum endereço cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>


<?php if ($editEnd==1){?>
<form method="post" action="../admin/Paciente/Controller/editEndereco.php">
    <br><hr>
    <input type="hidden" id="pacienteId" name="pacienteId" value="<?= $paciente['id'] ?>">
    <input type="hidden" id="id" name="id" value="<?= $endereco['id'] ?>">
<div>
    <label class="desc" id="descricao" for="descricao">Descrição</label>
    <div>
        <input id="descricao" name="descricao" type="text" value="<?= $endereco['descricao'] ?>" size="30" tabindex="1">
    </div>
</div>
<div>
    <label class="desc" id="principal" for="principal">
        É o Endereço principal?
    </label>
    <div>
        <select id="principal" name="principal" class="field select medium" tabindex="11">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>
    </div>
</div>
<div>
    <label class="desc" id="estado" for="estado">Estado</label>
    <div style="color: black" >
        <select id="estado" name="estado" class="field select medium" tabindex="11" required="required">
            <?php foreach($estados as $estado): ?>
                <option value="<?= $estado['uf']; ?>"><?= $estado['descricao']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div >
    <label class="desc" id="municipio" for="municipio">Município</label>
    <div>
        <select id="municipio" name="municipio" class="field select medium" tabindex="11" >
            <?php foreach($municipios as $municipio): ?>
                <option value="<?= $municipio['id']; ?>"><?= $municipio['descricao']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div>
    <label class="desc" id="cep" for="cep">CEP</label>
    <div>
        <input id="cep" name="cep" type="text" value="<?= $endereco['cep'] ?>" size="30" tabindex="1">
    </div>
</div>
<div>
    <label class="desc" id="bairro" for="bairro">Bairro</label>
    <div>
        <input id="bairro" name="bairro" type="text" value="<?= $endereco['bairro'] ?>" size="30" tabindex="1">
    </div>
</div>
<div>
    <label class="desc" id="logradouro" for="logradouro">Logradouro</label>
    <div>
        <input id="logradouro" name="logradouro" type="text" value="<?= $endereco['logradouro'] ?>" size="60" tabindex="1">
    </div>
</div>
<div>
    <label class="desc" id="numero" for="numero">Número</label>
    <div>
        <input id="numero" name="numero" type="number" value="<?= $endereco['numero'] ?>" size="10" tabindex="1">
    </div>
</div>
<div>
    <label class="desc" id="complemento" for="complemento">Complemento</label>
    <div>
        <input id="complemento" name="complemento" type="text" value="<?= $endereco['complemento'] ?>" size="60" tabindex="1">
    </div>
</div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=pacienteForm&pacienteId=<?= $paciente['id']; ?>" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
<?php }?>
<?php if ($addEnd==1){?>
<form method="post" action="../admin/Paciente/Controller/addEndereco.php">
    <br><hr>
    <h2>Adicionando novo endereço</h2>
    <input type="hidden" id="pacienteId" name="pacienteId" value="<?= $paciente['id'] ?>">
    <div>
        <label class="desc" id="descricao" for="descricao">Descrição</label>
        <input id="descricao" name="descricao" type="text" value="" size="30" tabindex="1">
    </div>
    <div>
        <label class="desc" id="principal" for="principal">É o Endereço principal?</label>
        <select id="principal" name="principal" class="field select medium" tabindex="11">
            <option value="1">Sim</option>
            <option value="0">Não</option>
        </select>

    </div>
    <div>
        <label class="desc" id="estado" for="estado">Estado</label>
        <select id="estado" name="estado" class="field select medium" tabindex="11" required="required">
            <?php foreach($estados as $estado): ?>
                <option value="<?= $estado['uf']; ?>"><?= $estado['descricao']; ?></option>
            <?php endforeach; ?>
        </select>

    </div>
    <div >
        <label class="desc" id="municipio" for="municipio">Município</label>
        <select id="municipio" name="municipio" class="field select medium" tabindex="11" >
            <?php foreach($municipios as $municipio): ?>
                <option value="<?= $municipio['id']; ?>"><?= $municipio['descricao']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <label class="desc" id="cep" for="cep">CEP</label>
        <input id="cep" name="cep" type="text" value="" size="30" tabindex="1">
    </div>
    <div>
        <label class="desc" id="bairro" for="bairro">Bairro</label>
        <input id="bairro" name="bairro" type="text" value="" size="30" tabindex="1">
    </div>
    <div>
        <label class="desc" id="logradouro" for="logradouro">Logradouro</label>
        <input id="logradouro" name="logradouro" type="text" value="" size="60" tabindex="1">
    </div>
    <div>
        <label class="desc" id="numero" for="numero">Número</label>
        <input id="numero" name="numero" type="number" value="" size="10" tabindex="1">
    </div>
    <div>
        <label class="desc" id="complemento" for="complemento">Complemento</label>
        <input id="complemento" name="complemento" type="text" value="" size="60" tabindex="1">
    </div>
    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=pacienteForm&pacienteId=<?= $paciente['id']; ?>" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
    <?php }?>