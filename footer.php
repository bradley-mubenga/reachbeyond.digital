
<footer>
    <div class="footer">
        <div class="logoImageDiv">
            <img src="<?php echo get_theme_file_uri("assets/images/logo-blue.png") ?>" class="responsiveImage logoBottom" />
            <div class="footerText">
                <p>1 Mernda Drive, Melbourne, Australia</p>
                <?php 
                    $number = $footer['phone_number'];
                    $link_url = $number['url'];
                    $link_title = $number['title'];
                ?>
                <a href="tel:+61390135488" class="phoneNumber">+61 3 9013 5488</a>
            </div>
        </div>
        <div class="footerLinks">
            <h2>Navigate</h2>
            <div>
                <a href="/">Home</a>
                <a href="/who-we-are">Who We Are</a>
                <a href="/what-we-do">What We Do</a>
                <a href="/case-study">Case Studies</a>
                <a href="/contact">Contact Us</a>
            </div>
        </div>
    </div>
    <div class="bottomNote">
        <p>Made with WordPress by <a href="https://creativebradley.com">Creative Bradley</a></p>
    </div>
</footer>
<?php
    wp_footer();
?>

</body>
</html> 