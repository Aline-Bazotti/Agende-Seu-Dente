<?php
require '../../Util/Metodo.php';
$metodo = new Metodo();
$servicos = $metodo->buscarServicos();

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Serviços</title>
</head>
<body>
    <?php include '../menuLateral.php'?>
    <main class="page-content">
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
            <?php foreach($servicos as $servico): ?>
                <tr>
                    <td><?= $servico['desc']; ?></td>
                    <td><?= $servico['texto']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>