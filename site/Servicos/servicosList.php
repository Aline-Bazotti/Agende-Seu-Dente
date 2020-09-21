<?php
require '../../Util/Metodo.php';
$metodo = new Metodo();
$dados = $metodo->buscarServicos();

include '../header.php';

?>

    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Serviços</h2>
            </div>
        </div>
    </header>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th width="10%">Título</th>
            <th width="10%">Descrição</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($dados as $servico): ?>
            <tr>
                <td><?= $servico['desc']; ?></td>
                <td><?= $servico['texto']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php
include '../footer.php';
?>