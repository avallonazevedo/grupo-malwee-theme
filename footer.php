<?php
    global $malwee_settings;
    $is_brand_page = is_page_template('templates/brands.php');
    $page_id = get_the_ID();
    $must_enable_blog = !is_page_template('templates/malwee-group.php') && !is_page_template('templates/blog.php');
?>

<?php if($must_enable_blog): ?>
    <?php
        $posts = new WP_Query(array(
                'type' => 'post',
                'posts_per_page' => 4,
                'post__in' => get_field('posts_em_destaque', get_the_ID())
        ));

        if($posts->have_posts() && !empty(get_field('posts_em_destaque'))):
     ?>

    <section id="blog">
        <div class="container">
            <h2 class="text blue" data-aos="fade-up">Notícias</h2>
        </div>
        <!-- /.container -->

    <div id="more-posts">
        <ul class="more-posts-content" data-aos="fade-up">
           <?php while ($posts->have_posts()): $posts->the_post(); ?>
               <li>
                   <div class="post-image wrapper-image">
                       <?php the_post_thumbnail('medium', array(
                               'alt' => get_the_title(),
                       )); ?>
                   </div>
                   <!-- /.post-image -->
                   <h3 class="entry-title">
                       <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                   </h3>
                   <a class="read-more" href="<?php echo the_permalink() ?>">Saiba mais</a>
               </li>
           <?php endwhile; ?>
        </ul>
    </div>

        <div class="see-more" data-aos="fade-up">
            <a href="<?php echo home_url('/blog') ?>" class="button dark-blue outlined">Ver mais notícias</a>
        </div>
    </section>
            <!-- /#blog -->
    <?php endif; ?>


<?php endif; ?>

<?php if(!is_page_template('templates/malwee-group.php')): ?>
<section id="malwee-social-wrap" class="text text-dark-blue">
    <div class="container medium" data-aos="fade-down">
        <strong>Acompanhe a gente nas redes sociais</strong>

	    <?php
	    $social = array(
		    'facebook' => $malwee_settings['link_facebook'],
		    'instagram' => $malwee_settings['link_instagram'],
		    'youtube' => $malwee_settings['link_youtube'],
		    'linkedin' => $malwee_settings['link_linkedin']
	    );
	    ?>
	    <div>
		    <?php foreach ($social as $key => $social_item): ?>
                <a href="<?php echo $social_item ;?>" title="Siga-nos no <?php echo $social_item; ?>">
                    <img src="<?php echo THEME_IMAGES . '/icons/' . $key ?>-blue.svg" alt="<?php echo $social_item; ?>">
                </a>
		    <?php endforeach; ?>
        </div>
    </div>
    <!-- /.container medium -->
</section>
<!-- /#malwee-social-wrap -->
<?php endif; ?>
<footer data-aos="fade-up">
    <div class="footer-column brands-column">
        <div id="logo-footer">
            <img src="<?php echo THEME_IMAGES . '/brands/malwee-white.svg' ?>" alt="Logo Grupo Malwee">
        </div>
        <!-- /#logo-footer -->
        <img class="brands" src="<?php echo THEME_IMAGES . '/brands/brand-list-white.svg' ?>" alt="Malwee Marcas">
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
	    <?php dynamic_sidebar( 'coluna_rodape_1' ); ?>
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
	    <?php dynamic_sidebar( 'coluna_rodape_2' ); ?>
    </div>
    <!-- /.footer-column -->

    <div class="footer-column">
        <div class="footer-column-content">
            <h4>Conecte-se</h4>
        </div>
        <!-- /.footer-column-content -->

        <div class="footer-column-content">
            <ul class="social-list">
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
            <!-- /.social-list -->
        </div>
        <!-- /.footer-column-content -->

        <h4>Entre em Contato</h4>

        <div class="footer-column-content">
            <address>
		        <?php echo $malwee_settings['endereco']; ?>
                <ul>
                    <li><img src="<?php echo THEME_IMAGES . '/icons/phone-white.svg' ?>" alt="Ícone Telefone"><?php echo $malwee_settings['telefone']; ?></li>
                    <li><img src="<?php echo THEME_IMAGES . '/icons/envelope-white.svg' ?>" alt="Ícone Envelope"><?php echo $malwee_settings['email']; ?></li>
                </ul>
            </address>
        </div>
        <!-- /.footer-column-content -->
    </div>
    <!-- /.footer-column -->
</footer>

<section id="copyright">
    <span><?php echo date('Y') ?>. Grupo Malwee Ltda. Todos os direitos reservados</span>

	<?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => 'nav',
            'container_id' => 'footer-menu',
        ));
     ?>
</section>
<!-- /#copyright -->
</main>
<script src="https://cdn.jsdelivr.net/npm/universal-parallax@1.3.2/dist/universal-parallax.min.js"></script>
<script src="<?php echo THEME_ASSETS_DIST  . '/index.js?v=1.4' ?>"></script>
<?php wp_footer(); ?>
</body>
</html>
