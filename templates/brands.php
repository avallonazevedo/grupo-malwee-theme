<?php
	/**
	 * Template Name: Brands
	 */

	get_header();
?>


<section id="brand-intro" class="cover-image bg-image">
    <img src="<?php echo THEME_IMAGES . '/brands/malwee-intro.jpg' ?>" alt="Malwee">
    <h1 class="text text-white"><?php the_title(); ?></h1>
</section>
<!-- /#brand-intro -->

<section id="brand-disclaimer" class="bg-light-grey">
    <div class="container small text text-dark-blue">
        <h2>Moda sem ponto final.</h2>
        <p>A Malwee faz moda sem ponto final. Roupas que duram e não se perdem a cada coleção. Feitas de um jeito mais sustentável. Atemporal e democrática, para diferentes biotipos, idades e estilos.</p>
    </div>
    <!-- /.container small -->
</section>
<!-- /#brand-disclaimer -->

<section id="brand-manifest">
    <span class="text text-dark-blue">Manifesto da Marca</span>
    <h2 class="text text-dark-blue">Não dá pra trocar de mundo como quem troca de roupa</h2>

    <div class="manifest-video cover-image">
        <img src="<?php echo THEME_IMAGES . '/temporary/aqui-tem-malwee.jpg' ?>" alt="Manifesto da Marca <?php the_title(); ?>">
        <a class="modal-open" href="#0">
            <img src="<?php echo THEME_IMAGES . '/icons/play-white.svg' ?>" alt="Ícone Play">
        </a>
    </div>

</section>
<!-- /#brand-manifest -->

<?php get_footer(); ?>
