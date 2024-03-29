<?php
/*
Template Name: Who We Are
*/
?>

<?php
    get_header();
?>


<?php 
    $core_values = get_field('core_values');
    $team = get_field('team_pictures');
    $founder = get_field('founder_section');
    $hero = get_field('hero_section');
    if($hero):
?>
    <?php $image = $hero['background_image']?>
    <section style="background-image: url('<?php echo esc_url($image['url'])?>')" class="heroTemplate">
        <p>WHO WE ARE</p>
        <h1><?php echo $hero['heading'];?></h1>
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

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>