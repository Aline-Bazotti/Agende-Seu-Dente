<?php
$institucional = $metodo->buscarInstitucionalInicial();
?>
<!-- START THE FEATURETTES -->
<div class="container marketing">
    <hr class="featurette-divider">
    <?php if($institucional["id"]){?>
    <div class="row featurette">
        <div class="col-md-7">
         <h2 class="featurette-heading"><?= $institucional['desc']; ?></h2>
            <p class="lead"><?= $institucional['texto']; ?></p>
        </div>
        <?php if($institucional["imagem"]){?>
        <div class="col-md-5">
            <img src="<?php $institucional["imagem"] ?>" height="500" width="500">
        </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>
<!-- /END THE FEATURETTES -->