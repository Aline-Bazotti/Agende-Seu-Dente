<?php
require '../../Util/Metodo.php';
$metodo = new Metodo();
$dados = $metodo->buscarInstitucional();

include '../header.php';

?>

    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Institucional</h2>
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
            <?php foreach($dados as $institucional): ?>
                <tr>
                    <td><?= $institucional['desc']; ?></td>
                    <td><?= $institucional['texto']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php
include '../footer.php';
?>