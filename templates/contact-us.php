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

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="contactFormSection">
            <div>
                <h2>Fill in your contact details and our team will get in touch with you.</h2>
            </div>
            <div>
                <?php the_content(); ?>
            </div>
        </section>
    <?php endwhile; else: endif?>

<?php endif?>

<?php
    get_footer();
?>