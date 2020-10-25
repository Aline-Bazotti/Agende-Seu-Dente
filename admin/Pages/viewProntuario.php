<?php

$id = isset($_GET['pacienteId']) ? $_GET['pacienteId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$dados = $metodo->visualizarProntuario($id);
$historicos = $metodo->buscarProntuarioHistorico($dados['id'])

?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Prontuário Paciente - <?= $dados['nome']; ?></h2>
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
                        <div><label class="desc">Nome:<u><?= $dados['nome'] ?></u></label></div>
                        <div><label class="desc">CPF:<u><?= $dados['cpf_cnpj'] ?></u></label></div>
                        <div><label class="desc">RG:<u><?= $dados['rg_ie'] ?></u></label></div>
                        <div><label class="desc">Data de Nascimento:<u><?= $dados['data_nascimento'] ?></u></label></div>
                        <div><label class="desc">Telefone:<u><?= $dados['telefone'] ?></u></label></div>
                        <div><label class="desc">Telefone Secundário:<u><?= $dados['telefone_s'] ?></u></label></div>
                        <div><label class="desc">Naturalidade:<u><?= $dados['naturalidade'] ?></u></label></div>
                        <div><label class="desc">Nacionalidade:<u><?= $dados['nacionalidade'] ?></u></label></div>
                        <div><label class="desc">Estado Civil:<u><?= $dados['estado_civil'] ?></u></label></div>
                        <div><label class="desc">Sexo:<u><?= $dados['sexo'] ?></u></label></div>
                        <div><label class="desc">Nome Cônjuge:<u><?= $dados['nome_conjuge'] ?></u></label></div>

                        <h5 style="font-size: 22px">Filiação</h5>
                        <div><label class="desc">Nome Pai:<u><?= $dados['nome_pai'] ?></u></label></div>
                        <div><label class="desc">Nome Mãe:<u><?= $dados['nome_mae'] ?></u></label></div>
                        <div><label class="desc">Responsável Legal:<u><?= $dados['nome_responsavel'] ?></u></label></div>
                        <div><label class="desc">Indicação Dr(a):<u><?= $dados['indicacao_dr'] ?></u></label></div>

                        <h5 style="font-size: 22px">Dados Profissionais</h5>
                        <div><label class="desc">Nome da empresa que trabalha:<u><?= $dados['nome_empresa'] ?></u></label></div>
                        <div><label class="desc">Telefone da Empresa:<u><?= $dados['telefone_empresa'] ?></u></label></div>
                        <div><label class="desc">Profissão:<u><?= $dados['profissao'] ?></u></label></div>
                        <div><label class="desc">Horário de Trabalho:<u><?= $dados['horario_trabalho'] ?></u></label></div>
                        <div><label class="desc">Cargo:<u><?= $dados['cargo'] ?></u></label></div>
                        <div><label class="desc">Email:<u><?= $dados['email'] ?></u></label></div>


                        <h5 style="font-size: 22px">Endereços</h5>
                        <div><label class="desc">Identificação:<u><?= $dados['identificacao'] ?></u></label></div>
                        <div><label class="desc">Estado:<u><?= $dados['estado'] ?></u></label></div>
                        <div><label class="desc">Município:<u><?= $dados['descricao'] ?></u></label></div>
                        <div><label class="desc">CEP:<u><?= $dados['cep'] ?></u></label></div>
                        <div><label class="desc">Bairro:<u><?= $dados['bairro'] ?></u></label></div>
                        <div><label class="desc">Logradouro:<u><?= $dados['logradouro'] ?></u></label></div>
                        <div><label class="desc">Número:<u><?= $dados['numero'] ?></u></label></div>
                        <div><label class="desc">Complemento:<u><?= $dados['complemento'] ?></u></label></div>
                    </div>
                    <!-- ------------------ -->
                    <!-- /Dados do Paciente -->
                    <!-- ------------------ -->


                    <!-- -------------------------- -->
                    <!-- Relatório de Procedimentos -->
                    <!-- -------------------------- -->
                    <div class="tab-pane" id="historico-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 style="font-size: 26px">Relatório de Procedimentos</h4>
                            </div>
                            <div class="col-sm-6 text-center h2">
                                <a class="btn btn-info" href="?page=viewProntuario&pacienteId=<?= $dados['id_paciente'];?>#historico-tab"><i class="fa fa-hourglass"></i> Atualizar</a>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>Data</th>
                                <th>Dente</th>
                                <th>Procedimento</th>
                                <th>Ação</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if ($historicos) {
                                foreach($historicos as $historico):?>
                                    <tr>
                                        <td><?= $historico['data_procedimento']; ?></td>
                                        <td><?= $historico['dente']; ?></td>
                                        <td><?= $historico['procedimento']; ?></td>

                                        <td class="actions text-left">
                                            <a class="btn btn-sm btn-warning" href="?page=prontuarioHistoricoForm&historicoId=<?= $historico['id']; ?>">
                                                <i class="fa fa-edit"></i>Editar</a>
                                            <a class="btn btn-sm btn-danger" href="../admin/Prontuario/Controller/delHistorico.php?historicoId=<?= $historico['id']; ?>&pacienteId=<?= $dados['id_paciente'];?>">
                                                <i class="fa fa-trash"></i> Excluir</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="6">Nenhum histórico adicionado nesse prontuário cadastrado.</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- --------------------------- -->
                    <!-- /Relatório de Procedimentos -->
                    <!-- --------------------------- -->

                    <!-- ------------- -->
                    <!-- Exame Clínico -->
                    <!-- -------------- -->
                    <div class="tab-pane" id="exame-tab">
                        <h4 style="font-size: 26px">Exame Clínico</h4>

                        <h5 style="font-size: 22px">1) Inspeção Loco-Regional (extra-oral)</h5>
                        <div><label class="desc">Erupções:<u><?= $dados['erupcoes'] ?></u></label></div>
                        <div><label class="desc">Nódulos:<u><?= $dados['nodulos'] ?></u></label></div>
                        <div><label class="desc">Musculatura:<u><?= $dados['musculatura'] ?></u></label></div>
                        <div><label class="desc">Ganglionar:<u><?= $dados['ganglionar'] ?></u></label></div>
                        <div><label class="desc">Cicatrizes:<u><?= $dados['cicatrizes'] ?></u></label></div>
                        <div><label class="desc">Assimetria Face e Pescoço:<u><?= $dados['assimetria_face_pescoco'] ?></u></label></div>
                        <div><label class="desc">Exoftalmia:<u><?= $dados['exoftalmia'] ?></u></label></div>
                        <div><label class="desc">Glândulas Salivares:<u><?= $dados['glandulas_salivares'] ?><u/></label></div>

                        <h5 style="font-size: 22px">2) Inspeção Buco-Dentária (intra-oral)</h5>
                        <div><label class="desc">Lábios:<u><?= $dados['labios'] ?></u></label></div>
                        <div><label class="desc">Bochechas:<u><?= $dados['bochechas'] ?></u></label></div>
                        <div><label class="desc">Espaço Retromolar:<u><?= $dados['espaco_retromolar'] ?></u></label></div>
                        <div><label class="desc">Língua:<u><?= $dados['lingua'] ?></u></label></div>
                        <div><label class="desc">Base da Língua:<u><?= $dados['base_lingua'] ?></u></label></div>
                        <div><label class="desc">Assoalho Bucal:<u><?= $dados['assoalho_bucal'] ?></u></label></div>
                        <div><label class="desc">Palato:<u><?= $dados['palato'] ?></u></label></div>
                        <div><label class="desc">Amígdalas:<u><?= $dados['amigdalas'] ?></u></label></div>
                        <div><label class="desc">Limite Oro-faríngeo:<u><?= $dados['limite_orofaringeo'] ?></u></label></div>
                        <div><label class="desc">Dentes Ausentes:<u><?= $dados['dentes_ausentes'] ?></u></label></div>
                        <div><label class="desc">Dentes Supranumerários:<u><?= $dados['dentes_supranumerarios'] ?></u></label></div>
                        <div><label class="desc">Dentes Retidos:<u><?= $dados['dentes_retidos'] ?></u></label></div>
                        <div><label class="desc">Diastema:<u><?= $dados['diastema'] ?></u></label></div>
                        <div><label class="desc">Freios/Bridas:<u><?= $dados['freios'] ?></u></label></div>
                        <div><label class="desc">Atrição/Abrasão/Erosão:<u><?= $dados['erosao'] ?></u></label></div>
                        <div><label class="desc">Hipoplasia de Esmalte:<u><?= $dados['hipoplasia_esmalte'] ?></u></label></div>
                        <div><label class="desc">Manchas:<u><?= $dados['manchas'] ?></u></label></div>
                        <div><label class="desc">Induto:<u><?= $dados['induto'] ?></u></label></div>
                        <div><label class="desc">Cálculo/Tártaro:<u><?= $dados['tartaro'] ?></u></label></div>
                        <div><label class="desc">Retração Gengival:<u><?= $dados['retracao_gengival'] ?></u></label></div>
                        <div><label class="desc">Gengivas:<u><?= $dados['gengivas'] ?></u></label></div>
                        <div><label class="desc">Mobilidade Dental:<u><?= $dados['mobilidade_dental'] ?></u></label></div>
                        <div><label class="desc">Oclusão:<u><?= $dados['oclusao'] ?></u></label></div>
                        <div><label class="desc">Anomalidade na Fala:<u><?= $dados['anomalidade_fala'] ?></u></label></div>
                        <div><label class="desc">Higiene Oral:<u><?= $dados['higiene_oral'] ?></u></label></div>
                        <div><label class="desc">Fluxo Salivar:<u><?= $dados['fluxo_salivar'] ?></u></label></div>
                        <div><label class="desc">Outros:<u><?= $dados['outros'] ?></u></label></div>

                        <h5 style="font-size: 22px">3) Sinais Vitais</h5>
                        <div><label class="desc">Pulso:<u><?= $dados['pulso'] ?></u>Normal 60 a 90 bpm</label></div>
                        <div><label class="desc">Pressão Arterial:<u><?= $dados['pressao_arterial'] ?></u>Normal <= 90 Hg/130mm Hg</label></div>
                        <div><label class="desc">Frequência Respiratória:<u><?= $dados['frequencia_respiratoria'] ?></u>Normal 15 a 20 mov/min</label></div>
                        <div><label class="desc">Temperatura:<u><?= $dados['temperatura'] ?></u>Normal 36,8 + 0,2ºC</label></div>

                        <h5 style="font-size: 22px">4) Radiografias</h5>
                        <h5 style="font-size: 18px">Paciente trouxe radiografias?Quais?</h5>
                        <h5 style="font-size: 18px">Trouxe modelos?Quais?</h5>
                        <div><label class="desc">OBSERVAÇÕES (Anotações do C.D):<u><?= $dados['observacoes'] ?></u></label></div>
                    </div>
                    <!-- --------------- -->
                    <!-- /Exame Clínico -->
                    <!-- -------------- -->


                    <br>
                </div>
            </div>
        </fieldset>
</div>