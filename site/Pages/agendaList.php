<?
if (isset($_POST['mensagem'])){
    $mensagem = $_POST['mensagem'];
}
?>
<div class="anamnese">
    <br>
    <h3>Agende seu horário</h3>
    <div class="question-group">
        <div class="header">
            <h4>Responda o formulário para solicitar agendamento para consulta</h4>
        </div>
        <?
        if ($mensagem == 'sucesso'){
            ?>
                <p>Sua solicitação foi enviada</p>
            <?php
        }
        else{
            ?>
            <p>Sua solicitação não foi enviada, tente novamente mais tarde</p>
            <?php
        }
        ?>
        <div class="questions">
            <form action="../site/Agenda/addEvento.php" method="post">
                <div class="form-group">
                    <label for="anamnese" class="col-sm-5 control-label">Nome</label>
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
                    <label for="anamnese" class="col-sm-5 control-label">Data de Nascimento</label>
                    <div class="col-sm-7">
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required="required">
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
                    <label for="anamnese" class="col-sm-5 control-label">Descreva brevemente seus sintomas</label>
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
                    <a href="../Pages/agendaList.php" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>



        <!--<div class="question-group">
        <div class="header">
            <i class="fa fa-caret-down toggle"></i>
            <h4>Exposition aux bruits - Dernière profession</h4>
            <ul class="complete">
                <li class="yes"></li>
                <li class="yes"></li>
                <li class="yes"></li>
                <li class="no"></li>
            </ul>
        </div>

        <div class="questions">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail4" class="col-sm-5 control-label">Type de bruit</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Type de bruit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Type de spectre</label>
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                            <option>Option 4</option>
                            <option>Option 5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail5" class="col-sm-5 control-label">Nombre d'années d'exercice professionel</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="inputEmail5" placeholder="0">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail6" class="col-sm-5 control-label">Nombre d'années d'exposition au bruit</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="inputEmail6" placeholder="0">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail7" class="col-sm-5 control-label">Duree journaliere d'exposition</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="inputEmail7" placeholder="0">
                    </div>
                </div>
            </form>
        </div>
    </div>
        <div class="question-group conditional-question">
        <div class="header">
            <i class="fa fa-caret-right toggle"></i>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-5 control-label">Equipped  Hearing Aid?</label>
                    <div class="col-sm-7">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1">Yes
                        </label>
                    </div>
                </div>
            </form>

            <ul class="complete">
                <li class="yes"></li>
                <li class="yes"></li>
                <li class="no"></li>
            </ul>
        </div>

        <div class="questions">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="inputEmail10" class="col-sm-5 control-label">Model</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputEmail10" placeholder="Model">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail11" class="col-sm-5 control-label">Year</label>
                    <div class="col-sm-7">
                        <input type="number" class="form-control" id="inputEmail11" placeholder="1900">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword13" class="col-sm-5 control-label">Ears</label>
                    <div class="col-sm-7">
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option1">Left
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option2">Right
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option3">Both
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>-->

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
