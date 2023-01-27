<?php
    get_header();
?>

<?php 
    $hero = get_field('hero_section');
    $who = get_field('who_we_are');
    $what = get_field('what_we_do');
    $case = get_field('case_study_section');
    $client = get_field('client_images_section');
    $formCTA = get_field('conctact_cta');
    $footer = get_field('footer');
    if($hero):
?>
    <section class="heroSection" id="hero">
        <div>
            <h1><?php echo $hero['heading']?></h1>
            <p><?php echo $hero['paragraph']?></p>
        </div>
        <div class="callToAction">
            <a href="#" class="whiteCTA">Contact Us</a>
            <span></span>
            <a href="#" class="whiteLinedCTA">Learn More</a>
        </div>
    </section>

    <section class="whoWeAreSection">
        <div>
            <h2><?php echo $who['heading']?></h2>
            <p><?php echo $who['paragraph_1']?></p>
            <p><?php echo $who['paragraph_2']?></p>
            <div class="callToActionDiv">
                <a href="/bradley.php" class="blueLinedCTA">Learn More</a>
            </div>
        </div>
        <div class="servicesIcons">
            <div class="iconBlock">
                <div>
                    <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/paid-ads.png" class="responsiveIcon"/>
                    <p><?php echo $who['service_1']?></p>
                </div>
            </div>
            <div class="iconBlock">
                <div>
                    <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/analysis.png" class="responsiveIcon"/>
                    <p><?php echo $who['service_2']?></p>
                </div>
            </div>
            <div class="iconBlock">
                <div>
                    <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/analytics.png" class="responsiveIcon"/>
                    <p><?php echo $who['service_3']?></p>
                </div>
            </div class="iconBlock">
            <div class="iconBlock">
                <div>
                    <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/illustration.png" class="responsiveIcon"/>
                    <p><?php echo $who['service_4']?></p>
                </div>
            </div>
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
                <a href="/bradley.php" class="blueLinedCTA">Learn More</a>
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
                    'posts_per_page' => 3
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
                        <p><?php the_excerpt()?></p>
                        <span></span>
                        <a class="blueLinedCTA">Learn More</a>
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

    <section class="contactCTA">
        <div>
            <h2><?php echo $formCTA['heading']?></h2>
            <p><?php echo $formCTA['paragraph']?></p>
            <div class="contactCTADIV">
                <a href="#" class="blueLinedCTA">Contact Us</a>
            </div>
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
        <div class="footerLinks">
            <h2>Navigate</h2>
            <div>
                <a>Who We Are</a>
                <a>What We Do</a>
                <a>Case Studies</a>
                <a>Contact Us</a>
            </div>
        </div>
    </footer>
<?php endif?>

<?php
    get_footer();
?>