<?php
get_header('2');
/* Template Name: Book Now */
?>

<!-- Search Widget -->
<section class="book-now">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php dynamic_sidebar('search-widget'); ?>
                <div class="bosluk333"></div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>