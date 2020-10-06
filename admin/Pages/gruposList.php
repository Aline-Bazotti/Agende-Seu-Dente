<?php

$dados = $metodo->buscarGrupos();
$grupo_id = isset($_POST['grupoId']) ? $_POST['grupoId'] : null;
$grupo = $metodo->buscarGrupoPorId($grupo_id);

?>
<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Grupos</h2>
        </div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=gruposList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" data-toggle="modal" href="#cadastro-grupo-modal" title="Cadastrar"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($dados) {
        foreach($dados as $grupo):
            ?>
            <tr>
                <td><?= $grupo['id']; ?></td>
                <td><?= $grupo['nome']; ?></td>
                <td class="actions text-left">
                    <a class="btn btn-sm btn-warning" data-toggle="modal" href="#editar-grupo-modal" data-id="<?= $grupo['id']; ?>">
                        <i class="fa fa-edit"></i>Editar</a>
                    <a class="btn btn-sm btn-danger" data-toggle="modal" href="#delete-modal" data-id="<?= $grupo['id']; ?>">
                        <i class="fa fa-trash"></i> Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php } else { ?>
        <tr>
            <td colspan="6">Nenhum grupo cadastrado.</td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<!-- modal para editar grupo -->
<div class="modal fade" id="editar-grupo-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Editar Grupo - <?= $grupo['nome'] ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="../Grupos/Controller/editGrupo.php" method="post">
                    <input type="hidden" name="grupoId" value="<?= $grupo['id'] ?>">
                    <div>
                        <label class="col-form-label" for="Name">Nome*</label>
                        <input id="grupoNome" name="grupoNome" type="text" class="form-control" value="<?= $grupo['nome'] ?>" size="20" required="required">
                    </div>
                    <div>
                        <label class="col-form-label" for="Name">
                            Permissões
                        </label>
                        <select id="grupoPermissoes" name="grupoPermissoes" class="custom-select custom-select-lg mb-3" tabindex="11">
                            <option value="systemAdmin">System Admin</option>
                            <option value="dentista">Dentista</option>
                            <option value="auxiliar">Auxiliar</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a id="cancel" class="btn btn-default" data-dismiss="modal">Não</a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->

<!-- modal para cadastrar grupo -->
<?php if (isset($_POST ["grupoId"]))
    $metodo->addGrupo($_POST ["grupoId"],$_POST ["grupoNome"],$_POST ["grupoPermissoes"]); ?>
<div class="modal fade" id="cadastro-grupo-modal" tabindex="-1" role="dialog" aria-labelledby="CadastroGrupo" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Cadastro Novo Grupo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h5>Insira as informações do grupo</h5>
                <form action="<?php echo current_url() ?>" method="post">
                    <div class="form-group" >
                        <label class="col-form-label">Grupo id</label>
                        <div>
                            <input id="grupoId" name="grupoId" type="number" class="form-control" required="required">
                        </div>
                        <label class="col-form-label">Nome</label>
                        <div>
                            <input id="grupoNome" name="grupoNome" type="text" class="form-control" size="20" required="required">
                        </div>
                        <label class="col-form-label">
                            Permissões
                        </label>
                        <div>
                            <select id="grupoPermissoes" name="grupoPermissoes" class="custom-select custom-select-lg mb-3">
                                <option value="systemAdmin">System Admin</option>
                                <option value="dentista">Dentista</option>
                                <option value="auxiliar">Auxiliar</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-dismiss="modal" name="btnInserir">Salvar</button>
                <a id="cancel" class="btn btn-default" data-dismiss="modal">Não</a>
            </div>
        </div>
    </div>
</div> <!-- /.modal -->
<script>
    function salvarGrupo(){
        console.log("nome ", $("#grupoNome").val());
        console.log("id ", $("#grupoId").val());
        console.log("permissoes ", $("#grupoPermissoes").val());

        var grupo_id = $("#grupoId").val();
        var grupo_nome = $("#grupoNome").val();
        var grupo_permissoes = $("#grupoPermissoes").val();
        var sdata = { grupoId : grupo_id, grupoNome: grupo_nome, grupoPermissoes: grupo_permissoes };
        $.ajax({
            url: "../admin/Grupos/Controller/addGrupo.php",
            method: "POST",
            data: sdata
        })
            .done(function (data) {
                console.log('success', data);
            })
            .fail(function (xhr) {
                console.log('error', xhr);
            });
    }
    document.getElementById("grupoId").value="";
    document.getElementById("grupoNome").value="";
    document.getElementById("grupoPermissoes").value="";
</script>
