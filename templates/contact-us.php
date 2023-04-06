<?php
/*
Template Name: Contact Us
*/
?>
<?php
    get_header();
?>


<?php 
    $hero = get_field('hero_section');
    if($hero):
?>
    <?php $image = $hero['background_image']?>
    <section style="background-image: url('<?php echo esc_url($image['url'])?>')" class="heroTemplate">
        <p>CONTACT US</p>
        <h1><?php echo $hero['heading'];?></h1>
    </section>

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>