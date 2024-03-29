<?php
get_header('2');
/* Template Name: Foods & Bars */
?>

<!--Foods Menu Alanı-->
<?php $foodsa = get_field('foodsa');?>
<section class="food">
<div class="container">
    <div class="row">   
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h2 class="h2-baslik-anasayfa-ozel btw wow <?php echo $foodsa ['right_text_about_effect'];?>" data-wow-delay="0.4s"> <?php echo $foodsa ['right_title_about'];?> </h2>
        <div class="bosluk333"></div>
    <p class="paragraf wow <?php echo $foodsa ['right_text_about_effect'];?>" data-wow-delay="0.5s">
    <?php echo $foodsa ['right_text_about'];?>
        <div class="">
            <div class="row">
            <?php if( have_rows('food_menu') ): ?>
            <?php while( have_rows('food_menu') ): the_row();
            //vars
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $price = get_sub_field('price');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            ?>
            <div class="col-lg-12 ds wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s">
                <div class="foods">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="foodtitle"> <?php echo $title; ?> </h2>
                            <div class="bosluk333"></div>
                            <p class="paragraffood">
                            <?php echo $text; ?>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="foodprice"><?php echo $price; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img class="galeri__gorsel--3ab zimage wow <?php echo $foodsa ['image_effect_1'];?>" data-wow-delay="0.5s" src="<?php echo $foodsa ['image_1'];?>" alt="" >
    </div>      
</div></div>
</section>

<!--Foods Menu Alanı 2-->
<?php $foodsa2 = get_field('foodsa2');?>
<section class="food2">
<div class="container">
    <div class="row">   
    <div class="col-lg-6">
        <img class="galeri__gorsel--3ab zimage wow <?php echo $foodsa2 ['image_effect_1'];?>" data-wow-delay="0.5s" src="<?php echo $foodsa2 ['image_1'];?>" alt="" >
    </div>
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h2 class="h2-baslik-anasayfa-ozel btw wow <?php echo $foodsa2 ['right_text_about_effect'];?>" data-wow-delay="0.4s"> <?php echo $foodsa2 ['right_title_about'];?> </h2>
        <div class="bosluk333"></div>
    <p class="paragraf wow <?php echo $foodsa2 ['right_text_about_effect'];?>" data-wow-delay="0.5s">
    <?php echo $foodsa ['right_text_about'];?>
        <div class="">
            <div class="row">
            <?php if( have_rows('food_menu2') ): ?>
            <?php while( have_rows('food_menu2') ): the_row();
            //vars
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $price = get_sub_field('price');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            ?>
            <div class="col-lg-12 ds wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s">
                <div class="foods">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="foodtitle"> <?php echo $title; ?> </h2>
                            <div class="bosluk333"></div>
                            <p class="paragraffood">
                            <?php echo $text; ?>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="foodprice"><?php echo $price; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>      
</div></div>
</section>

<!--Foods Menu Alanı 3-->
<?php $foodsa = get_field('foodsa3');?>
<section class="food3">
<div class="container">
    <div class="row">   
    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
        <h2 class="h2-baslik-anasayfa-ozel btw wow <?php echo $foodsa ['right_text_about_effect'];?>" data-wow-delay="0.4s"> <?php echo $foodsa ['right_title_about'];?> </h2>
        <div class="bosluk333"></div>
    <p class="paragraf wow <?php echo $foodsa ['right_text_about_effect'];?>" data-wow-delay="0.5s">
    <?php echo $foodsa ['right_text_about'];?>
        <div class="">
            <div class="row">
            <?php if( have_rows('food_menu3') ): ?>
            <?php while( have_rows('food_menu3') ): the_row();
            //vars
            $title = get_sub_field('title');
            $text = get_sub_field('text');
            $price = get_sub_field('price');
            $effect = get_sub_field('effect');
            $duration = get_sub_field('duration');
            ?>
            <div class="col-lg-12 ds wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s">
                <div class="foods">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="foodtitle"> <?php echo $title; ?> </h2>
                            <div class="bosluk333"></div>
                            <p class="paragraffood">
                            <?php echo $text; ?>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="foodprice"><?php echo $price; ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img class="galeri__gorsel--3ab zimage wow <?php echo $foodsa ['image_effect_1'];?>" data-wow-delay="0.5s" src="<?php echo $foodsa ['image_1'];?>" alt="" >
    </div>      
</div></div>
</section>

<?php get_footer();?>