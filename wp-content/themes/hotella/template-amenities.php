<?php get_header('2');
/* Template Name: Amenities */
?>

<!--Videos-->
<?php $videosection = get_field('video_section');?>
<section class="videosc">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow <?php echo $videosection ['title_effect'];?>" data-wow-delay="0.4s"> <?php echo $videosection ['title'];?> </h2>
                </div>
                    <p class="h2-baslik-hizmetler-2__paragraf wow <?php echo $videosection ['small_text_effect'];?>" data-wow-delay="0.5s">
                    <?php echo $videosection ['small_text'];?>
                    </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="live-video-img">
                <div class="or">
                    <img src="<?php echo $videosection ['video_image'];?>" class="imgsg" alt="">
                    <div class="ortd">
                        <a href="<?php echo $videosection ['video_link'];?>" class="custom-button vbtn-fluid vp-a vp-yt-type"><i class="flaticon-play vdicon"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What Do We Offer? -->
<section class="why-us">
<?php $ridinglevelsec = get_field('riding_level_section');?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="h-yazi-ortalama h-yazi-margin-orta-3">
                    <h2 class="h2-baslik-hizmetler-2 wow <?php echo $ridinglevelsec ['title_effect'];?>" data-wow-delay="0.4s"> <?php echo $ridinglevelsec ['title'];?> </h2>
                </div>
                    <p class="h2-baslik-hizmetler-2__paragraf wow <?php echo $ridinglevelsec ['small_text_effect'];?>" data-wow-delay="0.5s">
                    <?php echo $ridinglevelsec ['small_text'];?>
                    </p>
            </div>
        </div>
    </div>
    <div class="bosluk333"></div>
    <div class="container">
        <div class="row">
        <?php if( have_rows('riding_level') ): ?>
        <?php while( have_rows('riding_level') ): the_row();
        //vars
        $image = get_sub_field('image');
        $icon = get_sub_field('icon');
        $title = get_sub_field('title');
        $text = get_sub_field('text');
        $effect = get_sub_field('effect');
        $duration = get_sub_field('duration');
        $link = get_sub_field('link');
        $date = get_sub_field('date');
        $buttontext = get_sub_field('button_text');
        $css = get_sub_field('css');
        ?>
        <div class="col-lg-3 ds wow <?php echo $effect; ?>" data-wow-delay="<?php echo $duration; ?>s">
        <div class="dep">
            <div class="or56">
                <div class="iconwr or56"><p class="dzv"><i class="<?php echo $icon; ?>"></i></p></div>
                        <div class="bosluk333"></div>
                        <h3 class="prongl"><?php echo $title; ?></h3>
                        <h4 class="infostextgl"><?php echo $date; ?></h4>
                        <a class="btn-3" href="<?php echo $link; ?>"><p class="btnn2"><?php echo $buttontext; ?></p></a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer();?>