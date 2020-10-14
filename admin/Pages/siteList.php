<?php
$site = $metodo->buscarSite();
$estados = $metodo->buscarEstado();
$municipios =$metodo->buscarMunicipio();
?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Configurações Gerais do Site</h2>
        </div>
    </div>
</header>
<div class="container">
<form action="../admin/Site/Controller/editSite.php" method="post" accept-charset="utf-8" class="form-row" enctype="multipart/form-data">
    <fieldset>
    <div id="exTab3" class="container">
            <ul class="nav nav-pills">
                <li><a href="#site-tab" data-toggle="tab"><i class="fa fa-globe"></i> Site</a></li>
                <li><a href="#empresa-tab" data-toggle="tab"><i class="fa fa-building"></i> Empresa</a></li>
                <li><a href="#midias-sociais-tab" data-toggle="tab"><i class="fa fa-share-alt"></i> Mídias Sociais</a></li>
                <li><a href="#google-tab" data-toggle="tab"><i class="fa fa-google"></i> Google</a></li>
                <li><a href="#email-tab" data-toggle="tab"><i class="fa fa-envelope"></i> E-mail</a></li>
                <li><a href="#midia-tab" data-toggle="tab"><i class="fa fa-picture-o"></i> Mídia</a></li>
                <li><a href="#extra-tab" data-toggle="tab"><i class="fa fa-cog"></i> Extra</a></li>
            </ul>

            <div class="tab-content clearfix">

                <!-- ---- -->
                <!-- SITE -->
                <!-- ---- -->
                <div class="tab-pane active" id="site-tab">
                    <h4 class="underline"><i class="fa fa-globe"></i> Site</h4>
                    <div>
                        <label class="desc" id="descricao_site" for="descricao_site">Título*</label>
                        <div style="color: black" >
                            <input id="descricao_site" name="descricao_site" type="text"  value="<?= $site['descricao_site'] ?>" size="20" tabindex="1" required="required">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="descricao" for="descricao">Descrição</label>
                        <div style="color: black" >
                            <input id="descricao" name="descricao" type="text" value="<?= $site['descricao'] ?>" size="100" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="logotipo" for="logotipo">Logotipo</label>
                        <div>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000" />
                            <input id="logotipo" name="logotipo" type="file" value="<?= $site['logotipo'] ?>" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="palavra_chave" for="palavra_chave">Palavras-chave</label>
                        <div style="color: black" >
                            <input id="palavra_chave" name="palavra_chave" type="text" value="<?= $site['palavra_chave'] ?>" size="20" tabindex="1">
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
                    <h4 class="underline"><i class="fa fa-home"></i>Empresa</h4>
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
                        <div style="color: black">
                            <select id="municipio" name="municipio" class="field select medium" tabindex="11" >
                                <?php foreach($municipios as $municipio): ?>
                                    <option value="<?= $municipio['id']; ?>"><?= $municipio['descricao']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="bairro" for="bairro">Bairro</label>
                        <div style="color: black">
                            <input id="bairro" name="bairro" type="text" value="<?= $site['bairro'] ?>" size="30" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="logradouro" for="logradouro">Logradouro</label>
                        <div style="color: black">
                            <input id="logradouro" name="logradouro" type="text" value="<?= $site['logradouro'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="numero" for="numero">Número</label>
                        <div style="color: black">
                            <input id="numero" name="numero" type="number" value="<?= $site['numero'] ?>" size="10" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="complemento" for="complemento">Complemento</label>
                        <div style="color: black">
                            <input id="complemento" name="complemento" type="text" value="<?= $site['complemento'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <h4 class="underline"><i class="fa fa-envelope"></i>Contatos</h4>
                    <div>
                        <label class="desc" id="email" for="email">E-mail Geral</label>
                        <div style="color: black">
                            <input id="email" name="email" type="email" value="<?= $site['email'] ?>" size="50" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_contato" for="email_contato">E-mail Fale Conosco</label>
                        <div style="color: black">
                            <input id="email_contato" name="email_contato" type="email" value="<?= $site['email_contato'] ?>" size="50" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_trabalhe" for="email_trabalhe">E-mail Trabalhe Conosco</label>
                        <div style="color: black">
                            <input id="email_trabalhe" name="email_trabalhe" type="email" value="<?= $site['email_trabalhe'] ?>" size="50" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="telefone" for="telefone">Telefone Geral</label>
                        <div style="color: black">
                            <input id="telefone" name="telefone" type="tel" value="<?= $site['telefone'] ?>" size="20" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="telefone_s" for="telefone">Telefone Secundário</label>
                        <div style="color: black">
                            <input id="telefone_s" name="telefone_s" type="tel" value="<?= $site['telefone_s'] ?>" size="20" tabindex="1">
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
                    <h4 class="underline"><i class="fa fa-home"></i>Mídias Sociais</h4>
                    <div>
                        <label class="desc" id="twitter" for="twitter">Twitter</label>
                        <div style="color: black">
                            <input id="twitter" name="twitter" type="url" value="<?= $site['twitter'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="facebook" for="facebook">Facebook</label>
                        <div style="color: black">
                            <input id="facebook" name="facebook" type="url" value="<?= $site['facebook'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="youtube" for="youtube">Youtube</label>
                        <div style="color: black">
                            <input id="youtube" name="youtube" type="url" value="<?= $site['youtube'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="linkedin" for="linkedin">LinkedIn</label>
                        <div style="color: black">
                            <input id="linkedin" name="linkedin" type="url" value="<?= $site['linkedin'] ?>" size="60" tabindex="1">
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
                    <h4 class="underline"><i class="fa fa-home"></i>Google Maps</h4>
                    <div>
                        <label class="desc" id="gm_latitude" for="gm_latitude">Latitude</label>
                        <div style="color: black">
                            <input id="gm_latitude" name="gm_latitude" type="number" value="<?= $site['gm_latitude'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="gm_longitude" for="gm_longitude">Longitude</label>
                        <div style="color: black">
                            <input id="gm_longitude" name="gm_longitude" type="number" value="<?= $site['gm_longitude'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="gm_tipo" for="gm_tipo">Tipo de Mapa</label>
                        <div style="color: black">
                            <input id="gm_tipo" name="gm_tipo" type="text" value="<?= $site['gm_tipo'] ?>" size="10" tabindex="1">
                        </div>
                    </div>
                    <h4 class="underline"><i class="fa fa-home"></i>Google Analytics</h4>
                    <div>
                        <label class="desc" id="ga_email" for="ga_email">E-mail da conta</label>
                        <div style="color: black">
                            <input id="ga_email" name="ga_email" type="email" value="<?= $site['ga_email'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="ga_senha" for="ga_senha">Senha da conta</label>
                        <div style="color: black">
                            <input id="ga_senha" name="ga_senha" type="password" value="<?= $site['ga_senha'] ?>" size="60" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="ga_perfil" for="ga_perfil">Cód de acompanhamento</label>
                        <div style="color: black">
                            <input id="ga_perfil" name="ga_perfil" type="text" value="<?= $site['ga_perfil'] ?>" size="20" tabindex="1">
                        </div>
                    </div>
                </div>
                <!-- ------- -->
                <!-- /GOOGLE -->
                <!-- ------- -->

                <!-- ------ -->
                <!-- E-MAIL -->
                <!-- ------ -->
                <div class="tab-pane" id="email-tab">
                    <h4 class="underline"><i class="fa fa-home"></i>Envio de e-mails automático</h4>
                    <div>
                        <label class="desc" id="email_tipo" for="email_tipo">Tipo</label>
                        <div style="color: black">
                            <input id="email_tipo" name="email_tipo" type="text" value="<?= $site['email_tipo'] ?>" size="10" tabindex="1" placeholder="HTML">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_seguranca" for="email_seguranca">Criptografia</label>
                        <div style="color: black">
                            <input id="email_seguranca" name="email_seguranca" type="text" value="<?= $site['email_seguranca'] ?>" size="10" tabindex="1" placeholder="TLS">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_servidor" for="email_servidor">E-mail</label>
                        <div style="color: black">
                            <input id="email_servidor" name="email_servidor" type="email" value="<?= $site['email_servidor'] ?>" size="50" tabindex="1" placeholder="dominio@dominio.com.br">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_protocolo" for="email_protocolo">Protocolo</label>
                        <div style="color: black">
                            <input id="email_protocolo" name="email_protocolo" type="text" value="<?= $site['email_protocolo'] ?>" size="10" tabindex="1" placeholder="smtp">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_smtp" for="email_smtp">Host</label>
                        <div style="color: black">
                            <input id="email_smtp" name="email_smtp" type="url" value="<?= $site['email_smtp'] ?>" size="50" tabindex="1" placeholder="mail.dominio.com.br">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_usuario" for="email_usuario">Usuario</label>
                        <div style="color: black">
                            <input id="email_usuario" name="email_usuario" type="email" value="<?= $site['email_usuario'] ?>" size="50" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_senha" for="email_senha">Senha</label>
                        <div style="color: black">
                            <input id="email_senha" name="email_senha" type="password" value="<?= $site['email_senha'] ?>" size="50" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="email_porta" for="email_porta">Porta</label>
                        <div style="color: black">
                            <input id="email_porta" name="email_porta" type="number" value="<?= $site['email_porta'] ?>" size="10" tabindex="1" placeholder="587">
                        </div>
                    </div>
                </div>
                <!-- ------- -->
                <!-- /E-MAIL -->
                <!-- ------- -->

                <!-- ----- -->
                <!-- MÍDIA -->
                <!-- ----- -->
                <div class="tab-pane" id="midia-tab">
                    <h4 class="underline"><i class="fa fa-home"></i>Mimetype aceitos</h4>
                    <div>
                        <label class="desc" id="midia_mimetype" for="midia_mimetype">Mimetype</label>
                        <div style="color: black">
                            <input id="midia_mimetype" name="midia_mimetype" type="text" value="<?= $site['midia_mimetype'] ?>" size="80" tabindex="1">
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
                    <h4 class="underline"><i class="fa fa-home"></i>Extra</h4>
                    <div>
                        <label class="desc" id="online" for="online">Online</label>
                        <div style="color: black">
                            <select id="online" name="online" class="field select medium" tabindex="11" required="required">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="mensagem_off" for="mensagem_off">Mensagem para site Off-line</label>
                        <div style="color: black">
                            <input id="mensagem_off" name="mensagem_off" type="text" value="<?= $site['mensagem_off'] ?>" size="100" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="whitelist" for="whitelist">Whitelist</label>
                        <div style="color: black">
                            <input id="whitelist" name="whitelist" type="text" value="<?= $site['whitelist'] ?>" size="80" tabindex="1">
                        </div>
                    </div>
                    <div>
                        <label class="desc" id="blacklist" for="blacklist">Blacklist</label>
                        <div style="color: black">
                            <input id="blacklist" name="blacklist" type="text" value="<?= $site['blacklist'] ?>" size="80" tabindex="1">
                        </div>
                    </div>
                </div>
                <!-- ------ -->
                <!-- /EXTRA -->
                <!-- ------ -->
                <br>
            </div>

            <div class="form-actions">
                <button name="button" type="submit" id="enviar" class="btn btn-success" value="alterar"><i class="fa fa-check"></i>Salvar</button>
                <button name="button" type="reset" id="reset" class="btn" value="resetar"><i class="fa fa-undo"></i> Desfazer</button>
            </div>
    </div>
    </fieldset>
</form>
</div>
