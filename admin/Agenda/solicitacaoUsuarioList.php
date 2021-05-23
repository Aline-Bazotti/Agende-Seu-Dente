<?php
$solicitacoes = $metodo->buscarSolicitacaoUsuario();

?>
    <div class="row">
            <?php
            if ($solicitacoes) {
                foreach($solicitacoes as $solicitacao):?>
                    <div class="col-sm-6">
                        <div class="well">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Nome</label>
                                    <p><?= $solicitacao['nome']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <label>CPF/CNPJ</label>
                                    <p><?= $solicitacao['cpf_cnpj']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Data de Nascimento</label>
                                    <p><?= $solicitacao['data_nascimento']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Telefone</label>
                                    <p><?= $solicitacao['telefone']; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Queixa Principal</label>
                                    <p><?= $solicitacao['descricao']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <label for="">Sente dor?</label>
                                    <?php
                                    if ($solicitacao['sente_dor']==0){ ?>
                                        <p>Não</p>
                                    <?php } else { ?>
                                        <p>Sim</p><?php
                                    } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Quanto tempo com os sintomas?</label>
                                    <p><?= $solicitacao['quanto_tempo']; ?></p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Gestante? Se sim, quantas semanas?</label>
                                    <?php
                                    if ($solicitacao['gravidez']==0){ ?>
                                        <p>Não</p>
                                    <?php } else { ?>
                                        <p>Sim, <?= $solicitacao['gravida_sim_semanas'] ?></p><?php
                                    } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="">Aceita marcar horário pelo WhatsApp?</label>
                                    <?php
                                    if ($solicitacao['aceita_whatsapp']==0){ ?>
                                        <p>Não</p>
                                    <?php } else { ?>
                                        <p>Sim</p><?php
                                    } ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <form action="../../admin/Agenda/marcarOuApagarHorario.php" method="post">
                                        <input id="marcar" name="marcar" hidden="hidden" value="<?= $solicitacao['id']; ?>">
                                        <button class="btn btn-sm btn-success" type="submit" ><i class="fa fa-check"></i>Marcado</button>
                                    </form>
                                </div>
                                <div class="col-sm-6">
                                    <form action="../../admin/Agenda/marcarOuApagarHorario.php" method="post">
                                        <input id="apagar" name="apagar" hidden="hidden" value="<?= $solicitacao['id']; ?>">
                                        <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> Apagar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="6">Nenhuma solicitação nova.</td>
                    </tr>
                <?php } ?>
            </div>
    </div>

<!--
.col-md-6>label+p
-->

