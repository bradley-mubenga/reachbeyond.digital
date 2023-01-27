<?php
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="singlePost">
        <?php the_content(); ?>
    </section>
<?php endwhile; else: endif?>

<?php get_template_part('/template-parts/contact', 'cta')?>

<?php
    get_footer();
?>