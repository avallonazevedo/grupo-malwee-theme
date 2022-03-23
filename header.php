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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo THEME_ASSETS_DIST . '/index.css?v=1.38' ?>">
	<link rel="icon" href="<?php echo THEME_IMAGES . '/favicon.png' ?>">
</head>

<?php global $malwee_settings; ?>

<body <?php echo body_class(); ?>>
<main>
<section id="sub-header" data-aos="fade-up">
    <div class="container">
        <ul class="social-head">
            <?php
                $social = array(
	                'facebook' => $malwee_settings['link_facebook'],
	                'instagram' => $malwee_settings['link_instagram'],
	                'youtube' => $malwee_settings['link_youtube'],
	                'linkedin' => $malwee_settings['link_linkedin']
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
    <div class="container mobile-large">
        <div id="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php echo THEME_IMAGES . '/brands/logo-grupo-malwee.png' ?>" alt="Logo Grupo Malwee">
            </a>
        </div>
        <!-- /#logo -->

        <button type="button" id="toggle-mobile-menu">
            <span></span>
        </button>

        <?php
            wp_nav_menu(array(
                'theme_location' => 'main',
                'container' => 'nav',
                'container_id' => 'desktop-menu',
            ));
        ?>
    </div>
    <!-- /.container -->
</header>

<?php
    wp_nav_menu(array(
        'theme_location' => 'main',
        'container' => 'nav',
        'container_id' => 'mobile-menu',
    ));
?>
