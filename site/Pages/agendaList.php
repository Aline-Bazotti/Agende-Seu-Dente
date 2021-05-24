<div class="anamnese">
    <br>
    <h3>Agende seu horário</h3>
    <div class="question-group">
        <div class="header">
            <h4>Responda o formulário para solicitar agendamento para consulta!</h4>
            <h5>Entraremos em contato para confirmar data e hora.</h5>
        </div><br/>
        <?php if(isset($_GET['success'])) {
            $success = $_GET['success'];
            if ($success=='true'){?>
                <div class="alert alert-success">Sua mensagem foi enviada com sucesso!</div>
            <?php }elseif($success==='false'){?>
                <div class="alert alert-danger">Sua mensagem não foi enviada, mande um WhatsApp para (49) 99982-6476!</div>
        <?php } }?>
        <div class="questions">
            <form action="../site/Agenda/addEvento.php" method="post">
                <div class="form-group col-md-6">
                    <label for="anamnese">Nome*</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required="required">
                </div>
                <div class="form-row col-md-8">
                    <div class="form-group col-md-5">
                        <label for="anamnese">CPF/CNPJ</label>
                        <input type="text" class="form-control" id="cpf" name="cpf_cpnj">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="anamnese" >Data de Nascimento*</label>
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required="required">
                    </div>
                </div>
                <div class="form-row col-md-10">
                    <div class="form-group col-md-3">
                        <label for="anamnese">Telefone para contato*</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" required="required">
                    </div>
                    <div>
                        <label for="anamnese">Aceita marcar horário pelo WhatsApp?</label>
                        <div class="form-group col-md-6">
                            <select id="aceita_whatsapp" name="aceita_whatsapp" class="form-control">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="anamnese" >Sente dor?</label>
                    <div>
                        <select id="dor" name="dor" class="form-control">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="anamnese">Descreva brevemente seus sintomas*</label>
                    <div>
                        <textarea type="text" class="form-control" id="desc" name="desc" required="required" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="anamnese">Está com os sintomas há quanto tempo?</label>
                    <div>
                        <input type="text" class="form-control" id="quanto_tempo" name="quanto_tempo" placeholder="1 dia">
                    </div>
                </div>
                <div class="form-row col-md-10">
                    <div class="form-group col-md-3">
                        <label for="anamnese">É gestante?</label>
                        <div>
                            <select id="gestante" name="gestante" class="form-control" onchange="exibir_ocultar(this)">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="anamnese">Quantas semanas?</label>
                        <input type="text" class="form-control" id="semanas" name="semanas" placeholder="30 semanas">
                    </div>
                </div>
        </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Enviar</button>
                    <a href="agendaList.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>

    </div>
    </form>
</div>

<script>
    function exibir_ocultar(val) {
        if(val.value == '1') {
            document.getElementById('semanas').style.display = 'block';
        }
        else {
            document.getElementById('semanas').style.display = 'none';
        }
    };
</script>
