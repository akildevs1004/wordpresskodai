<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">

<?php wp_head();?>
<?php
include( get_template_directory() . '/inc/custom-style.php' );
?>

<?php $home_title = get_field('home_title', 'options');  if ($home_title) : ?>

<title><?php echo $home_title ?></title>

<?php endif; ?>

<?php $favicion = get_field('favicion', 'options');  if ($favicion) : ?>

<link rel="shortcut icon" type="image/png" href="<?php echo $favicion ?>">

<?php endif; ?>

<?php $home_description = get_field('home_description', 'options');  if ($home_description) : ?>

<meta name="description" content="<?php echo $home_description ?>">

<?php endif; ?>

</head>
<body>
<div class="preloader">
<?php $preloader_logo = get_field('preloader_logo', 'options');  if ($preloader_logo) : ?>
<figure> <img src="<?php echo $preloader_logo ?>" alt="Image"> </figure>
</div>
<?php endif; ?>
<div class="page-transition"></div>
<aside class="side-widget">
<div class="inner">
<!-- Logo Menu Mobile -->
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('sidewidget_logo','options'); ?>" alt="Image"></a> </div>
    <div class="hide-mobile">
    <div class="or">
        <h2 class="h2-baslik-hizmetler-2"> Contact Information </h2>
    </div>
    <div class="bosluksv"></div>
    <div class="iconsv"><i class="flaticon-call"></i></div>
    <address class="address">

    <?php $phone = get_field('phone', 'options');  if ($phone) : ?>
    
        <?php echo $phone ?>

        <?php endif; ?>

        <div class="bosluksv"></div>


        <div class="iconsv"><i class="flaticon-email"></i></div>

        <?php $mail = get_field('mail', 'options');  if ($mail) : ?>

        <?php echo $mail ?>

        <?php endif; ?>

        <div class="bosluksv"></div>
        <div class="iconsv"><i class="flaticon-location"></i></div>

        <?php $address = get_field('address', 'options');  if ($address) : ?>

        <?php echo $address ?>

        <?php endif; ?>

        <div class="bosluksv"></div>
        <div class="or">

        <?php $facebook_icon_link = get_field('facebook_icon_link', 'options');  if ($facebook_icon_link) : ?>
            <a href="<?php echo $facebook_icon_link ?>"><i class="flaticon-facebook-1 iconsocia"></i></a>
        <?php endif; ?> 

        <?php $instagram_icon_link = get_field('instagram_icon_link', 'options');  if ($instagram_icon_link) : ?>
            <a href="<?php echo $instagram_icon_link ?>"><i class="flaticon-instagram-1 iconsociai"></i></a>
        <?php endif; ?> 

        <?php $twitter_icon_link = get_field('twitter_icon_link', 'options');  if ($twitter_icon_link) : ?>
            <a href="<?php echo $twitter_icon_link ?>"><i class="flaticon-twitter-1 iconsocia"></i></a>
        <?php endif; ?>   

        </div>
    </address>
    </div>
    <div class="show-mobile">
    <div class="site-menu">
        <div class="menu">

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'mobile-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
        </div>
    </div>
    <small>
    <?php $side_widget_copyright = get_field('side_widget_copyright', 'options');  if ($side_widget_copyright) : ?>
        <?php echo $side_widget_copyright ?>
     <?php endif; ?>   
    </small> </div>
</aside>

<nav class="navbar navbar-expand-md navbar-light bg-light">
<div class="container">
<!-- Logo Menu Desktop -->
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
         <?php
         $logo = get_field('logo', 'options');
         if ($logo) : ?>
        <img src="<?php echo $logo ?>" alt="Image">
        <?php endif;
        ?>

    </a> 
    </div>
        <div class="site-menu">
        <div class="menueffect">
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'top-menu',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-2',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
        </div>
        <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>

        <div class="navbar-button"> <div class="btn-1" onclick="location.href='<?php the_field('header_button_link', 'options'); ?>';" style="cursor:pointer;"><i class="<?php the_field('header_button_icon', 'options'); ?> iconp"></i><p class="asdas"><?php the_field('header_button_text', 'options'); ?></p></div></div>

    </div>
</nav>

<!-- Slider -->
<header class="slider">
<div class="main-slider">
<div class="swiper-wrapper">
        <?php if( have_rows('hero') ): ?>

        <?php while( have_rows('hero') ): the_row();

        //vars
        $slide_image = get_sub_field('slide_image');
        $bigtext = get_sub_field('big_text');
        $bigbottomtext = get_sub_field('big_bottom_text');
        $smalltext = get_sub_field('small_text');
        $rotateimage = get_sub_field('rotate_image');
        $buttontext = get_sub_field('button_text');
        $link = get_sub_field('link');
        $rotatebusiness = get_sub_field('rotate_business');
        $rotateimage2 = get_sub_field('rotate_image_2');
        $videolink = get_sub_field('video_link');    
        ?>
        <div class="swiper-slide">
            <div class="slide-image" data-background="<?php echo $slide_image;?>"></div>
                <div class="container ff">
                <h1><?php echo $bigtext;?> <br>
                <?php echo $bigbottomtext;?> </h1>
                <p><?php echo $smalltext;?> </p>
                <div class="bosluk44"></div>
                    <div class="or">
                        <a href="<?php echo $link;?>" class="btn-3"><span class="btnn3"><?php echo $buttontext;?></span></a>
                    </div>
            </div>
        </div>
        <?php endwhile; ?>   
    <?php endif; ?>  
    </div>
</div> 
    <div class="button-prev"><p class="dz">❮</p></div>
    <div class="button-next"><p class="dz">❯</p></div>
</header>