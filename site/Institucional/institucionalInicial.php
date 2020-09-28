<?php
$institucionais = $metodo->buscarInstitucionalInicial()
?>

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php foreach($institucionais as $institucional): ?>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" src="<?= $institucional['image']; ?>" width="140" height="140">
                <h2><?= $institucional['desc']; ?></h2>
                <p><?= $institucional['texto']; ?></p>
                <p><a class="btn btn-secondary" href="http://localhost/Agende-Seu-Dente/site/Institucional/institucionalList.php" role="button">Ver detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endforeach; ?>
    </div><!-- /.row -->

</div><!-- /.container -->


