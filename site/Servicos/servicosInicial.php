<?php
$servicos = $metodo->buscarServicos();
?>
<div class="container marketing">
    <hr class="featurette-divider">

    <div class="row featurette">
        <?php foreach($servicos as $servico): ?>
            <div class="col-md-7">
                <h2 class="featurette-heading"><?= $servico['desc']; ?></h2>
                <p class="lead"><?= $servico['texto']; ?></p>
            </div>
            <div class="col-md-5">
                <img src="<?= $servico['image']; ?>" width="500" height="500">
            </div>
        <?php endforeach; ?>
    </div>
</div>