<?php
    get_header();
?>

<?php 
    $hero = get_field('hero_section');
    $who = get_field('who_we_are');
    $what = get_field('what_we_do');
    $case = get_field('case_study_section');
    $client = get_field('client_images_section');
    if($hero):
?>
    <?php $image = $hero['background_image']?>
    <section style="background-image: url('<?php echo esc_url($image['url'])?>')" class="heroSection" id="hero">
        <div>
            <h1><?php echo $hero['heading']?></h1>
            <p><?php echo $hero['paragraph']?></p>
        </div>
        <div class="callToAction">
            <a href="/contact" class="whiteCTA">Contact Us</a>
            <span></span>
            <a href="/who-we-are" class="whiteLinedCTA">Learn More</a>
        </div>
    </section>

    <section class="whoWeAreSection">
        <div>
            <h2><?php echo $who['heading']?></h2>
            <p><?php echo $who['paragraph_1']?></p>
            <p><?php echo $who['paragraph_2']?></p>
            <div class="callToActionDiv">
                <a href="/what-we-do" class="blueLinedCTA">What We Do</a>
            </div>
        </div>
        <div class="servicesIcons">
            <?php foreach( $who['services'] as $image ): ?>
                <div class="iconBlock">
                    <div>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="responsiveIcon"/>
                        <p><?php echo esc_html($image['title']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="whatWeDoSection">
        <div>
            <?php $image = $what['image']?>
            <img src="<?php echo esc_url($image['url'])?>" alt="<?php echo esc_attr($image['attr'])?>" class="responsiveImage"/>
        </div>
        <div>
            <h2><?php echo $what['heading']?></h2>
            <p><?php echo $what['paragraph_1']?></p>
            <p><?php echo $what['paragraph_2']?></p>
            <div class="callToActionDiv">
                <a href="/who-we-are" class="blueLinedCTA">Who We Are</a>
            </div>
        </div>
    </section>

    <section class="caseStudySection">
        <h2><?php echo $case['heading']?></h2>
        <p><?php echo $case['paragraph']?></p>
        <div class="caseStudyCards">
            <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2
                );
                $_posts = new WP_Query($args);
            ?>
            <?php if($_posts->have_posts()): while($_posts->have_posts()): $_posts->the_post();?>
                <div>
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

    <section class="clientSliderSection">
        <h2><?php echo $client['heading']?></h2>
        <p><?php echo $client['paragraph']?></p>
        
        <div class="slideTrack">
            <?php foreach( $client['logos'] as $image ): ?>
                <div class="slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo"/>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?php get_template_part('template-parts/contact', 'cta')?>

<?php endif?>

<?php
    get_footer();
?>