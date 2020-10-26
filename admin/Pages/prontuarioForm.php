<?php

$id = isset($_GET['prontuarioId']) ? $_GET['prontuarioId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$prontuario = $metodo->buscarProntuarioPorId($id);

?>

<h2>Editando Prontuário - <?= $prontuario['id'] ?></h2>
<hr />
<div>
    <img src="../Util/img/odontograma.jpg" width="1000" height="525">
</div>
<form action="../admin/Prontuario/Controller/editProntuario.php" method="post">
    <input type="hidden" id="prontuarioId" name="prontuarioId" value="<?= $prontuario['id'] ?>">
    <br/><div>
        <h3>Seção de Identificação Legal</h3>
        <p style="margin-right: 230px">
            Esta seção preenchida de arcordo com as condições odontológicas com que o(a) paciente se apresentou no
            início do tratamento, sendo que serão descritas: -a presença e ausência de dentes - as patologias existentes.
            Os trabalhos presentes, bem como as faces envolvidas, o material utilizado e a situação atual dos mesmos.
            Outras situações encontradas que o(a) cirurgiãp(ã)-dentista julgar necessário relatar.
        </p>
    </div>
    <div>
        <label class="desc" id="18" for="18">18-</label>
        <input id="18" name="18" type="text" class="field text fn" value="<?= $prontuario['18'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="17" for="17">17-</label>
        <input id="17" name="17" type="text" class="field text fn" value="<?= $prontuario['17'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="16" for="16">16-</label>
        <input id="16" name="16" type="text" class="field text fn" value="<?= $prontuario['16'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="15_55" for="15_55">15/55-</label>
        <input id="15_55" name="15_55" type="text" class="field text fn" value="<?= $prontuario['15_55'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="14_54" for="14_54">14/54-</label>
        <input id="14_54" name="14_54" type="text" class="field text fn" value="<?= $prontuario['14_54'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="13_53" for="13_53">13/53-</label>
        <input id="13_53" name="13_53" type="text" class="field text fn" value="<?= $prontuario['13_53'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="12_52" for="12_52">12/52-</label>
        <input id="12_52" name="12_52" type="text" class="field text fn" value="<?= $prontuario['12_52'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="11_51" for="11_51">11/51-</label>
        <input id="11_51" name="11_51" type="text" class="field text fn" value="<?= $prontuario['11_51'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="21_61" for="21_61">21/61-</label>
        <input id="21_61" name="21_61" type="text" class="field text fn" value="<?= $prontuario['21_61'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="22_62" for="22_62">22/62-</label>
        <input id="22_62" name="22_62" type="text" class="field text fn" value="<?= $prontuario['22_62'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="23_63" for="23_63">23/63-</label>
        <input id="23_63" name="23_63" type="text" class="field text fn" value="<?= $prontuario['23_63'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="24_64" for="24_64">24/64-</label>
        <input id="24_64" name="24_64" type="text" class="field text fn" value="<?= $prontuario['24_64'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="25_65" for="25_65">25/65-</label>
        <input id="25_65" name="25_65" type="text" class="field text fn" value="<?= $prontuario['25_65'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="26" for="26">26-</label>
        <input id="26" name="26" type="text" class="field text fn" value="<?= $prontuario['26'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="27" for="27">27-</label>
        <input id="27" name="27" type="text" class="field text fn" value="<?= $prontuario['27'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="28" for="28">28-</label>
        <input id="28" name="28" type="text" class="field text fn" value="<?= $prontuario['28'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="38" for="38">38-</label>
        <input id="38" name="38" type="text" class="field text fn" value="<?= $prontuario['38'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="37" for="37">37-</label>
        <input id="37" name="37" type="text" class="field text fn" value="<?= $prontuario['37'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="36" for="36">36-</label>
        <input id="36" name="36" type="text" class="field text fn" value="<?= $prontuario['36'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="35_75" for="35_75">35/75-</label>
        <input id="35_75" name="35_75" type="text" class="field text fn" value="<?= $prontuario['35_75'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="34_74" for="34_74">34/74-</label>
        <input id="34_74" name="34_74" type="text" class="field text fn" value="<?= $prontuario['34_74'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="33_73" for="33_73">33/73-</label>
        <input id="33_73" name="33_73" type="text" class="field text fn" value="<?= $prontuario['33_73'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="32_72" for="32_72">32/72-</label>
        <input id="32_72" name="32_72" type="text" class="field text fn" value="<?= $prontuario['32_72'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="31_71" for="31_71">31/71-</label>
        <input id="31_71" name="31_71" type="text" class="field text fn" value="<?= $prontuario['31_71'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="41_81" for="41_81">41/81-</label>
        <input id="41_81" name="41_81" type="text" class="field text fn" value="<?= $prontuario['41_81'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="42_82" for="42_82">42/82-</label>
        <input id="42_82" name="42_82" type="text" class="field text fn" value="<?= $prontuario['42_82'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="43_83" for="43_83">43/83-</label>
        <input id="43_83" name="43_83" type="text" class="field text fn" value="<?= $prontuario['43_83'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="44_84" for="44_84">44/84-</label>
        <input id="44_84" name="44_84" type="text" class="field text fn" value="<?= $prontuario['44_84'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="45_85" for="45_85">45/85-</label>
        <input id="45_85" name="45_85" type="text" class="field text fn" value="<?= $prontuario['45_85'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="46" for="46">46-</label>
        <input id="46" name="46" type="text" class="field text fn" value="<?= $prontuario['46'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="47" for="47">47-</label>
        <input id="47" name="47" type="text" class="field text fn" value="<?= $prontuario['47'] ?>" size="113" tabindex="1">
    </div>
    <div>
        <label class="desc" id="48" for="48">48-</label>
        <input id="48" name="48" type="text" class="field text fn" value="<?= $prontuario['48'] ?>" size="113" tabindex="1">
    </div>


    <br/><div><h3>1) Inspeção Loco-Regional (extra-oral)</h3></div>

    <div>
        <label class="desc" id="erupcoes" for="erupcoes">Erupções</label>
        <input id="erupcoes" name="erupcoes" type="text" class="field text fn" value="<?= $prontuario['erupcoes'] ?>" size="108" tabindex="1">
    </div>
    <div>
        <label class="desc" id="nodulos" for="nodulos">Nódulos</label>
        <input id="nodulos" name="nodulos" type="text" class="field text fn" value="<?= $prontuario['nodulos'] ?>" size="109" tabindex="1">
    </div>
    <div>
        <label class="desc" id="musculatura" for="musculatura">Musculatura</label>
        <input id="musculatura" name="musculatura" type="text" class="field text fn" value="<?= $prontuario['musculatura'] ?>" size="105" tabindex="1">
    </div>
    <div>
        <label class="desc" id="cadeia" for="cadeia">Cadeia</label>
        <input id="cadeia" name="cadeia" type="text" class="field text fn" value="<?= $prontuario['cadeia'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="ganglionar" for="ganglionar">Ganglionar</label>
        <input id="ganglionar" name="ganglionar" type="text" class="field text fn" value="<?= $prontuario['ganglionar'] ?>" size="106" tabindex="1">
    </div>
    <div>
        <label class="desc" id="cicatrizes" for="cicatrizes">Cicatrizes</label>
        <input id="cicatrizes" name="cicatrizes" type="text" class="field text fn" value="<?= $prontuario['cicatrizes'] ?>" size="107" tabindex="1">
    </div>
    <div>
        <label class="desc" id="assimetria_face_pescoco" for="assimetria_face_pescoco">Assimetria Face e Pescoço</label>
        <input id="assimetria_face_pescoco" name="assimetria_face_pescoco" type="text" class="field text fn" value="<?= $prontuario['assimetria_face_pescoco'] ?>" size="91" tabindex="1">
    </div>
    <div>
        <label class="desc" id="exoftalmia" for="exoftalmia">Exoftalmia</label>
        <input id="exoftalmia" name="exoftalmia" type="text" class="field text fn" value="<?= $prontuario['exoftalmia'] ?>" size="107" tabindex="1">
    </div>
    <div>
        <label class="desc" id="glandulas_salivares" for="glandulas_salivares">Glândulas Salivares</label>
        <input id="glandulas_salivares" name="glandulas_salivares" type="text" class="field text fn" value="<?= $prontuario['glandulas_salivares'] ?>" size="98" tabindex="1">
    </div>

    <br/><div><h3>2) Inspeção Buco-Dentária (intra-oral)</h3></div>

    <div>
        <label class="desc" id="labios" for="labios">Lábios</label>
        <input id="labios" name="labios" type="text" class="field text fn" value="<?= $prontuario['labios'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="bochechas" for="bochechas">Bochechas</label>
        <input id="bochechas" name="bochechas" type="text" class="field text fn" value="<?= $prontuario['bochechas'] ?>" size="106" tabindex="1">
    </div>
    <div>
        <label class="desc" id="espaco_retromolar" for="espaco_retromolar">Espaço Retromolar</label>
        <input id="espaco_retromolar" name="espaco_retromolar" type="text" class="field text fn" value="<?= $prontuario['espaco_retromolar'] ?>" size="98" tabindex="1">
    </div>
    <div>
        <label class="desc" id="lingua" for="lingua">Língua</label>
        <input id="lingua" name="lingua" type="text" class="field text fn" value="<?= $prontuario['lingua'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="base_lingua" for="base_lingua">Base da Língua</label>
        <input id="base_lingua" name="base_lingua" type="text" class="field text fn" value="<?= $prontuario['base_lingua'] ?>" size="102" tabindex="1">
    </div>
    <div>
        <label class="desc" id="assoalho_bucal" for="assoalho_bucal">Assoalho Bucal</label>
        <input id="assoalho_bucal" name="assoalho_bucal" type="text" class="field text fn" value="<?= $prontuario['assoalho_bucal'] ?>" size="101" tabindex="1">
    </div>
    <div>
        <label class="desc" id="palato" for="palato">Palato</label>
        <input id="palato" name="palato" type="text" class="field text fn" value="<?= $prontuario['palato'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="amigdalas" for="amigdalas">Amigdalas</label>
        <input id="amigdalas" name="amigdalas" type="text" class="field text fn" value="<?= $prontuario['amigdalas'] ?>" size="106" tabindex="1">
    </div>
    <div>
        <label class="desc" id="limite_orofaringeo" for="limite_orofaringeo">Limite Oro-faríngeo</label>
        <input id="limite_orofaringeo" name="limite_orofaringeo" type="text" class="field text fn" value="<?= $prontuario['limite_orofaringeo'] ?>" size="98" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_ausentes" for="dentes_ausentes">Dentes Ausentes</label>
        <input id="dentes_ausentes" name="dentes_ausentes" type="text" class="field text fn" value="<?= $prontuario['dentes_ausentes'] ?>" size="100" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_supranumerarios" for="dentes_supranumerarios">Dentes Supranumerários</label>
        <input id="dentes_supranumerarios" name="dentes_supranumerarios" type="text" class="field text fn" value="<?= $prontuario['dentes_supranumerarios'] ?>" size="93" tabindex="1">
    </div>
    <div>
        <label class="desc" id="dentes_retidos" for="dentes_retidos">Dentes Retidos</label>
        <input id="dentes_retidos" name="dentes_retidos" type="text" class="field text fn" value="<?= $prontuario['dentes_retidos'] ?>" size="102" tabindex="1">
    </div>
    <div>
        <label class="desc" id="diastema" for="diastema">Diastema</label>
        <input id="diastema" name="diastema" type="text" class="field text fn" value="<?= $prontuario['diastema'] ?>" size="108" tabindex="1">
    </div>
    <div>
        <label class="desc" id="freios" for="freios">Freios/Bridas</label>
        <input id="freios" name="freios" type="text" class="field text fn" value="<?= $prontuario['freios'] ?>" size="104" tabindex="1">
    </div>
    <div>
        <label class="desc" id="erosao" for="erosao">Atrição/Abrasão/Erosão</label>
        <input id="erosao" name="erosao" type="text" class="field text fn" value="<?= $prontuario['erosao'] ?>" size="94" tabindex="1">
    </div>
    <div>
        <label class="desc" id="hipoplasia_esmalte" for="hipoplasia_esmalte">Hipoplasia de Esmalte</label>
        <input id="hipoplasia_esmalte" name="hipoplasia_esmalte" type="text" class="field text fn" value="<?= $prontuario['hipoplasia_esmalte'] ?>" size="95" tabindex="1">
    </div>
    <div>
        <label class="desc" id="manchas" for="manchas">Manchas</label>
        <input id="manchas" name="manchas" type="text" class="field text fn" value="<?= $prontuario['manchas'] ?>" size="108" tabindex="1">
    </div>
    <div>
        <label class="desc" id="induto" for="induto">Induto</label>
        <input id="induto" name="induto" type="text" class="field text fn" value="<?= $prontuario['induto'] ?>" size="110" tabindex="1">
    </div>
    <div>
        <label class="desc" id="tartaro" for="tartaro">Cálculo/Tártaro</label>
        <input id="tartaro" name="tartaro" type="text" class="field text fn" value="<?= $prontuario['tartaro'] ?>" size="102" tabindex="1">
    </div>
    <div>
        <label class="desc" id="retracao_gengival" for="retracao_gengival">Retração Gengival</label>
        <input id="retracao_gengival" name="retracao_gengival" type="text" class="field text fn" value="<?= $prontuario['retracao_gengival'] ?>" size="99" tabindex="1">
    </div>
    <div>
        <label class="desc" id="gengivas" for="gengivas">Gengivas</label>
        <input id="gengivas" name="gengivas" type="text" class="field text fn" value="<?= $prontuario['gengivas'] ?>" size="108" tabindex="1">
    </div>
    <div>
        <label class="desc" id="mobilidade_dental" for="mobilidade_dental">Mobilidade Dental</label>
        <input id="mobilidade_dental" name="mobilidade_dental" type="text" class="field text fn" value="<?= $prontuario['mobilidade_dental'] ?>" size="100" tabindex="1">
    </div>
    <div>
        <label class="desc" id="oclusao" for="oclusao">Oclusão</label>
        <input id="oclusao" name="oclusao" type="text" class="field text fn" value="<?= $prontuario['oclusao'] ?>" size="109" tabindex="1">
    </div>
    <div>
        <label class="desc" id="anomalidade_fala" for="anomalidade_fala">Anomalidade na Fala</label>
        <input id="anomalidade_fala" name="anomalidade_fala" type="text" class="field text fn" value="<?= $prontuario['anomalidade_fala'] ?>" size="97" tabindex="1">
    </div>
    <div>
        <label class="desc" id="higiene_oral" for="higiene_oral">Higiene Oral</label>
        <input id="higiene_oral" name="higiene_oral" type="text" class="field text fn" value="<?= $prontuario['higiene_oral'] ?>" size="105" tabindex="1">
    </div>
    <div>
        <label class="desc" id="fluxo_salivar" for="fluxo_salivar">Fluxo Salivar</label>
        <input id="fluxo_salivar" name="fluxo_salivar" type="text" class="field text fn" value="<?= $prontuario['fluxo_salivar'] ?>" size="104" tabindex="1">
    </div>
    <div>
        <label class="desc" id="outros" for="outros">Outros</label>
        <input id="outros" name="outros" type="text" class="field text fn" value="<?= $prontuario['outros'] ?>" size="110" tabindex="1">
    </div>

    <br/><div><h3>3) Sinais Vitais</h3></div>

    <div>
        <label class="desc" id="pulso" for="pulso">Pulso</label>
        <input id="pulso" name="pulso" type="text" class="field text fn" value="<?= $prontuario['pulso'] ?>" size="93" tabindex="1">
        Normal 60 a 90 bpm
    </div>
    <div>
        <label class="desc" id="pressao_arterial" for="pressao_arterial">Pressão Arterial</label>
        <input id="pressao_arterial" name="pressao_arterial" type="text" class="field text fn" value="<?= $prontuario['pressao_arterial'] ?>" size="76" tabindex="1">
        Normal <= 90 Hg/130mm Hg
    </div>
    <div>
        <label class="desc" id="frequencia_respiratoria" for="frequencia_respiratoria">Frequência Respiratória</label>
        <input id="frequencia_respiratoria" name="frequencia_respiratoria" type="text" class="field text fn" value="<?= $prontuario['frequencia_respiratoria'] ?>" size="72" tabindex="1">
        Normal 15 a 20 mov/min
    </div>
    <div>
        <label class="desc" id="temperatura" for="temperatura">Temperatura</label>
        <input id="temperatura" name="temperatura" type="text" class="field text fn" value="<?= $prontuario['temperatura'] ?>" size="87" tabindex="1">
        Normal 36,8 + 0,2ºC
    </div>

    <br/><div><h3>4) Radiografias</h3></div>

    <div>
        <div> Paciente trouxe radiografias?Quais?</div>
        <div> Trouxe modelos?Quais?</div>
        <div>
            <label class="desc" id="observacoes" for="observacoes">OBSERVAÇÕES (Anotações do C.D)</label>
        </div>
        <input id="observacoes" name="observacoes" type="text" class="field text fn" value="<?= $prontuario['observacoes'] ?>" size="116" tabindex="1">
    </div>


    <div>
        <div>
            <br>
            <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
            <a href="?page=prontuariosList" class="btn btn-sm btn-danger">Cancelar</a>
        </div>
    </div>
</form>
