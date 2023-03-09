<?php
/*
Template Name: Case Study Archive
*/
?>

<?php
    get_header();
?>

<?php 
    $headings = get_field('heading_section');
    if($headings):
?>

    <section class="caseStudyArchiveSection">
        <h2><?php echo $headings['heading']?></h2>
        <p><?php echo $headings['paragraph']?></p>
        <div class="caseStudyCards">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
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