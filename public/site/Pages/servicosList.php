<?php
$servicos = $metodo->buscarServicos();

?>
    <!DOCTYPE html>
    <html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Serviços</title>
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
            <h2>Serviços</h2>
        </div>
    </div>
</header>
<hr>
<table class="table table-hover">
    <thead>
    <tr>
        <th width="15%">Título</th>
        <th width="40%">Descrição</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($servicos as $servico): ?>
        <tr>
            <td><?= $servico['descricao']; ?></td>
            <td><?= $servico['texto']; ?></td>
            <td><img  src="../admin/Servicos/img/<?= $servico['imagem'] ?>" width="250" height="250"></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
