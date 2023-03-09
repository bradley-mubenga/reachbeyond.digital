
<footer class="footer">
    <div class="logoImageDiv">
        <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/logo-blue.png" class="responsiveImage logoBottom" />
        <div class="footerText">
            <p>1 Mernda Drive, Melbourne, Australia</p>
            <?php 
                $number = $footer['phone_number'];
                $link_url = $number['url'];
                $link_title = $number['title'];
            ?>
            <a href="tel:+1234567890">
                <p>(123) 456 7890</p>
            </a>
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
</footer>

<?php
    wp_footer();
?>

</body>
</html> 