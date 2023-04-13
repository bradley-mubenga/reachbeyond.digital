<?php
    get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="singlePost">
        <h1><?php the_title();?></h1>
        <br />
        <?php the_content();?>
    </section>
<?php endwhile; else: endif?>

<?php
    get_footer();
?>