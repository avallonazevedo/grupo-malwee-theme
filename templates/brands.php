<?php
	/**
	 * Template Name: Brands
	 */

	get_header();
?>


<section id="brand-intro" class="cover-image bg-image">
    <img data-aos="fade" src="<?php echo THEME_IMAGES . '/brands/malwee-intro.jpg' ?>" alt="Malwee">
    <h1 data-aos="fade-up" data-aos-delay="200" class="text text-white"><?php the_title(); ?></h1>
</section>
<!-- /#brand-intro -->

<section id="brand-disclaimer" class="bg-light-grey">
    <div class="container small text text-dark-blue">
        <h2 data-aos="fade-up">Moda sem ponto final.</h2>
        <p data-aos="fade-up" data-aos-delay="200">A Malwee faz moda sem ponto final. Roupas que duram e não se perdem a cada coleção. Feitas de um jeito mais sustentável. Atemporal e democrática, para diferentes biotipos, idades e estilos.</p>
    </div>
    <!-- /.container small -->
</section>
<!-- /#brand-disclaimer -->

<section id="brand-manifest">
    <span class="text text-dark-blue" data-aos="fade-up">Manifesto da Marca</span>
    <h2 class="text text-dark-blue" data-aos="fade-up" data-aos-delay="200">Não dá pra trocar de mundo como quem troca de roupa</h2>

    <div class="manifest-video cover-image">
        <img data-aos="fade" src="<?php echo THEME_IMAGES . '/temporary/aqui-tem-malwee.jpg' ?>" alt="Manifesto da Marca <?php the_title(); ?>">
        <a data-aos="fade-down" data-aos-delay="200" class="modal-open" href="#0">
            <img src="<?php echo THEME_IMAGES . '/icons/play-white.svg' ?>" alt="Ícone Play">
        </a>
    </div>
</section>
<!-- /#brand-manifest -->

<ul class="brand-information">
    <li class="text text-dark-blue" data-aos="fade-up">
        <strong>Acesse o ecommerce</strong>
        <p>Saiba mais sobre nossos produtos e coleções acessando nosso ecommerce.</p>
        <a class="button solid dark-blue" href="#0">Acessar</a>
    </li>

    <li class="text text-dark-blue" data-aos="fade-up" data-aos-delay="100">
        <strong>Seja um revendedor</strong>
        <p>Entre em contato e descubra como você pode começar a vender Malwee.</p>
        <a class="button solid dark-blue" href="#0">Acessar</a>
    </li>

    <li class="text text-dark-blue" data-aos="fade-up" data-aos-delay="200">
        <strong>Seja um franqueado</strong>
        <p>Saiba mais sobre as vantagens de ser um franqueado da marca.</p>
        <a class="button solid dark-blue" href="#0">Acessar</a>
    </li>

    <li class="text text-dark-blue" data-aos="fade-up" data-aos-delay="300">
        <strong>Seja um franqueado</strong>
        <p>Acompanhe o dia a dia da marca e fique sabendo de todas as novidades.</p>

        <div class="brand-social-list">
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
                    <a href="<?php echo $social_item ;?>" title="Siga-nos no <?php echo $social_item; ?>">
                        <img src="<?php echo THEME_IMAGES . '/icons/' . $key ?>-blue.svg" alt="<?php echo $social_item; ?>">
                    </a>
                <?php endforeach; ?>
        </div>
        <!-- /.social-list -->
    </li>
</ul>
<!-- /.brand-information -->

<?php get_footer(); ?>
