<?php
$id = isset($_GET['historicoId']) ? $_GET['historicoId'] : null;

if (empty($id)) {
    echo "Pedido inválido.";
    exit;
}
$historico = $metodo->buscarProntuarioHistoricoPorId($id);
$prontuario = $metodo->buscarProntuarioPorId($historico['id_prontuario']);

?>

    <h2>Editando Histórico</h2>
    <hr />
    <form action="../admin/Prontuario/Controller/editHistorico.php" method="post">
        <input type="hidden" id="historicoId" name="historicoId" value="<?= $historico['id'] ?>">
        <input type="hidden" id="pacienteId" name="pacienteId" value="<?= $prontuario['id_paciente'] ?>">
        <div>
            <label class="desc" id="data_procedimento" for="data_procedimento">Data</label>
            <div>
                <input id="data_procedimento" name="data_procedimento" type="date" spellcheck="false" value="<?= $historico['data_procedimento'] ?>" tabindex="3" required="required">
            </div>
        </div>

        <div>
            <label class="desc" id="dente" for="dente">Dente</label>
            <div>
                <input id="dente" name="dente" type="number" class="field text fn" value="<?= $historico['dente'] ?>" maxlength="2" required="required">
            </div>
        </div>

        <div>
            <label class="desc" id="procedimento" for="procedimento">Procedimentos Realizados</label>
            <div>
                <input id="procedimento" name="procedimento" type="text" class="field text fn" value="<?= $historico['procedimento'] ?>" size="70" tabindex="1">
            </div>
        </div>

        <div>
            <div>
                <br>
                <button class="btn btn-sm btn-success" type="submit" >Salvar</button>
                <a href="?page=viewProntuario&pacienteId=<?= $prontuario['id_paciente'];?>" class="btn btn-sm btn-danger">Cancelar</a>
            </div>
        </div>

    </form>