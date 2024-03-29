<!--Footer Alanı-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- end col-3 -->
            <div class="col-lg-6 cce">
            <div class="logo wow animated fadeInUp animated" data-wow-delay="0s"> <img src="<?php the_field('footer_image', 'option'); ?>" alt="Image"> </div>
            <!-- end logo -->
            <?php the_field('footer_description', 'options'); ?>
            </div>
            
            <div class="col-lg-6 cce1 wow animated fadeInUp animated" data-wow-delay="0.5s">
            <?php $footercallus = get_field('footer_callus','option');?>
            <div class="container">
                <div class="row">
                <div class="depff">
                    <div class="container fs">
                        <div class="row">
                        <?php if( have_rows('footer_contact_information','option') ): ?>
                            <?php while( have_rows('footer_contact_information','option') ): the_row();
                            //vars
                            $icon = get_sub_field('icon');
                            $bigtext = get_sub_field('big_text');
                            $smalltext = get_sub_field('small_text');
                            $link = get_sub_field('link');
                            ?>
                            <div class="col-lg-12 lefthealtfooter">
                                <?php $phonecallsection = get_field('phonecall_section');?>
                                <div class="row yk" onclick="location.href='<?php echo $link; ?>';" style="cursor:pointer;">
                                    <div class="col-lg-3">
                                        <div class="iconheal"><i class="<?php echo $icon; ?>"></i></div>
                                    </div>
                                    <div class="col-lg-9">
                                        <h4 class="services-kutu2--wt13 wow fade"><?php echo $smalltext; ?></h4>
                                        <h2 class="h2-baslik-anasayfa-wthe wow fade"><?php echo $bigtext; ?></h2>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>   
                            <?php endif; ?> 
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <?php the_field('footer_special_descirption', 'options'); ?>
            <div class="bosluk333"></div>
            <ul class="footer-social cce wow animated fadeInUp animated" data-wow-delay="0.5s">
            <?php $facebook_icon_link = get_field('facebook_icon_link', 'options');  if ($facebook_icon_link) : ?>
                <li><a href="<?php echo $facebook_icon_link ?>"><i class="flaticon-facebook-1 iconsociaf"></i></a></li>
            <?php endif; ?> 
            <?php $instagram_icon_link = get_field('instagram_icon_link', 'options');  if ($instagram_icon_link) : ?>
            <li><a href="<?php echo $instagram_icon_link ?>"><i class="flaticon-instagram-1 iconsociaf"></i></a></li>
            <?php endif; ?> 
            <?php $twitter_icon_link = get_field('twitter_icon_link', 'options');  if ($twitter_icon_link) : ?>
                <li><a href="<?php echo $twitter_icon_link ?>"><i class="flaticon-twitter-1 iconsociaf"></i></a></li>
            <?php endif; ?> 
            </ul>
        <!-- end row --> 
        </div>
    <!-- Quick Links -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    wp_nav_menu( array(
                        'name'    => 'quick-links',
                        'menu'    => 'quick-links',

                    ) );
                ?>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright"><?php the_field('copyright', 'option'); ?></p>
            </div>
        </div>
    </div>
    <div id="top" style="cursor: pointer;">
        <i class="flaticon-chevron icontops"></i>
        <div class="bosluk3"></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>




