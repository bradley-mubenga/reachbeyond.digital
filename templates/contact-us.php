<?php
/*
Template Name: Contact Us
*/
?>
<?php
    get_header();
?>


<?php 
    $footer = get_field('footer');;
    $cta = get_field('call_to_action');
    if($footer):
?>
    <section class="heroTemplate">
        <p>CONTACT US</p>
        <h1><?php echo the_field('heading')?></h1>
    </section>

    <footer class="footer">
        <div>
            <?php $logo = $footer['logo']?>
            <img src="<?php echo esc_url($logo['url']); ?>" class="responsiveImage logoBottom" />
            <div class="footerText">
                <p><?php echo $footer['address']?></p>
                <?php 
                    $number = $footer['phone_number'];
                    $link_url = $number['url'];
                    $link_title = $number['title'];
                ?>
                <a href="<?php echo esc_url($link_url); ?>">
                    <p><?php echo esc_html($link_title); ?></p>
                </a>
            </div>
        </div>
        <?php get_template_part('template-parts/footer', 'links')?>
    </footer>
<?php endif?>

<?php
    get_footer();
?>