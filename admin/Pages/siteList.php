<?php
$id_site = $metodo->buscarSite();
?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Configurações Gerais do Site</h2>
        </div>
    </div>
</header>
<div class="container">
<form action="" method="post" accept-charset="utf-8" class="form-row" enctype="multipart/form-data">
    <fieldset>
    <div id="exTab3" class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="#site-tab" data-toggle="tab"><i class="fa fa-globe"></i> Site</a></li>
                <li><a href="#empresa-tab" data-toggle="tab"><i class="fa fa-building"></i> Empresa</a></li>
                <li><a href="#midias-sociais-tab" data-toggle="tab"><i class="fa fa-share-alt"></i> Mídias Sociais</a></li>
                <li><a href="#google-tab" data-toggle="tab"><i class="fa fa-google"></i> Google</a></li>
                <li><a href="#email-tab" data-toggle="tab"><i class="fa fa-envelope"></i> E-mail</a></li>
                <li><a href="#midia-tab" data-toggle="tab"><i class="fa fa-picture-o"></i> Mídia</a></li>
                <li><a href="#extra-tab" data-toggle="tab"><i class="fa fa-cog"></i> Extra</a></li>
                <li><a href="#seguranca-tab" data-toggle="tab"><i class="fa fa-lock"></i> Segurança</a></li>
            </ul>

            <div class="tab-content clearfix">
                <!-- ---- -->
                <!-- SITE -->
                <!-- ---- -->
                <div class="tab-pane active" id="site-tab">
                    <h4 class="underline"><i class="fa fa-globe"></i> Site</h4>
                    <div class="control-group">
                        <label for="logotipo" class="control-label">Logotipo</label>
                        <div class="controls">
                           <!-- --><?php
