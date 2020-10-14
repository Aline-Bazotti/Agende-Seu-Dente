<?php
$dados = $metodo->buscarUsuarios();

?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuários</h2>
		</div>
        <div class="col-sm-6 text-center h2">
            <a class="btn btn-info" href="?page=usuariosList"><i class="fa fa-hourglass"></i> Atualizar</a>
            <a class="btn btn-success" href="?page=usuarioCadastro"><i class="fa fa-sticky-note"></i>Cadastrar</a>
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

                    <td class="actions text-left">
                        <a class="btn btn-sm btn-warning" href="?page=usuarioForm&usuarioId=<?= $usuario['id']; ?>">
                            <i class="fa fa-edit"></i>Editar</a>
                        <a class="btn btn-sm btn-danger" href="../admin/Usuario/Controller/delUsuario.php?usuarioId=<?= $usuario['id']; ?>">
                            <i class="fa fa-trash"></i> Excluir</a>
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