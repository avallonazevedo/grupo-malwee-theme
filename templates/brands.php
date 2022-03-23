<?php
	/**
	 * Template Name: Brands
	 */

	get_header();
?>


<section id="brand-intro" class="cover-image bg-image">
    <?php the_post_thumbnail('full', array( 'alt' => get_the_title())); ?>
    <img class="brand-logo" src="<?php the_field('imagem_marca'); ?>" alt="<?php the_title(); ?>">
</section>
<!-- /#brand-intro -->

<section id="brand-disclaimer" class="bg-light-grey">
    <div class="container small text text-dark-blue">
        <h2 data-aos="fade-up"><?php the_field('titulo_marca'); ?></h2>
        <p data-aos="fade-up" data-aos-delay="200">
            <?php the_field('descricao_marca'); ?>
        </p>
    </div>
    <!-- /.container small -->
</section>
<!-- /#brand-disclaimer -->

<section id="brand-manifest">
    <div class="manifest-video cover-image">
        <div data-aos="fade-up" class="video-container">
		    <?php the_field('video_marca'); ?>
        </div>
        <!-- /.video-container -->
    </div>
</section>
<!-- /#brand-manifest -->

<ul class="brand-information">
    <?php if(have_rows('conteudo_de_apoio')): while(have_rows('conteudo_de_apoio')): the_row(); ?>
    <li class="text text-dark-blue" data-aos="fade-up">
        <strong><?php the_sub_field('titulo'); ?></strong>
        <p><?php the_sub_field('descricao'); ?></p>
        <?php if(get_sub_field('tipo_de_conteudo') === 'Link'): ?>
            <a class="button solid dark-blue" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('texto_link'); ?></a>
        <?php else: ?>
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
        <?php endif; ?>
    </li>
    <?php endwhile; endif; ?>
</ul>

<?php get_footer(); ?>
