<?php
/*
Template Name: Service
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
        <p>WHAT WE DO</p>
        <h1><?php echo $hero['heading'];?></h1>
    </section>

    <section class="serviceContainer">
        <h2><?php echo $hero['title'];?></h2>
        <p><?php echo $hero['paragraph'];?></p>
    </section>

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>