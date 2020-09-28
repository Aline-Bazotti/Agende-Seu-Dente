<?php
require "../../Util/Metodo.php";
$metodo = new Metodo();
$dados = $metodo->buscarUsuarios();
include "../menuLateral.php";
?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuários</h2>
		</div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="usuariosList.php"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="usuarioCadastro.php"><i class="fa fa-sticky-note"></i>Cadastrar</a>
        </div>
	</div>
</header>
<hr>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Status</th>
			<th>E-mail</th>
		</tr>
	</thead>
	<tbody>
		<?php
        if ($dados) {
            foreach($dados as $usuario):
			?>
				<tr>
					<td><?= $usuario['id']; ?></td>
					<td><?= $usuario['nome']; ?></td>
					<td><?= $usuario['status']; ?></td>
					<td><?= $usuario['email']; ?></td>
					
					<td class="actions text-right">
						<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-pedido=1 data-id="<?= $usuario['id']; ?>">
							<i class="fa fa-trash"></i> Excluir
						</a>
					</td>
				</tr>
            <?php endforeach; ?>
		<?php } else { ?>
			<tr>
				<td colspan="6">Nenhum usuário cadastrado.</td>
			</tr>
		<?php } ?>
	</tbody>
</table>