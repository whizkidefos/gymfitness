<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gym Fitness</title>
    <link rel="shortcut icon" href="/img/training.png" type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src='<?php echo get_template_directory_uri() . "\img\logo.svg" ?>' alt="GymFitness Logo">
                    </a>
                </div><!-- Logo -->
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container'      => 'nav',
                        'container_class'=> 'main-menu'
                    );
                    wp_nav_menu( $args );
                ?>
            </div><!-- navigation bar -->
        </div><!-- container -->
    </header>
