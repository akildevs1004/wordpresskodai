<?php
get_header('2');
/* Template Name: Contact */
?>


<main>
            <!--İletişim İcon Alanı-->
            <section class="iletisim-icon-alani">
                <div class="tablo">


                <?php if( have_rows('contact_information') ): ?>

                    <?php while( have_rows('contact_information') ): the_row();

                    //vars
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');
                    $link = get_sub_field('link');
                    $effect = get_sub_field('effect');
                    $duration = get_sub_field('duration');

                    ?>



                    <div class="tablo--1-ve-3 wow <?php echo $effect; ?>" data-wow-delay="0.5s">
                        <div class="ozellik-kutu-iletisim" onclick="location.href='<?php echo $link; ?>';" style="cursor:pointer;" data-tilt>
                            <div class="icon"><i class="<?php echo $icon; ?>"></i></div>
                            <h3 class="baslik-4 h-yazi-margin-kucuk-2"><?php echo $title; ?></h3>
                            <p class="ozellik-kutu-iletisim--yazi">
                            <?php echo $text; ?>
                            </p>
                        </div>
                    </div>


                    <?php endwhile; ?>   

                    <?php endif; ?> 
                    </div>


            </section>

            <!--İletişim Form Alanı-->
            <section class="iletisim-form-alani">
              
                    <?php if ( $contact_form = get_field( 'contact_form' ) ) : ?> <?php echo $contact_form; ?> <?php endif; ?>
     
            </section>
        </main>
        <?php if ( $google_maps_iframe = get_field( 'google_maps_iframe' ) ) : ?> <?php echo $google_maps_iframe; ?> <?php endif; ?>




<?php get_footer();?>