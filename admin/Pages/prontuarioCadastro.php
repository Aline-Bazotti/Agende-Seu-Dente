<?php
    $pacientes = $metodo->buscarTodosPacientes()
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Cadastro Prontuário</title>

    <link type="text/css" rel="stylesheet" href="css/user.css">
</head>
<body>
<div>
    <img src="../Util/img/odontograma.jpg" width="1000" height="525">
</div>
<form action="../admin/Prontuario/Controller/addProntuario.php" method="post">
    <header>
        <h2>Cadastro Prontuário</h2>
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

    <br/><div><h3>1) Inspeção Loco-Regional (extra-oral)</h3></div>

    <div>
        <label class="desc" id="erupcoes" for="erupcoes">Erupções</label>
        <input id="erupcoes" name="erupcoes" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="nodulos" for="nodulos">Nódulos</label>
        <input id="nodulos" name="nodulos" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="musculatura" for="musculatura">Musculatura</label>
        <input id="musculatura" name="musculatura" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="cadeia" for="cadeia">Cadeia</label>
        <input id="cadeia" name="cadeia" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="ganglionar" for="ganglionar">Ganglionar</label>
        <input id="ganglionar" name="ganglionar" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="cicatrizes" for="cicatrizes">Cicatrizes</label>
        <input id="cpf_cnpj" name="cpf_cnpj" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="assimetria_face_pescoco" for="assimetria_face_pescoco">Assimetria Face e Pescoço</label>
        <input id="assimetria_face_pescoco" name="assimetria_face_pescoco" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="exoftalmia" for="cpf_cnpj">Exoftalmia</label>
        <input id="exoftalmia" name="exoftalmia" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="glandulas_salivares" for="cpf_cnpj">Glândulas Salivares</label>
        <input id="glandulas_salivares" name="glandulas_salivares" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>

    <br/><div><h3>2) Inspeção Buco-Dentária (intra-oral)</h3></div>

    <div>
        <label class="desc" id="labios" for="labios">Lábios</label>
        <input id="labios" name="labios" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="bochechas" for="bochechas">Bochechas</label>
        <input id="bochechas" name="bochechas" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="espaco_retromolar" for="espaco_retromolar">Espaço Retromolar</label>
        <input id="espaco_retromolar" name="espaco_retromolar" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="lingua" for="lingua">Língua</label>
        <input id="lingua" name="lingua" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="base_lingua" for="base_lingua">Base da Língua</label>
        <input id="base_lingua" name="base_lingua" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="assoalho_bucal" for="assoalho_bucal">Assoalho Bucal</label>
        <input id="assoalho_bucal" name="assoalho_bucal" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="palato" for="palato">Palato</label>
        <input id="palato" name="palato" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="amigdalas" for="amigdalas">Amigdalas</label>
        <input id="amigdalas" name="amigdalas" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="limite_orofaringeo" for="limite_orofaringeo">Limite Oro-faríngeo</label>
        <input id="limite_orofaringeo" name="limite_orofaringeo" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_ausentes" for="dentes_ausentes">Dentes Ausentes</label>
        <input id="dentes_ausentes" name="dentes_ausentes" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_supranumerarios" for="dentes_supranumerarios">Dentes Supranumerários</label>
        <input id="dentes_supranumerarios" name="dentes_supranumerarios" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_retidos" for="dentes_retidos">Dentes Retidos</label>
        <input id="dentes_retidos" name="dentes_retidos" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="diastema" for="diastema">Diastema</label>
        <input id="diastema" name="diastema" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="freios" for="freios">Freios/Bridas</label>
        <input id="freios" name="freios" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="erosao" for="erosao">Atrição/Abrasão/Erosão</label>
        <input id="erosao" name="erosao" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="hipoplasia_esmalte" for="hipoplasia_esmalte">Hipoplasia de Esmalte</label>
        <input id="hipoplasia_esmalte" name="hipoplasia_esmalte" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="manchas" for="manchas">Manchas</label>
        <input id="manchas" name="manchas" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="induto" for="induto">Induto</label>
        <input id="induto" name="induto" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="tartaro" for="tartaro">Cálculo/Tártaro</label>
        <input id="tartaro" name="tartaro" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="retracao_gengival" for="retracao_gengival">Retração Gengival</label>
        <input id="retracao_gengival" name="retracao_gengival" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="gengivas" for="gengivas">Gengivas</label>
        <input id="gengivas" name="gengivas" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="mobilidade_dental" for="mobilidade_dental">Mobilidade Dental</label>
        <input id="mobilidade_dental" name="mobilidade_dental" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="oclusao" for="oclusao">Oclusão</label>
        <input id="oclusao" name="oclusao" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="anomalidade_fala" for="anomalidade_fala">Anomalidade na Fala</label>
        <input id="anomalidade_fala" name="anomalidade_fala" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="higiene_oral" for="higiene_oral">Higiene Oral</label>
        <input id="higiene_oral" name="higiene_oral" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="fluxo_salivar" for="fluxo_salivar">Fluxo Salivar</label>
        <input id="fluxo_salivar" name="fluxo_salivar" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>
    <div>
        <label class="desc" id="outros" for="outros">Outros</label>
        <input id="outros" name="outros" type="text" class="field text fn" value="" size="70" tabindex="1">
    </div>

    <br/><div><h3>3) Sinais Vitais</h3></div>

    <div>
        <label class="desc" id="pulso" for="pulso">Pulso</label>
        <input id="pulso" name="pulso" type="text" class="field text fn" value="" size="70" tabindex="1">
        Normal 60 a 90 bpm
    </div>
    <div>
        <label class="desc" id="pressao_arterial" for="pressao_arterial">Pressão Arterial</label>
        <input id="pressao_arterial" name="pressao_arterial" type="text" class="field text fn" value="" size="70" tabindex="1">
        Normal <= 90 Hg/130mm Hg
    </div>
    <div>
        <label class="desc" id="frequencia_respiratoria" for="frequencia_respiratoria">Frequência Respiratória</label>
        <input id="frequencia_respiratoria" name="frequencia_respiratoria" type="text" class="field text fn" value="" size="70" tabindex="1">
        Normal 15 a 20 mov/min
    </div>
    <div>
        <label class="desc" id="temperatura" for="temperatura">Temperatura</label>
        <input id="temperatura" name="temperatura" type="text" class="field text fn" value="" size="70" tabindex="1">
        Normal 36,8 + 0,2ºC
    </div>

    <br/><div><h3>4) Radiografias</h3></div>

    <div>
        <div> Paciente trouxe radiografias?Quais?</div>
        <div> Trouxe modelos?Quais?</div>
        <div>
            <label class="desc" id="observacoes" for="observacoes">OBSERVAÇÕES (Anotações do C.D)</label>
        </div>
        <input id="observacoes" name="observacoes" type="text" class="field text fn" value="" size="70" tabindex="1">
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