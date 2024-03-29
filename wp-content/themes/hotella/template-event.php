<?php
get_header('2');
/* Template Name: Event */
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <?php if ( $content = get_field( 'content' ) ) : ?>
                <?php echo $content; ?>
            <?php endif; ?>
            <div class="bosluksv"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>