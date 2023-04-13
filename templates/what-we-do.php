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

    <section class="caseStudyArchiveSection onServicePage">
        <div class="caseStudyCards">
            <?php
                $args = array(
                    'post_type' => 'post'
                );
                $_posts = new WP_Query($args);
            ?>
            <?php if($_posts->have_posts()): while($_posts->have_posts()): $_posts->the_post();?>
                <div class="caseStudyCard">
                    <?php if(has_post_thumbnail()):?>
                        <img src="<?php the_post_thumbnail_url() ?>" class="responsiveImage"/>
                    <?php endif;?>
                    <div class="caseStudyExerptText">
                        <h3><?php echo the_title()?></h3>
                        <?php the_excerpt()?>
                        <a href="<?php the_permalink()?>" class="blueLinedCTA">Learn More</a>
                    </div>
                </div>
            <?php endwhile; else: endif;?>
        </div>
    </section>

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>