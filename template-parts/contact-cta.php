<section class="contactCTA">
    <div>
        <h2>We're Ready To Help You</h2>
        <p>Reach out today and let's see how we can add value to your business.</p>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <section class="contactFormSection">
                <div>
                    <?php the_content(); ?>
                </div>
            </section>
        <?php endwhile; else: endif?>
    </div>
</section>