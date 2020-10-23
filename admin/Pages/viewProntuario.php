<?php

$id = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$dados = $metodo->visualizarProntuario($id);

?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Prontuário Paciente - <?= $dados['nome'] ?></h2>
        </div>
    </div>
</header>
<div class="container" style="font-size: 16px">
        <fieldset>
            <div id="exTab3" class="container">
                <ul class="nav nav-pills">
                    <li><a href="#paciente-tab" data-toggle="tab">Dados do Paciente</a></li>
                    <li><a href="#historico-tab" data-toggle="tab"> Relatório de Procedimentos</a></li>
                    <li><a href="#exame-tab" data-toggle="tab">Exame Clínico</a></li>
                </ul>

                <div class="tab-content clearfix">

                    <!-- ----------------- -->
                    <!-- Dados do Paciente -->
                    <!-- ----------------- -->
                    <div class="tab-pane active" id="paciente-tab">
                        <h4 style="font-size: 26px">Dados Pessoais</h4>
                        <div><label class="desc">Nome:<u><?= $dados['nome'] ?><u></label></div>
                        <div><label class="desc">CPF:<u><?= $dados['cpf_cnpj'] ?><u></label></div>
                        <div><label class="desc">RG:<u><?= $dados['rg_ie'] ?><u></label></div>
                        <div><label class="desc">Data de Nascimento:<u><?= $dados['data_nascimento'] ?><u></label></div>
                        <div><label class="desc">Telefone:<u><?= $dados['telefone'] ?><u></label></div>
                        <div><label class="desc">Telefone Secundário:<u><?= $dados['telefone_s'] ?><u></label></div>
                        <div><label class="desc">Naturalidade:<u><?= $dados['naturalidade'] ?><u></label></div>
                        <div><label class="desc">Nacionalidade:<u><?= $dados['nacionalidade'] ?><u></label></div>
                        <div><label class="desc">Estado Civil:<u><?= $dados['estado_civil'] ?><u></label></div>
                        <div><label class="desc">Sexo:<u><?= $dados['sexo'] ?><u></label></div>
                        <div><label class="desc">Nome Cônjuge:<u><?= $dados['nome_conjuge'] ?><u></label></div>

                        <h5 style="font-size: 22px">Filiação</h5>
                        <div><label class="desc">Nome Pai:<u><?= $dados['nome_pai'] ?><u></label></div>
                        <div><label class="desc">Nome Mãe:<u><?= $dados['nome_mae'] ?><u></label></div>
                        <div><label class="desc">Responsável Legal:<u><?= $dados['nome_responsavel'] ?><u></label></div>
                        <div><label class="desc">Indicação Dr(a):<u><?= $dados['indicacao_dr'] ?><u></label></div>

                        <h5 style="font-size: 22px">Dados Profissionais</h5>
                        <div><label class="desc">Nome da empresa que trabalha:<u><?= $dados['nome_empresa'] ?><u></label></div>
                        <div><label class="desc">Telefone da Empresa:<u><?= $dados['telefone_empresa'] ?><u></label></div>
                        <div><label class="desc">Profissão:<u><?= $dados['profissao'] ?><u></label></div>
                        <div><label class="desc">Horário de Trabalho:<u><?= $dados['horario_trabalho'] ?><u></label></div>
                        <div><label class="desc">Cargo:<u><?= $dados['cargo'] ?><u></label></div>
                        <div><label class="desc">Email:<u><?= $dados['email'] ?><u></label></div>


                        <h5 style="font-size: 22px">Endereços</h5>
                        <div><label class="desc">Identificação:<u><?= $dados['identificacao'] ?><u></label></div>
                        <div><label class="desc">Estado:<u><?= $dados['estado'] ?><u></label></div>
                        <div><label class="desc">Município:<u><?= $dados['descricao'] ?><u></label></div>
                        <div><label class="desc">CEP:<u><?= $dados['cep'] ?><u></label></div>
                        <div><label class="desc">Bairro:<u><?= $dados['bairro'] ?><u></label></div>
                        <div><label class="desc">Logradouro:<u><?= $dados['logradouro'] ?><u></label></div>
                        <div><label class="desc">Número:<u><?= $dados['numero'] ?><u></label></div>
                        <div><label class="desc">Complemento:<u><?= $dados['complemento'] ?><u></label></div>
                    </div>
                    <!-- ------------------ -->
                    <!-- /Dados do Paciente -->
                    <!-- ------------------ -->


                    <!-- -------------------------- -->
                    <!-- Relatório de Procedimentos -->
                    <!-- -------------------------- -->
                    <div class="tab-pane" id="historico-tab">
                        <h4 style="font-size: 26px"></i>Relatório de Procedimentos</h4>
                    </div>
                    <!-- --------------------------- -->
                    <!-- /Relatório de Procedimentos -->
                    <!-- --------------------------- -->

                    <!-- ------------- -->
                    <!-- Exame Clínico -->
                    <!-- -------------- -->
                    <div class="tab-pane" id="exame-tab">
                        <h4 style="font-size: 26px">Exame Clínico</h4>

                        <h5 style="font-size: 22px">1) Inspeção Loco-Regional (extra-oral)</h5></div>
                        <div><label class="desc">Erupções:<u><?= $dados['erupcoes'] ?><u></label></div>
                        <div><label class="desc">Nódulos:<u><?= $dados['nodulos'] ?><u></label></div>
                        <div><label class="desc">Musculatura:<u><?= $dados['musculatura'] ?><u></label></div>
                        <div><label class="desc">Ganglionar:<u><?= $dados['ganglionar'] ?><u></label></div>
                        <div><label class="desc">Cicatrizes:<u><?= $dados['cicatrizes'] ?><u></label></div>
                        <div><label class="desc">Assimetria Face e Pescoço:<u><?= $dados['assimetria_face_pescoco'] ?><u></label></div>
                        <div><label class="desc">Exoftalmia:<u><?= $dados['exoftalmia'] ?><u></label></div>
                        <div><label class="desc">Glândulas Salivares:<u><?= $dados['glandulas_salivares'] ?><u></label></div>

                        <h5 style="font-size: 22px">2) Inspeção Buco-Dentária (intra-oral)</h5></div>
                        <div><label class="desc">Lábios:<u><?= $dados['labios'] ?><u></label></div>
                        <div><label class="desc">Bochechas:<u><?= $dados['bochechas'] ?><u></label></div>
                        <div><label class="desc">Espaço Retromolar:<u><?= $dados['espaco_retromolar'] ?><u></label></div>
                        <div><label class="desc">Língua:<u><?= $dados['lingua'] ?><u></label></div>
                        <div><label class="desc">Base da Língua:<u><?= $dados['base_lingua'] ?><u></label></div>
                        <div><label class="desc">Assoalho Bucal:<u><?= $dados['assoalho_bucal'] ?><u></label></div>
                        <div><label class="desc">Palato:<u><?= $dados['palato'] ?><u></label></div>
                        <div><label class="desc">Amígdalas:<u><?= $dados['amigdalas'] ?><u></label></div>
                        <div><label class="desc">Limite Oro-faríngeo:<u><?= $dados['limite_orofaringeo'] ?><u></label></div>
                        <div><label class="desc">Dentes Ausentes:<u><?= $dados['dentes_ausentes'] ?><u></label></div>
                        <div><label class="desc">Dentes Supranumerários:<u><?= $dados['dentes_supranumerarios'] ?><u></label></div>
                        <div><label class="desc">Dentes Retidos:<u><?= $dados['dentes_retidos'] ?><u></label></div>
                        <div><label class="desc">Diastema:<u><?= $dados['diastema'] ?><u></label></div>
                        <div><label class="desc">Freios/Bridas:<u><?= $dados['freios'] ?><u></label></div>
                        <div><label class="desc">Atrição/Abrasão/Erosão:<u><?= $dados['erosao'] ?><u></label></div>
                        <div><label class="desc">Hipoplasia de Esmalte:<u><?= $dados['hipoplasia_esmalte'] ?><u></label></div>
                        <div><label class="desc">Língua:<u><?= $dados['lingua'] ?><u></label></div>
                        <div><label class="desc">Língua:<u><?= $dados['lingua'] ?><u></label></div>



                

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
                    </div>
                    <!-- --------------- -->
                    <!-- /Exame Clínico -->
                    <!-- -------------- -->


                    <br>
                </div>

                <div class="form-actions">
                    <button name="button" type="submit" id="enviar" class="btn btn-success" value="alterar"><i class="fa fa-check"></i>Salvar</button>
                    <button name="button" type="reset" id="reset" class="btn" value="resetar"><i class="fa fa-undo"></i> Desfazer</button>
                </div>
            </div>
        </fieldset>
</div>