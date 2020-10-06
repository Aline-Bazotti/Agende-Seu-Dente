<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();

$grupo_id = isset($_POST['grupoId']) ? $_POST['grupoId'] : null;

if (empty($grupo_id)) {
    echo "Pedido inválido.";
    exit;
}
$grupo = $metodo->buscarGrupoPorId($grupo_id);

include '../menuLateral.php';
?>

    <h2>Editar Grupo - <?= $grupo['nome'] ?></h2>
    <hr />
    <form action="../Controler/editGrupo.php" method="post">
        <input type="hidden" name="grupoId" value="<?= $grupo['id'] ?>">
            <div>
                <label class="desc" for="Name">Nome*</label>
                <div>
                    <input id="grupoNome" name="grupoNome" type="text" class="field text fn" value="<?= $grupo['nome'] ?>" size="20" tabindex="1" required="required">
                </div>
            </div>
            <div>
                <label class="desc" for="Name">
                    Permissões
                </label>
                <div>
                    <select id="grupoPermissoes" name="grupoPermissoes" class="field select medium" tabindex="11">
                        <option value="systemAdmin">System Admin</option>
                        <option value="dentista">Dentista</option>
                        <option value="auxiliar">Auxiliar</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="../Pages/gruposList.php" class="btn btn-danger">Cancelar</a>
            </div>

    </form>
