<?php
/*
Template Name: Who We Are
*/
?>
<?php
    get_header();
?>


<?php 
    $footer = get_field('footer');
    $core_values = get_field('core_values');
    $team = get_field('team_pictures');
    $founder = get_field('founder_section');
    $cta = get_field('call_to_action');
    if($footer):
?>
    <section class="heroTemplate">
        <p>WHO WE ARE</p>
        <h1><?php echo the_field('heading')?></h1>
    </section>
    
    <section class="coreValuesSection">
        <div>
            <h2><?php echo $core_values['heading']?></h2>
        </div>
        <div>
            <?php echo $core_values['paragraph']?>
        </div>
    </section>

    <section class="meetOurTeamSection">
        <h2><?php echo $team['heading']?></h2>
        <div class="teamPictures">
            <?php foreach( $team['team_members'] as $image ): ?>
                <div>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="teamPicture"/>
                    <p><?php echo esc_attr($image['title']); ?></p>
                    <p><?php echo esc_html($image['caption']);?></p>
                    <p><small><?php echo esc_html($image['description']);?></small></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="founderSection">
        <h2><?php echo $founder['heading']?></h2>
        <div class="founderSectionDiv">
            <div class="imageAndSignature">
                <img src="<?php echo esc_url($founder['image']['url']) ?>" class="responsiveImage"/>
                <div>
                    <img src="<?php echo esc_url($founder['signature']['url']) ?>" class="signatureImage"/>
                </div>
            </div>
            <div class="founderText">
                <?php echo $founder['paragraph'];?>
            </div>
        </div>
    </section>

    <section class="whoCallToAction">
        <h2><?php echo $cta['heading'];?></h2>
        <p><?php echo $cta['paragraph'];?></p>
        <div>
            <a class="whiteCTA">
                Contact Us
            </a>
        </div>
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