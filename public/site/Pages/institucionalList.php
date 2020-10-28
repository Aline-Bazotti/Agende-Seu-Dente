<?php
$dados = $metodo->buscarInstitucional();

?>
    <!DOCTYPE html>
    <html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <title>Institucional</title>
        <!-- Bootstrap core CSS -->
        <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../../css/carousel.css" rel="stylesheet">
    </head>
<body>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <br>
                <h2>Institucional</h2>
            </div>
        </div>
    </header>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th width="10%">Título</th>
            <th width="50%">Descrição</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $institucional): ?>
                <tr>
                    <td><?= $institucional['descricao']; ?></td>
                    <td><?= $institucional['texto']; ?></td>
                    <td><img src="../admin/Institucional/img/<?= $institucional['imagem']; ?>" width="250" height="250">
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
