<?php
/*
Template Name: What We Do
*/
?>
<?php
    get_header();
?>


<?php 
    $cta = get_field('call_to_action');
    $hero = get_field('hero_section');
    $services = get_field('our_services');
    if($hero):
?>
    <?php $image = $hero['background_image']?>
    <section style="background-image: url('<?php echo esc_url($image['url'])?>')" class="heroTemplate">
        <p>WHAT WE DO</p>
        <h1><?php echo $hero['heading'];?></h1>
    </section>

    <section class="servicesBlocksSection">
        <?php foreach( $services as $service ): ?>
            <div class="serviceBlock" style="background-image: url('<?php echo esc_url($service['url'])?>')">
                <h2><?php echo esc_attr($service['title'])?></h2>
                <p><?php echo esc_attr($service['description'])?></p>
            </div>
        <?php endforeach; ?>
    </section>

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>