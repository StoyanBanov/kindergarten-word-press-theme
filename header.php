<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Brighton</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/additional.css" />

    <!-- responsive style -->
    <link href="<?php bloginfo('template_directory'); ?>/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="../index.php">
                        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" />
                        <span>
                            Brighton
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">


                            <?php
                            wp_nav_menu(array(
                                'theme_location'  => 'top-menu',
                                'menu'            => 'navigation',
                                'menu_class'      => 'navbar-nav  ',
                                'menu_id'         => 'idm',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            ));
                            ?>

                            <!--
                            <ul class="navbar-nav  ">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">
                                        Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="program.html"> Programs </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html"> Contact us</a>
                                </li>
                            </ul>
                        -->
                        </div>
                    </div>
                </nav>
            </div>
            <?php wp_head(); ?>
        </header>
        <!-- end header section -->