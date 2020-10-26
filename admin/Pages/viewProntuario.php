<?php

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$prontuario = $metodo->buscarProntuarioPorId($id);
$historicos = $metodo->buscarProntuarioHistorico($prontuario['id']);
$paciente = $metodo->buscarPacientePorId($prontuario['id_paciente']);
$enderecos = $metodo->buscarEnderecoPorIdPaciente($prontuario['id_paciente']);
?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Prontuário Paciente - <?= $paciente['nome']; ?></h2>
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
                        <div><label class="desc">Nome:<u><?= $paciente['nome'] ?></u></label></div>
                        <div><label class="desc">CPF:<u><?= $paciente['cpf_cnpj'] ?></u></label></div>
                        <div><label class="desc">RG:<u><?= $paciente['rg_ie'] ?></u></label></div>
                        <div><label class="desc">Data de Nascimento:<u><?= $paciente['data_nascimento'] ?></u></label></div>
                        <div><label class="desc">Telefone:<u><?= $paciente['telefone'] ?></u></label></div>
                        <div><label class="desc">Telefone Secundário:<u><?= $paciente['telefone_s'] ?></u></label></div>
                        <div><label class="desc">Naturalidade:<u><?= $paciente['naturalidade'] ?></u></label></div>
                        <div><label class="desc">Nacionalidade:<u><?= $paciente['nacionalidade'] ?></u></label></div>
                        <div><label class="desc">Estado Civil:<u><?= $paciente['estado_civil'] ?></u></label></div>
                        <div><label class="desc">Sexo:<u><?= $paciente['sexo'] ?></u></label></div>
                        <div><label class="desc">Nome Cônjuge:<u><?= $paciente['nome_conjuge'] ?></u></label></div>

                        <h5 style="font-size: 22px">Filiação</h5>
                        <div><label class="desc">Nome Pai:<u><?= $paciente['nome_pai'] ?></u></label></div>
                        <div><label class="desc">Nome Mãe:<u><?= $paciente['nome_mae'] ?></u></label></div>
                        <div><label class="desc">Responsável Legal:<u><?= $paciente['nome_responsavel'] ?></u></label></div>
                        <div><label class="desc">Indicação Dr(a):<u><?= $paciente['indicacao_dr'] ?></u></label></div>

                        <h5 style="font-size: 22px">Dados Profissionais</h5>
                        <div><label class="desc">Nome da empresa que trabalha:<u><?= $paciente['nome_empresa'] ?></u></label></div>
                        <div><label class="desc">Telefone da Empresa:<u><?= $paciente['telefone_empresa'] ?></u></label></div>
                        <div><label class="desc">Profissão:<u><?= $paciente['profissao'] ?></u></label></div>
                        <div><label class="desc">Horário de Trabalho:<u><?= $paciente['horario_trabalho'] ?></u></label></div>
                        <div><label class="desc">Cargo:<u><?= $paciente['cargo'] ?></u></label></div>
                        <div><label class="desc">Email:<u><?= $paciente['email'] ?></u></label></div>




                        <h5 style="font-size: 22px">Endereços</h5>
                        <?php if ($enderecos){?>
                            <?php foreach($enderecos as $endereco):
                                $estado_endereco = $metodo->buscarEstadoIdEndereco($endereco['uf_estado']);
                                $municipio_endereco = $metodo->buscarMunicipioIdEndereco($endereco['id_municipio']) ?>
                                <div><label class="desc">Identificação:<u><?= $endereco['descricao']; ?></u></label></div>
                                <div><label class="desc">Estado:<u><?= $estado_endereco['descricao']; ?></u></label></div>
                                <div><label class="desc">Município:<u><?= $municipio_endereco['descricao']; ?></u></label></div>
                                <div><label class="desc">CEP:<u><?= $endereco['cep']; ?></u></label></div>
                                <div><label class="desc">Bairro:<u><?= $endereco['bairro']; ?></u></label></div>
                                <div><label class="desc">Logradouro:<u><?= $endereco['logradouro']; ?></u></label></div>
                                <div><label class="desc">Número:<u><?= $endereco['numero']; ?></u></label></div>
                                <div><label class="desc">Complemento:<u><?= $endereco['complemento']; ?></u></label></div>
                                <br>
                                <?php endforeach; ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="6">Nenhum endereço cadastrado.</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- ------------------ -->
                    <!-- /Dados do Paciente -->
                    <!-- ------------------ -->


                    <!-- -------------------------- -->
                    <!-- Relatório de Procedimentos -->
                    <!-- -------------------------- -->
                    <div class="tab-pane" id="historico-tab">
                        <h4 style="font-size: 26px">Relatório de Procedimentos</h4>
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
                                            <a class="btn btn-sm btn-danger" href="../admin/Prontuario/Controller/delHistorico.php?historicoId=<?= $historico['id']; ?>&prontuarioId=<?= $prontuario['id'];?>">
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
                        <div><label class="desc">Erupções:<u><?= $prontuario['erupcoes'] ?></u></label></div>
                        <div><label class="desc">Nódulos:<u><?= $prontuario['nodulos'] ?></u></label></div>
                        <div><label class="desc">Musculatura:<u><?= $prontuario['musculatura'] ?></u></label></div>
                        <div><label class="desc">Ganglionar:<u><?= $prontuario['ganglionar'] ?></u></label></div>
                        <div><label class="desc">Cicatrizes:<u><?= $prontuario['cicatrizes'] ?></u></label></div>
                        <div><label class="desc">Assimetria Face e Pescoço:<u><?= $prontuario['assimetria_face_pescoco'] ?></u></label></div>
                        <div><label class="desc">Exoftalmia:<u><?= $prontuario['exoftalmia'] ?></u></label></div>
                        <div><label class="desc">Glândulas Salivares:<u><?= $prontuario['glandulas_salivares'] ?><u/></label></div>

                        <h5 style="font-size: 22px">2) Inspeção Buco-Dentária (intra-oral)</h5>
                        <div><label class="desc">Lábios:<u><?= $prontuario['labios'] ?></u></label></div>
                        <div><label class="desc">Bochechas:<u><?= $prontuario['bochechas'] ?></u></label></div>
                        <div><label class="desc">Espaço Retromolar:<u><?= $prontuario['espaco_retromolar'] ?></u></label></div>
                        <div><label class="desc">Língua:<u><?= $prontuario['lingua'] ?></u></label></div>
                        <div><label class="desc">Base da Língua:<u><?= $prontuario['base_lingua'] ?></u></label></div>
                        <div><label class="desc">Assoalho Bucal:<u><?= $prontuario['assoalho_bucal'] ?></u></label></div>
                        <div><label class="desc">Palato:<u><?= $prontuario['palato'] ?></u></label></div>
                        <div><label class="desc">Amígdalas:<u><?= $prontuario['amigdalas'] ?></u></label></div>
                        <div><label class="desc">Limite Oro-faríngeo:<u><?= $prontuario['limite_orofaringeo'] ?></u></label></div>
                        <div><label class="desc">Dentes Ausentes:<u><?= $prontuario['dentes_ausentes'] ?></u></label></div>
                        <div><label class="desc">Dentes Supranumerários:<u><?= $prontuario['dentes_supranumerarios'] ?></u></label></div>
                        <div><label class="desc">Dentes Retidos:<u><?= $prontuario['dentes_retidos'] ?></u></label></div>
                        <div><label class="desc">Diastema:<u><?= $prontuario['diastema'] ?></u></label></div>
                        <div><label class="desc">Freios/Bridas:<u><?= $prontuario['freios'] ?></u></label></div>
                        <div><label class="desc">Atrição/Abrasão/Erosão:<u><?= $prontuario['erosao'] ?></u></label></div>
                        <div><label class="desc">Hipoplasia de Esmalte:<u><?= $prontuario['hipoplasia_esmalte'] ?></u></label></div>
                        <div><label class="desc">Manchas:<u><?= $prontuario['manchas'] ?></u></label></div>
                        <div><label class="desc">Induto:<u><?= $prontuario['induto'] ?></u></label></div>
                        <div><label class="desc">Cálculo/Tártaro:<u><?= $prontuario['tartaro'] ?></u></label></div>
                        <div><label class="desc">Retração Gengival:<u><?= $prontuario['retracao_gengival'] ?></u></label></div>
                        <div><label class="desc">Gengivas:<u><?= $prontuario['gengivas'] ?></u></label></div>
                        <div><label class="desc">Mobilidade Dental:<u><?= $prontuario['mobilidade_dental'] ?></u></label></div>
                        <div><label class="desc">Oclusão:<u><?= $prontuario['oclusao'] ?></u></label></div>
                        <div><label class="desc">Anomalidade na Fala:<u><?= $prontuario['anomalidade_fala'] ?></u></label></div>
                        <div><label class="desc">Higiene Oral:<u><?= $prontuario['higiene_oral'] ?></u></label></div>
                        <div><label class="desc">Fluxo Salivar:<u><?= $prontuario['fluxo_salivar'] ?></u></label></div>
                        <div><label class="desc">Outros:<u><?= $prontuario['outros'] ?></u></label></div>

                        <h5 style="font-size: 22px">3) Sinais Vitais</h5>
                        <div><label class="desc">Pulso:<u><?= $prontuario['pulso'] ?></u> - Normal 60 a 90 bpm</label></div>
                        <div><label class="desc">Pressão Arterial:<u><?= $prontuario['pressao_arterial'] ?></u> - Normal <= 90 Hg/130mm Hg</label></div>
                        <div><label class="desc">Frequência Respiratória:<u><?= $prontuario['frequencia_respiratoria'] ?></u> - Normal 15 a 20 mov/min</label></div>
                        <div><label class="desc">Temperatura:<u><?= $prontuario['temperatura'] ?></u> - Normal 36,8 + 0,2ºC</label></div>

                        <h5 style="font-size: 22px">4) Radiografias</h5>
                        <h5 style="font-size: 18px">Paciente trouxe radiografias?Quais?</h5>
                        <h5 style="font-size: 18px">Trouxe modelos?Quais?</h5>
                        <div><label class="desc">OBSERVAÇÕES (Anotações do C.D):<u><?= $prontuario['observacoes'] ?></u></label></div>
                    </div>
                    <!-- --------------- -->
                    <!-- /Exame Clínico -->
                    <!-- -------------- -->


                    <br>
                </div>
            </div>
        </fieldset>
</div>