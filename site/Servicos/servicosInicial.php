<?php
$servicos = $metodo->buscarServicosInicial();
?>
<div class="container marketing">
    <?php foreach($servicos as $servico): ?>
    <hr class="featurette-divider">
    <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading"><?= $servico['descricao']; ?></h2>
                <p class="lead"><?= $servico['texto']; ?></p>
            </div>
            <div class="col-md-5">
                <img  src="../admin/Servicos/img/<?= $servico['imagem'] ?>" width="500" height="500">
            </div>
    </div>
    <?php endforeach; ?>
</div>