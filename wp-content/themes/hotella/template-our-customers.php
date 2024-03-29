<?php
get_header('2');
/* Template Name: Our Customers */
?>

<main>
<!--Markalar Alanı-->
<?php $customerssection = get_field('customers_section');?>
<section class="markalar">
<h6>.</h6>
    <div class="container">
        <div class="row">     
    <?php if( have_rows('customers') ): ?>

        <?php while( have_rows('customers') ): the_row();

        //vars
        $image = get_sub_field('image');

        ?>
    <div class="col-lg-2">
    <div class="h-yazi-ortalama h-yazi-margin-kucuk-21 wow animated fadeInUp animated" data-wow-delay="0.5s">
        <img src="<?php echo $image; ?>" alt="Marka 1" class="marka">
    </div>
    </div>
    <?php endwhile; ?>   
    <?php endif; ?> 
    </div>
    </div>
</section>

<?php get_footer();?>