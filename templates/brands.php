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

<?php get_footer(); ?>