/*                            echo bootstrap_fileupload('logotipo', 'image/*', $this->dir_uploads . $logotipo);
                            */?>
                        </div>
                    </div>
                    <?php
                    if (($id_site["logotipo"]) != null) {
                        ?>
                        <div class="control-group">
                            <label for="logotipo_excluir" class="control-label">Excluir Logotipo</label>
                            <div class="controls">
                                <label for="logotipo_excluir" class="radio inline" title="Marque se deseja excluir o logotipo">
                                    <input type="checkbox" name="logotipo_excluir" value="1" id="logotipo_excluir" class="logotipo_excluir"> Excluir logotipo
                                </label>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="control-group">
                        <label for="desc_site" class="control-label">Título</label>
                        <div class="controls">
                            <input style="color: black" type="text" name="desc_site" value="<?= $id_site["descricao_site"]; ?>" id="desc_site" title="Digite o título do site." class="span6" maxlength="200" placeholder="Site" required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="descricao" class="control-label">Descrição</label>
                        <div class="controls">
                            <input style="color: black" type="text" name="descricao" value="<?=  $id_site["descricao"]; ?>" id="descricao" title="Digite uma breve descrição para o site." class="span6" maxlength="255" size="50" placeholder="Descrição" required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="palavras_chave" class="control-label">Palavras-chave</label>
                        <div class="controls">
                            <textarea style="color: black" type="text" name="palavras_chave" id="palavras_chave" title="Digite as principais palavras-chave do site." class="span6" rows="3" cols="25" placeholder="Palavras-chave" required="true"><?= $id_site["palavra_chave"]; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email" class="control-label">E-mail (Site)</label>
                        <div class="controls">
                            <input type="email" name="email" value="<?= $id_site["email"]; ?>" id="email" title="Digite o e-mail para ser exibido no site." class="span4" maxlength="100" placeholder="E-mail" required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email_contato" class="control-label">E-mail (Contato)</label>
                        <div class="controls">
                            <input type="email" name="email_contato" value="<?=$id_site["email_contato"]?>" id="email_contato" title="Digite o e-mail para ser enviado o contato via site." class="span4" maxlength="100" placeholder="E-mail - Contato">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email_trabalho" class="control-label">E-mail (Trabalhe)</label>
                        <div class="controls">
                            <input type="email" name="email_trabalhe" value="<?=$id_site["email_trabalhe"]?>" id="email_trabalhe" title="Digite o e-mail para ser enviado o currículo (Trabalhe Conosco)." class="span4" maxlength="100" placeholder="E-mail - Trabalhe Conosco">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="url" class="control-label">Site</label>
                        <div class="controls">
                            <input type="url" name="url" value="<?=$id_site["url"]?>" id="url" title="Digite a url do site" class="span4" maxlength="255" placeholder="http://www.empresa.com.br">
                        </div>
                    </div>
                </div>
                <!-- ----- -->
                <!-- /SITE -->
                <!-- ----- -->


                <!-- ------- -->
                <!-- EMPRESA -->
                <!-- ------- -->
                <div class="tab-pane" id="empresa-tab">
                    <h4 class="underline"><i class="fa fa-home"></i> Empresa</h4>
                    <div class="control-group">
                        <label for="logradouro" class="control-label">Logradouro</label>
                        <div class="controls">
                            <input type="text" name="logradouro" value="<?= $id_site["logradouro"];?>" id="logradouro" title="Digite o logradouro." class="span6" maxlength="200" placeholder="Logradouro" required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="numero" class="control-label">Número</label>
                        <div class="controls">
                            <input type="text" name="numero" value="<?= $id_site["numero"];?>" id="numero" title="Digite o número da empresa." class="span2" maxlength="200" placeholder="Número" required="true">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="complemento" class="control-label">Complemento</label>
                        <div class="controls">
                            <input type="text" name="complemento" value="<?= $id_site["complemento"];?>" id="complemento" title="Digite o complemento do endereço." class="span4" maxlength="200" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="bairro" class="control-label">Bairro</label>
                        <div class="controls">
                            <input type="text" name="bairro" value="<?= $id_site["bairro"];?>" id="bairro" title="Digite o bairro." class="span4" maxlength="100" placeholder="Bairro">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="municipio" class="control-label">Município</label>
                        <div class="controls">
                            <input type="text" name="municipio" value="<?= $id_site["municipio"];?>" id="municipio" title="Digite o município." class="span4" maxlength="100" placeholder="Município">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="estado" class="control-label">Estado</label>
                        <div class="controls">
                            <input type="text" name="estado" value="<?= $id_site["estado"];?>" id="estado" title="Digite o estado." class="span4" maxlength="100" placeholder="Estado">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cep" class="control-label">CEP</label>
                        <div class="controls">
                            <input type="tel" name="cep" value="<?= $id_site["cep"];?>" id="cep" title="Digite o CEP." class="span4 mask-cep-br" maxlength="10" placeholder="00000-000">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone</label>
                        <div class="controls">
                            <input type="tel" name="telefone" value="<?= $id_site["telefone"];?>" id="telefone" title="Digite o telefone (Principal)." class="span4 mask-telefone-br" maxlength="15" placeholder="(00) 00000000">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone_s" class="control-label">Telefone (Secundário)</label>
                        <div class="controls">
                            <input type="tel" name="telefone_s" value="<?= $id_site["telefone_s"];?>" id="telefone_s" title="Digite o telefone (Secundário)." class="span4 mask-telefone-br" maxlength="15" placeholder="(00) 00000000">
                        </div>
                    </div>
                </div>
                <!-- ------- -->
                <!-- /EMPRESA -->
                <!-- ------- -->


                <!-- -------------- -->
                <!-- MÍDIAS SOCIAIS -->
                <!-- -------------- -->
                <div class="tab-pane" id="midias-sociais-tab">
                    <h4 class="underline"><i class="fa fa-rss-square"></i> Mídias Sociais</h4>

                    <div class="control-group">
                        <label for="twitter" class="control-label">Twitter</label>
                        <div class="controls">
                            <input type="url" name="twitter" value="<?= $id_site["twitter"];?>" id="twitter" title="Informe o link da sua conta no Twitter." class="span6" maxlength="255">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="facebook" class="control-label">Facebook</label>
                        <div class="controls">
                            <input type="url" name="facebook" value="<?= $id_site["facebook"];?>" id="facebook" title="Informe o link da sua conta no Facebook." class="span6" maxlength="255">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="youtube" class="control-label">Youtube</label>
                        <div class="controls">
                            <input type="url" name="youtube" value="<?= $id_site["youtube"];?>" id="youtube" title="Informe o link da sua conta no Youtube." class="span6" maxlength="255">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="google_plus" class="control-label">LinkedIn</label>
                        <div class="controls">
                            <input type="url" name="google_plus" value="<?= $id_site["linkedin"];?>" id="google_plus" title="Informe o link da sua conta no Google+." class="span6" maxlength="255">
                        </div>
                    </div>
                </div>
                <!-- --------------- -->
                <!-- /MÍDIAS SOCIAIS -->
                <!-- --------------- -->


                <!-- ------ -->
                <!-- GOOGLE -->
                <!-- ------ -->
                <div class="tab-pane" id="google-tab">
                    <h4 class="underline"><i class="fa fa-map-marker"></i> Google Maps</h4>
                    <?php
                    $msg_gm = 'Para descobrir a latitude e a longitude do seu local, siga os seguintes passos:' . br();
                    $msg_gm .= '1 - Ache no Google Maps o ponto desejado.' . br();
                    $msg_gm .= '2 - Clique como botão direito e escolha a opção "O que é isto?".' . br();
                    $msg_gm .= '3 - No campo de busca aparecerá antes da vírgula a latitude e após a vírgula a longitude. Ex.: -26.726753,-53.515949' . br();
                    echo alert($msg_gm, 'info legenda');
                    ?>
                    <div class="control-group">
                        <label for="gm_latitude" class="control-label">Latitude</label>
                        <div class="controls">
                            <input type="text" name="gm_latitude" value="<?= $id_site["gm_latitude"];?>" id="gm_latitude" title="Digite a latitude da localização via Google Maps." class="span4 mask-latitude" maxlength="10" placeholder="-00.000000">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="gm_longitude" class="control-label">Longitude</label>
                        <div class="controls">
                            <input type="text" name="gm_longitude" value="<?= $id_site["gm_longitude"];?>" id="gm_longitude" title="Digite a longitude da localização via Google Maps." class="span4 mask-longitude" maxlength="10" placeholder="-00.000000">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="gm_tipo" class="control-label">Tipo de mapa</label>
                        <div class="controls">
                            <input type="text" name="gm_tipo" value="<?= $id_site["gm_tipo"];?>" id="gm_tipo" title="Selecione o tipo de mapa a ser exibido no site." class="span4" maxlength="10" placeholder="ROADMAP">
                        </div>
                    </div>
                        <h4 class="underline"><i class="fa fa-bar-chart"></i> Google Analytics</h4>
                        <div class="control-group">
                            <label for="ga_conta" class="control-label">Conta</label>
                            <div class="controls">
                                <input type="text" name="ga_conta" value="<?= $id_site["ga_conta"];?>" id="ga_conta" title="Selecione a conta para integração com o Analytics." class="span4" maxlength="10">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="ga_perfil" class="control-label">Perfil</label>
                            <div class="controls">
                                <input type="text" name="ga_perfil" value="<?= $id_site["ga_perfil"];?>" id="ga_perfil" title="Digite o Perfil do Google Analytics." class="span4" maxlength="10" placeholder="00000000">
                            </div>
                        </div>
                </div>
                <!-- ------- -->
                <!-- /GOOGLE -->
                <!-- ------- -->


                <!-- ----- -->
                <!-- EMAIL -->
                <!-- ----- -->

                    <div class="tab-pane" id="email-tab">
                        <h4 class="underline"><i class="fa fa-envelope"></i> E-mail</h4>
                        <div class="control-group">
                            <label for="email_autenticado" class="control-label">Usar autenticação?</label>
                            <div class="controls">
                                <label for="email_autenticados" class="radio inline">
                                    <input type="radio" name="email_autenticado" value="1" id="email_autenticados" class="email_autenticado" <?php echo ($email_autenticado == 1) ? 'checked="checked"' : NULL; ?>> Sim
                                </label>
                                <label for="email_autenticadon" class="radio inline" title="Marque se o envio do e-mail deve utilizar autenticação">
                                    <input type="radio" name="email_autenticado" value="0" id="email_autenticadon" class="email_autenticado" <?php echo ($email_autenticado == 0) ? 'checked="checked"' : NULL; ?>> Não
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_protocolo" class="control-label">Protocolo de envio</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('email_protocolo', $this->config->item('email_protocolo'), isset($email_protocolo) ? $email_protocolo : NULL, 'title="Selecione o protocolo utilizado para envio de e-mail." class="span4 select2"');
                                ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_seguranca" class="control-label">Segurança</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('email_seguranca', $this->config->item('email_seguranca'), isset($email_seguranca) ? $email_seguranca : NULL, 'title="Selecione o protocolo de segurança de envio de e-mail." class="span4 select2"');
                                ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_prioridade" class="control-label">Prioridade do e-mail</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('email_prioridade', $this->config->item('email_prioridade'), isset($email_prioridade) ? $email_prioridade : NULL, 'title="Selecione a prioridade a ser utilizada para envio de e-mail." class="span4 select2"');
                                ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_tipo" class="control-label">Formato do e-mail</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('email_tipo', $this->config->item('email_tipo'), isset($email_tipo) ? $email_tipo : NULL, 'title="Selecione o formato de e-mail a ser utilizado." class="span4 select2"');
                                ?>
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_servidor" class="control-label">E-mail de envio</label>
                            <div class="controls">
                                <input type="email" name="email_servidor" value="<?php echo set_value('email_servidor', isset($email_servidor) ? $email_servidor : NULL); ?>" id="email_servidor" title="Digite o e-mail a ser utilizado para envio." class="span4" maxlength="100" placeholder="email@dominio.com.br" required="true">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_smtp" class="control-label">Servidor SMTP</label>
                            <div class="controls">
                                <input type="text" name="email_smtp" value="<?php echo set_value('email_smtp', isset($email_smtp) ? $email_smtp : NULL); ?>" id="email_smtp" title="Digite o servidor de SMTP a ser utilizado para envio." class="span4" maxlength="100" placeholder="mail.dominio.com.br">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_usuario" class="control-label">Usuário SMTP</label>
                            <div class="controls">
                                <input type="text" name="email_usuario" value="<?php echo set_value('email_usuario', isset($email_usuario) ? $email_usuario : NULL); ?>" id="email_usuario" title="Digite o usuário do servidor SMTP." class="span4" maxlength="100" placeholder="email@dominio.com.br">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_senha" class="control-label">Senha SMTP</label>
                            <div class="controls">
                                <input type="password" name="email_senha" value="<?php echo set_value('email_senha', isset($email_senha) ? base64_decode($email_senha) : NULL); ?>" id="email_senha" title="Digite a senha do servidor SMTP." class="span4" maxlength="75" placeholder="******">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_porta" class="control-label">Porta SMTP</label>
                            <div class="controls">
                                <input type="text" name="email_porta" value="<?php echo set_value('email_porta', isset($email_porta) ? $email_porta : NULL); ?>" id="email_porta" title="Digite a porta do servidor SMTP." class="span2" maxlength="100" placeholder="587">
                            </div>
                        </div>
                        <div class="control-group">
                            <label for="email_tempo" class="control-label">Tempo Limite</label>
                            <div class="controls">
                                <input type="number" name="email_tempo" value="<?php echo set_value('email_tempo', isset($email_tempo) ? $email_tempo : NULL); ?>" id="email_tempo" title="Digite o tempo limite para o servidor SMTP. Em segundos." class="span2" step="100" min="300" placeholder="25">
                            </div>
                        </div>

                        <h4 class="underline"><i class="fa fa-picture-o"></i> Logotipo</h4>
                        <div class="control-group">
                            <label for="email_logotipo" class="control-label">Imagem</label>
                            <div class="controls">
                                <?php
                                echo bootstrap_fileupload('email_logotipo', 'image/*', $this->dir_uploads . $email_logotipo);
                                ?>
                            </div>
                        </div>
                        <?php
                        if (isset($this->site->email_logotipo)) {
                            ?>
                            <div class="control-group">
                                <label for="email_logotipo_excluir" class="control-label">Excluir imagem</label>
                                <div class="controls">
                                    <label for="email_logotipo_excluir" class="radio inline" title="Marque se deseja excluir o logotipo do e-mail">
                                        <input type="checkbox" name="email_logotipo_excluir" value="1" id="email_logotipo_excluir" class="email_logotipo_excluir"> Excluir imagem
                                    </label>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                <!-- ------ -->
                <!-- /EMAIL -->
                <!-- ------ -->


                <!-- ----- -->
                <!-- MÍDIA -->
                <!-- ----- -->
                <div class="tab-pane" id="midia-tab">
                    <h4 class="underline"><i class="fa fa-cogs"></i> Configurações Padrão</h4>
                    <?php if ($this->usuario->id_grupo == 1) { ?>
                        <div class="control-group">
                            <label for="midia_mimetype" class="control-label">Tipos de arquivos</label>
                            <div class="controls">
                                <?php
                                echo form_multiselect('midia_mimetype[]', $mimes_types, isset($midia_mimetype) ? explode('|', $midia_mimetype) : NULL, 'title="Selecione os tipos de arquivos suportados para upload." class="span6 select2"');
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="control-group">
                        <label for="midia_padrao_marcadagua" class="control-label">Aplicar Marca d'Água</label>
                        <div class="controls">
                            <?php
                            echo form_dropdown('midia_padrao_marcadagua', $this->config->item('simnao'), isset($midia_padrao_marcadagua) ? $midia_padrao_marcadagua : NULL, 'title="Opção padrão para aplicar Marca d\'Água." class="span2 select2" data-search="false"');
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="midia_padrao_redimensionar" class="control-label">Redimensionar Imagem</label>
                        <div class="controls">
                            <?php
                            echo form_dropdown('midia_padrao_redimensionar', $this->config->item('simnao'), isset($midia_padrao_redimensionar) ? $midia_padrao_redimensionar : NULL, 'title="Opção padrão para redimensionar imagem." class="span2 select2" data-search="false"');
                            ?>
                        </div>
                    </div>
                    <h4 class="underline"><i class="fa fa-picture-o"></i> Marca d'água</h4>
                    <div class="control-group">
                        <label for="midia_marcadagua" class="control-label">Imagem</label>
                        <div class="controls">
                            <?php echo bootstrap_fileupload('midia_marcadagua', $mime = 'image/*', $this->dir_uploads . $midia_marcadagua); ?>
                            <span class="help-block help-small">A transparência funciona apenas com imagens PNG de 8bits.</span>
                        </div>
                    </div>
                    <?php if (isset($this->site->midia_marcadagua)) { ?>
                        <div class="control-group">
                            <label for="midia_marcadagua_excluir" class="control-label">Excluir Logotipo</label>
                            <div class="controls">
                                <label for="midia_marcadagua_excluir" class="radio inline" title="Marque se deseja excluir a marca d'água">
                                    <input type="checkbox" name="midia_marcadagua_excluir" value="1" id="midia_marcadagua_excluir" class="midia_marcadagua_excluir"> Excluir a marca d'água
                                </label>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="control-group">
                        <label for="midia_marcadagua_posicao" class="control-label">Posição da marca d'água</label>
                        <div class="controls">
                            <table style="margin-left: 0;">
                                <tr>
                                    <td>
                                        <label for="rte" class="radio inline" title="Topo/Esquerda">TE
                                            <input type="radio" title="Topo/Esquerda" name="midia_marcadagua_posicao" value="top-left" id="rte" <?php echo ($midia_marcadagua_posicao == 'top-left') ? 'checked="checked"' : NULL; ?>>
                                        </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label for="rtd" class="radio inline" title="Topo/Direita">TD
                                            <input type="radio" title="Topo/Direita" name="midia_marcadagua_posicao" value="top-right" id="rtd" <?php echo ($midia_marcadagua_posicao == 'top-right') ? 'checked="checked"' : NULL; ?>>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label for="rc" class="radio inline" title="Centro">C
                                            <input type="radio" title="Centro" name="midia_marcadagua_posicao" value="middle-center" id="rc"<?php echo ($midia_marcadagua_posicao == 'middle-center') ? 'checked="checked"' : NULL; ?>>
                                        </label>
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="rre" class="radio inline" title="Rodapé/Esquerda">RE
                                            <input type="radio" title="Rodapé/Esquerda" name="midia_marcadagua_posicao" value="bottom-left" id="rre"<?php echo ($midia_marcadagua_posicao == 'bottom-left') ? 'checked="checked"' : NULL; ?>>
                                        </label>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <label for="rrd" class="radio inline" title="Rodapé/Direita">RD
                                            <input type="radio" title="Rodapé/Direita" name="midia_marcadagua_posicao" value="bottom-right" id="rrd" <?php echo ($midia_marcadagua_posicao == 'bottom-right') ? 'checked="checked"' : NULL; ?>>
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="midia_marcadagua_tamanho" class="control-label">Tamanho relacionado à imagem</label>
                        <div class="controls">
                            <input type="number" name="midia_marcadagua_tamanho" value="<?php echo set_value('midia_marcadagua_tamanho', isset($midia_marcadagua_tamanho) ? $midia_marcadagua_tamanho : NULL); ?>" id="midia_marcadagua_tamanho" title="Digite o tamanho da marca d'água em relação à imagem (porcentagem)." min="10" max="100" class="span2"  placeholder="25">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="midia_marcadagua_transparencia" class="control-label">Transparência da Marca d'água</label>
                        <div class="controls">
                            <input type="number" name="midia_marcadagua_transparencia" value="<?php echo set_value('midia_marcadagua_transparencia', isset($midia_marcadagua_transparencia) ? $midia_marcadagua_transparencia : NULL); ?>" id="midia_marcadagua_transparencia" title="Digite a transparência da marca d'água a ser aplicada na imagem." min="10" max="100" class="span2"  placeholder="40">
                        </div>
                    </div>
                </div>
                <!-- ------ -->
                <!-- /MÍDIA -->
                <!-- ------ -->


                <!-- ----- -->
                <!-- EXTRA -->
                <!-- ----- -->
                <div class="tab-pane" id="extra-tab">
                    <h4 class="underline"><i class="fa fa-sitemap"></i> Sitemap</h4>
                    <div class="control-group">
                        <label for="sitemap" class="control-label">Status</label>
                        <div class="controls texto">
                            <?php
                            echo ($this->site->sitemap == 1) ? label(icon('fa fa-exclamation') . ' Gerar Sitemap', 'warning') : label(icon('fa fa-check') . ' Atualizado', 'success');
                            ?>
                        </div>
                    </div>
                    <?php if ($this->usuario->id_grupo == 1) { ?>
                        <h4 class="underline"><i class="fa fa-user"></i> Usuário</h4>
                        <div class="control-group">
                            <label for="usuario_ativar" class="control-label">E-mail de Ativação</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('usuario_ativar', $this->config->item('simnao'), isset($usuario_ativar) ? $usuario_ativar : NULL, 'title="Selecione SIM caso deseja que o usuário ative o seu cadastro via e-mail." class="span2 select2" data-search="false"');
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                    <h4 class="underline"><i class="fa fa-power-off"></i> On-line</h4>
                    <div class="control-group">
                        <label for="online" class="control-label">On-line</label>
                        <div class="controls">
                            <?php
                            echo form_dropdown('online', $this->config->item('simnao'), isset($online) ? $online : NULL, 'title="Selecione se o site está on-line." class="span2 select2" data-search="false"');
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="msg_off" class="control-label">Mensagem Principal</label>
                        <div class="controls">
                            <textarea type="text" name="msg_off" id="msg_off" title="Digite a mensagem principal a ser exibida quando o site está off-line." class="span6" rows="3" cols="25" placeholder="Site em manutenção"><?php echo set_value('msg_off', isset($msg_off) ? $msg_off : NULL); ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone_off" class="control-label">Telefone</label>
                        <div class="controls">
                            <input type="tel" name="telefone_off" value="<?php echo set_value('telefone_off', isset($telefone_off) ? $telefone_off : NULL); ?>" id="telefone_off" title="Digite o telefone a ser exibido quando o site está off-line." class="span4 mask-telefone-br" maxlength="15" placeholder="(00) 00000000">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email_off" class="control-label">E-mail</label>
                        <div class="controls">
                            <input type="email" name="email_off" value="<?php echo set_value('email_off', isset($email_off) ? $email_off : NULL); ?>" id="email_off" title="Digite o e-mail a ser exibido quando o site está off-line." class="span4" maxlength="100" placeholder="E-mail">
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="texto_off" class="control-label">Texto complementar</label>
                        <div class="controls">
                            <textarea name="texto_off" id="texto_off" class="wysiwyg" title="Digite o texto complementar a ser exibido quando o site está off-line."><?php echo isset($texto_off) ? $texto_off : NULL ?></textarea>
                        </div>
                    </div>

                    <h4 class="underline"><i class="icon-db-dbnews"></i> DBnews</h4>
                    <div class="control-group">
                        <label for="dbnews_status" class="control-label">Status</label>
                        <div class="controls">
                            <?php
                            echo form_dropdown('dbnews_status', $this->config->item('ativo_inativo'), isset($dbnews_status) ? $dbnews_status : NULL, 'title="Ativar o cadastro no e-mail marketing ?" class="span4 select2" data-search="false"');
                            ?>
                        </div>
                    </div>
                    <?php if ($this->usuario->id_grupo == 1) { ?>
                        <div class="control-group">
                            <label for="dbnews_action" class="control-label">URL</label>
                            <div class="controls">
                                <input type="url" name="dbnews_action" value="<?php echo set_value('dbnews_action', isset($dbnews_action) ? $dbnews_action : NULL); ?>" id="dbnews_action" title="Informe a URL (action) para envio do formulário." class="span8" maxlength="255">
                            </div>
                        </div>
                    <?php } ?>

                    <h4 class="underline"><i class="fa fa-comments"></i> Atendimento Online</h4>
                    <div class="control-group">
                        <label for="chat_status" class="control-label">Status</label>
                        <div class="controls">
                            <?php
                            echo form_dropdown('chat_status', $this->config->item('ativo_inativo'), isset($chat_status) ? $chat_status : NULL, 'title="Ativar atendimento online ?" class="span4 select2" data-search="false"');
                            ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="chat_embed" class="control-label">Código Embed</label>
                        <div class="controls">
                            <textarea type="text" name="chat_embed" id="chat_embed" title="Cole aqui o código fornecido." class="span6" rows="6" placeholder="Código Embed"><?php echo set_value('chat_embed', isset($chat_embed) ? $chat_embed : NULL); ?></textarea>
                        </div>
                    </div>
                </div>
                <!-- ------ -->
                <!-- /EXTRA -->
                <!-- ------ -->


                <!-- --------- -->
                <!-- SEGURANÇA -->
                <!-- --------- -->
                <div class="tab-pane" id="seguranca-tab">
                    <?php if ($this->usuario->id_grupo == 1) { ?>
                        <h4 class="underline"><i class="fa fa-lock"></i> Webservice (REST)</h4>
                        <div class="control-group">
                            <label for="dbl_token" class="control-label">Token DBlinks</label>
                            <div class="controls">
                                <input type="text" name="dbl_token" value="<?php echo set_value('dbl_token', isset($dbl_token) ? $dbl_token : NULL); ?>" id="dbl_token" title="Digite o Token DBlinks para acesso a Webservice." class="span6" maxlength="50" placeholder="45851369-seXUC5Et4whQ51AS2MsxqyoTFfRSyIde3DxIlaLco">
                            </div>
                        </div>
                    <?php } ?>
                    <h4 class="underline"><i class="fa fa-globe"></i> Site</h4>
                    <?php
                    echo alert('Seu IP atual é: ' . b($this->input->ip_address()), 'info', FALSE, FALSE);
                    ?>
                    <div class="control-group">
                        <label for="site_ip_whitelist" class="control-label">IPs Liberados</label>
                        <div class="controls">
                            <textarea type="text" name="site_ip_whitelist" id="site_ip_whitelist" title="Digite os IPs que estão liberados para acessar o site, separe-os por , (vírgula)." class="span4" rows="3" cols="25" placeholder="0.0.0.0"><?php echo set_value('site_ip_whitelist', isset($site_ip_whitelist) ? $site_ip_whitelist : NULL); ?></textarea>
                            <span class="help-block help-small">Estes IPs poderão acessar o site. Somente quando o site estiver off-line.</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="site_ip_blacklist" class="control-label">IPs Bloqueados</label>
                        <div class="controls">
                            <textarea type="text" name="site_ip_blacklist" id="site_ip_blacklist" title="Digite os IPs que estão bloqueados para acessar o site, separe-os por , (vírgula)." class="span4" rows="3" cols="25" placeholder="0.0.0.0"><?php echo set_value('site_ip_blacklist', isset($site_ip_blacklist) ? $site_ip_blacklist : NULL); ?></textarea>
                            <span class="help-block help-small">Estes IPs <b>NÃO</b> poderão acessar o site. Mesmo quando o site estiver on-line.</span>
                        </div>
                    </div>
                    <h4 class="underline"><i class="fa fa-shield"></i> Administração</h4>
                    <div class="control-group">
                        <label for="admin_ip_whitelist" class="control-label">IPs Liberados</label>
                        <div class="controls">
                            <textarea type="text" name="admin_ip_whitelist" id="admin_ip_whitelist" title="Digite os IPs que estão liberados para acessar a administração do site, separe-os por , (vírgula)." class="span4" rows="3" cols="25" placeholder="0.0.0.0"><?php echo set_value('admin_ip_whitelist', isset($admin_ip_whitelist) ? $admin_ip_whitelist : NULL); ?></textarea>
                            <span class="help-block help-small">Estes IPs poderão acessar a administração do site.</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="admin_ip_blacklist" class="control-label">IPs Bloqueados</label>
                        <div class="controls">
                            <textarea type="text" name="admin_ip_blacklist" id="admin_ip_blacklist" title="Digite os IPs que NÃO estão liberados para acessar a administração do site, separe-os por , (vírgula)." class="span4" rows="3" cols="25" placeholder="0.0.0.0"><?php echo set_value('admin_ip_blacklist', isset($admin_ip_blacklist) ? $admin_ip_blacklist : NULL); ?></textarea>
                            <span class="help-block help-small">Estes IPs <b>NÃO</b> poderão acessar a administração do site.</span>
                        </div>
                    </div>
                </div>
                <!-- ---------- -->
                <!-- /SEGURANÇA -->
                <!-- ---------- -->


                <!-- ------- -->
                <!-- DBLINKS -->
                <!-- ------- -->
                <?php if ($this->usuario->id_grupo == 1) { ?>
                    <div class="tab-pane" id="dblinks-tab">
                        <div class="control-group">
                            <label for="dbl_solucao" class="control-label">Solução</label>
                            <div class="controls">
                                <?php
                                echo form_dropdown('dbl_solucao', $this->config->item('dbl_solucao'), isset($dbl_solucao) ? $dbl_solucao : NULL, 'title="Escolha qual é a solução oferecida." class="span4 select2"');
                                ?>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="dbl_email_suporte" class="control-label">E-mail (Suporte)</label>
                            <div class="controls">
                                <input type="email" name="dbl_email_suporte" value="<?php echo set_value('dbl_email_suporte', isset($dbl_email_suporte) ? $dbl_email_suporte : NULL); ?>" id="dbl_email_suporte" title="Digite o e-mail para onde os pedidos de suporte serão enviados." class="span4" maxlength="100" placeholder="E-mail" required="true">
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- -------- -->
                <!-- /DBLINKS -->
                <!-- -------- -->
            </div>

            <div class="form-actions">
                <button name="button" type="submit" id="enviar" class="btn btn-primary" value="alterar"><i class="fa fa-edit"></i> Alterar</button>
                <button name="button" type="reset" id="reset" class="btn" value="resetar"><i class="fa fa-undo"></i> Desfazer</button>
            </div>
    </div>
    </fieldset>
</form>
</div>
