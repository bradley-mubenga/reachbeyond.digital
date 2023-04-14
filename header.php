<!DOCTYPE html>
<html lang="en" id="html">
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
            <a class="navbarBrand" href="/">
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
            <img src="https://ik.imagekit.io/yrdximse9a/reachbeyond/menu.png?updatedAt=1681212232004" id="icon" width="65px" height="65px"/>
        </a>

        <div class="navbarLinks navbarLinksActive" id="navbarLinks">
            <ul>
                <li>
                    <a href="/about">Who We Are</a>
                </li>
                <li class="dropDownMenu">
                    <a href="#" class="dropDownButton" id="dropDownButton">What We Do</a>
                    <ul class="dropDownItems" id="dropDownItems">
                        <a href="/paid-ads">PPC</a>
                        <a href="/remarketing">Paid Social</a>
                        <a href="/conversion-tracking">Conversion Tracking</a>
                        <a href="/graphic-design">Graphic design</a>
                        <a href="/campaign-audits">Campaign audits</a>
                    </ul>
                </li>
                <li>
                    <a href="/case-study">Case Studies</a>
                </li>
                <li>
                    <a href="/contact" class="whiteCTA">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>