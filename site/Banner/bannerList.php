<?php
$banners = $metodo->buscarBanners();
$qtd_slide = $metodo->qtdBanners();
?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
                $count_marc = 0;
                while ($count_marc < $qtd_slide['count(*)']){
                    echo "<li data-target='#myCarousel' data-slide-to='$count_marc'></li>";
                    $count_marc++;
                }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $count_slide = 0;
            foreach($banners as $banner):
                $active = "";
                if ($count_slide == 0){
                    $active = "active";
                }?>
                <div class="carousel-item <?= $active; ?>" >
                    <img src="../admin/Banner/img/<?= $banner['imagem']; ?>" width="1900" height="512">
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
                <?php
                $count_slide++;
            endforeach; ?>
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
