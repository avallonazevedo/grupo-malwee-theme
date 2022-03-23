<?php
	/**
	 * Template Name: People
	 */
	get_header();
?>

<section id="intro" class="people bg-purple">
	<div class="content">
		<div class="intro-text" data-aos="fade-right">
			<span><?php the_field('titulo_introducao'); ?></span>
		</div>
		<!-- /.intro-text -->

		<div class="cover-image" data-aos="fade-left">
			<img src="<?php the_field('imagem_introducao'); ?>" alt="<?php the_field('titulo_introducao'); ?>">
		</div>
		<!-- /.cover-image -->
	</div>
	<!-- /.content -->

    <div class="circle right green"></div>
</section>
<!-- /#intro.business -->

<section id="benefits">
    <div class="container small">
        <div class="content">
            <div class="entry-text text dark-blue" data-aos="fade-right">
	            <?php the_field('titulo_descritivo'); ?>
            </div>
            <!-- /.entry-text text blue -->

            <div class="description text text-dark-blue" data-aos="fade-left" data-aos-delay="100">
                <p>
	                <?php the_field('descricao_descricao'); ?>
                </p>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container medium -->
</section>
<!-- /#benefits -->

<section id="make-part-of-your-team" class="bg-dark-blue">
    <div class="container medium">
        <div class="content text text-white" data-aos="fade-up">
            <h4><?php the_field('titulo_faca_parte_do_nosso_time'); ?></h4>
            <p>
	            <?php the_field('descricao_faca_parte_do_nosso_time'); ?>
            </p>
            <a class="button solid purple text text-white uppercase rounded" href="<?php the_field('link_parte_do_nosso_time'); ?>">
	            <?php the_field('texto_link_parte_do_nosso_time'); ?>
            </a>
        </div>
        <!-- /.content -->

        <div class="cover-image" data-aos="fade-left">
            <img class="rounded-image" src="<?php the_field('imagem_representativa_parte_do_nosso_time'); ?>" alt="<?php the_field('titulo_faca_parte_do_nosso_time'); ?>">
        </div>
    </div>
    <!-- /.container medium -->
</section>

<section id="people-carousel-wrapper" class="bg-purple" data-aos="fade-up">
    <div class="people-carousel">
       <div class="swiper-wrapper">
	       <?php if(have_rows('lista_de_slides_carousel_de_colaboradores')): while(have_rows('lista_de_slides_carousel_de_colaboradores')): the_row(); ?>
                <div class="swiper-slide">
                    <div class="people-carousel-content">
                        <div class="cover-image">
                            <img class="rounded-image" src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
                        </div>
                        <!-- /.cover-image -->

                        <div class="content text text-white">
                            <strong><?php the_sub_field('nome'); ?>,</strong>
                            <span><?php the_sub_field('legenda_descritiva'); ?></span>
                            <p><?php the_sub_field('descricao'); ?></p>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.people-carousel-content -->
                </div>
                <!-- /.swiper-slide -->
            <?php endwhile; endif; ?>
        </div>
        <!-- /.swiper-wrapper -->

        <div class="people-carousel-bullets"></div>

        <button type="button" class="people-carousel-prev arrow-back">
            <img src="<?php echo THEME_IMAGES . '/icons/arrow-prev-white.svg' ?>" alt="Ícone seta esquerda">
        </button>

        <button type="button" class="people-carousel-next arrow-next">
            <img src="<?php echo THEME_IMAGES . '/icons/arrow-next-white.svg' ?>" alt="Ícone seta direita">
        </button>
    </div>
    <!-- /.people-carousel -->
</section>
<!-- /#people-carousel -->

<?php if(have_rows('box_-_conteudo_+_imagem_1')): while(have_rows('box_-_conteudo_+_imagem_1')): the_row(); ?>
    <div class="description-with-image image-right bg-white">
        <div class="description">
            <span class="text text-dar-blue" data-aos="fade-down"><?php the_sub_field('label_descritiva'); ?></span>
            <h4 class="text text-people" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

            <div data-aos="fade-up" class="text text-dark-blue">
	            <?php the_sub_field('descricao'); ?>
            </div>
        </div>
        <!-- /.description -->

        <div class="cover-image" data-aos="fade-left" data-aos-delay="200">
            <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
        </div>
        <!-- /.cover-image -->
    </div>
    <!-- /.description-with-image image-right -->
<?php endwhile; endif; ?>

<?php if(have_rows('box_-_conteudo_+_imagem_2')): while(have_rows('box_-_conteudo_+_imagem_2')): the_row(); ?>
    <div class="description-with-image image-left bg-white">
        <div class="description">
            <span class="text text-dar-blue" data-aos="fade-down"><?php the_sub_field('label_descritiva'); ?></span>
            <h4 class="text text-people" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

            <div data-aos="fade-up" class="text text-dark-blue">
	            <?php the_sub_field('descricao'); ?>
            </div>
        </div>
        <!-- /.description -->

        <div class="cover-image" data-aos="fade-left" data-aos-delay="200">
            <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
        </div>
        <!-- /.cover-image -->
    </div>
    <!-- /.description-with-image image-right -->
<?php endwhile; endif; ?>

<div id="our-way">
    <strong class="text text-people"><?php the_field('titulo_carousel_final'); ?></strong>
    <div class="manifest-video cover-image">
        <img data-aos="fade" src="<?php the_field('imagem_de_fundo_video_descritivo'); ?>" alt="<?php the_field('legenda_video_descritivo'); ?>">
        <a target="_blank" data-aos="fade-down" data-aos-delay="200" class="modal-open" href="<?php the_field('link_do_video_video_descritivo'); ?>">
            <img src="<?php echo THEME_IMAGES . '/icons/play-white.svg' ?>" alt="Ícone Play">
        </a>
    </div>
    <span class="text text-dark-blue"><?php the_field('legenda_video_descritivo'); ?></span>
</div>
<!-- /#our-way -->

<?php get_footer(); ?>
