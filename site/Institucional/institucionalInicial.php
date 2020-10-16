<?php
$institucionais = $metodo->buscarInstitucionalInicial()
?>

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <?php foreach($institucionais as $institucional): ?>
            <div class="col-lg-4">
                <img class="bd-placeholder-img rounded-circle" src="../admin/Institucional/img/<?= $institucional['imagem']; ?>" width="140" height="140">
                <h2><?= $institucional['descricao']; ?></h2>
                <p><?= $institucional['texto']; ?></p>
                <p><a class="btn btn-secondary" href="?page=institucionalList" role="button">Ver detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <?php endforeach; ?>
    </div><!-- /.row -->

</div><!-- /.container -->


