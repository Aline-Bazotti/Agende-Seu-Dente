<?php
$banners = $metodo->buscarTodosBanners();
?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php foreach($banners as $banner): ?>
                <li data-target="#myCarousel" data-slide-to="<?= $banner['id']; ?>" class="active"></li>
            <?php endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active"></div>
            <?php foreach($banners as $banner): ?>
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
