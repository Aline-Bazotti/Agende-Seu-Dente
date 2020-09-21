<?php
$dados = $metodo->buscarTodosBanners();
?>
<main role="main">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php foreach($dados as $banner): ?>
            <div class="carousel-item">
                <img src="<?= $banner['imagem']; ?>" width="1350" height="512">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1><?php echo $banner['titulo']; ?></h1>
                        <p><?php echo $banner['descricao']; ?></p>
                        <?php if ($banner['botao']){?>
                            <p>
                                <a class="btn btn-lg btn-primary" href="<?=$banner['botaoLink']?>" role="button"><?=$banner['botao']?></a>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>