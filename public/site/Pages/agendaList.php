<div class="anamnese">
    <br>
    <h3>Agende seu horário</h3>
    <div class="question-group">
        <div class="header">
            <h4>Responda o formulário para solicitar agendamento para consulta</h4>
        </div>
        <div class="questions">
            <form action="../site/Agenda/addEvento.php" method="post">
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Nome*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">CPF/CNPJ</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="cpf_cpnj" name="cpf_cpnj" placeholder="999.999.999-99">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Data de Nascimento*</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Telefone para contato*</label>
                    <div class="col-sm-7">
                        <input type="tel" class="form-control" id="telefone" name="telefone" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Sente dor?</label>
                    <div class="col-sm-7">
                        <select id="dor" name="dor" class="form-control">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Descreva brevemente seus sintomas*</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="desc" name="desc" required="required">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Está com os sintomas há quanto tempo?</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="quanto_tempo" name="quanto_tempo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">É gestante?</label>
                    <div class="col-sm-7">
                        <select id="gestante" name="gestante" class="form-control" onchange="exibir_ocultar(this)">
                            <option value="1">Sim</option>
                            <option value="0">Não</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="semanas" name="semanas" placeholder="Quantas semanas?">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="agendaList.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
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
