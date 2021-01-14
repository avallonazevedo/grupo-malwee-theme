<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
        <?php if(is_front_page()) {
            bloginfo('name');
            echo ' | ';
            bloginfo('description');
        } else {
            wp_title('|');
        } ?>
    </title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo THEME_ASSETS_DIST . '/index.css' ?>">
	<link rel="icon" href="<?php echo THEME_IMAGES . '/favicon.png' ?>">
</head>
<body <?php echo body_class(); ?>>
<main>
<section id="sub-header">
    <div class="container">
        <ul class="social-head">
            <?php
                $social = array(
                    'facebook' => 'https://facebook.com',
                    'instagram' => 'https://instagram.com',
                    'twitter' => 'https://twitter.com',
                    'youtube' => 'https://youtube.com',
                    'linkedin' => 'https://linkedin.com'
                );
            ?>
            <?php foreach ($social as $key => $social_item): ?>
                <li>
                    <a href="<?php echo $social_item ;?>" title="Siga-nos no <?php echo $social_item; ?>">
                        <img src="<?php echo THEME_IMAGES . '/icons/' . $key ?>.svg" alt="<?php echo $social_item; ?>">
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <!-- /.social-head -->
        <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'container' => 'nav',
                'container_class' => 'support-menu'
            ));
        ?>
    </div>
    <!-- /.container -->
</section>
<!-- /#sub-header -->

<header>
    <div class="container">
        <div id="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo THEME_IMAGES . '/logo-malwee.svg' ?>" alt="Logo Grupo Malwee">
            </a>
        </div>
        <!-- /#logo -->

        <?php
            wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => 'nav',
                'container_id' => 'desktop-menu'
            ));
        ?>
    </div>
    <!-- /.container -->
</header>