<?php
get_header('2');
/* Template Name: Gallery */
?>

<section class="gallery-section">
<?php $productsection = get_field('product_section');?>
    <div class="container">
        <div class="row">
            <div class="col-12 wow animated fadeIn animated" data-wow-delay="0.5s">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <div class="icon wow <?php echo $productsection ['icon_effect'];?>" data-wow-delay="0.5s"><i class="<?php echo $productsection ['icon'];?>"></i></div>
                    <h2 class="h2-baslik-hizmetler-yorum wow <?php echo $productsection ['title_effect'];?>" data-wow-delay="0.5s"> <?php echo $productsection ['title'];?> </h2> 
                </div>
                    <p class="h2-baslik-hizmetler-yorum__yorum wow <?php echo $productsection ['text_effect'];?>" data-wow-delay="0.5s">
                        <?php echo $productsection ['text'];?>
                    </p>
                <div class="bosluk3a"></div>
            </div>
        </div>  
    </div>
    <div class="container">
    <?php $images = get_field('gallery'); ?>
    <div class="bosluk333"></div>
        <?php if($images): ?>
                <div class="row">
                    <?php foreach( $images as $image): ?>
                        <div class="col-sm-2">
                        <div class="gallery">
                            <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>">
                            <img src="<?php echo $image['sizes']['thumbnail']; ?>" class="img-fluid"> 
                            </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>
            <div class="bosluk3"></div>
        <?php endif; ?>
    </div>
</section>



<?php get_footer(); ?>