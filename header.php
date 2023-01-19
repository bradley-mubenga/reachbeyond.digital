<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        wp_head(); 
    ?>
</head>
<body>
<header>
    <nav class="navbar">
        <div class="brandTitle">
            <a class="navbarBrand" href="#">
                <?php
                    if (function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img src="<?php echo $logo[0] ?>" alt="Bootstrap">
            </a>
        </div>

        <a href="#" class="toggleButton" id="toggleButton">
            <img src="/wp-content/themes/reachbeyond-wp-template/assets/images/menu.png" id="icon" width="65px" height="65px"/>
        </a>

        <div class="navbarLinks navbarLinksActive" id="navbarLinks">
            <ul>
                <li>
                    <a href="#">Who We Are</a>
                </li>
                <li>
                    <a href="#">What We Do</a>
                </li>
                <li>
                    <a href="#">Case Studies</a>
                </li>
                <li>
                    <a href="#" class="whiteCTA">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>