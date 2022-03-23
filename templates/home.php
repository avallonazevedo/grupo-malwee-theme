<?php
/**
 * Template Name: Home
 */
get_header();
?>

<section id="main-slider">
    <div id="main-slider-controls">
        <span id="main-slider-controls-count">0/0</span>
        <div id="main-slider-dots"></div>
        <button
                id="switch-main-slider-play"
                data-play-icon="<?php echo THEME_IMAGES . '/icons/play.svg' ?>"
                data-pause-icon="<?php echo THEME_IMAGES . '/icons/pause.svg' ?>">
            <img src="<?php echo THEME_IMAGES . '/icons/pause.svg' ?>" alt="Pause Icon">
        </button>
    </div>
    <!-- /#main-slider-controls -->
    <div class="embla" id="embla-carousel">
        <ul class="main-carousel embla__container">
			<?php if(have_rows('lista_de_slides')): while(have_rows('lista_de_slides')): the_row(); ?>
				<?php $slide_type = get_sub_field('tipo_de_slide'); ?>
				<?php if($slide_type === 'centered-with-video'): ?>
                    <li class="main-carousel-slide main-carousel-slide-video embla__slide cover-image">
                        <img src="<?php the_sub_field('imagem_representativa_centered_style'); ?>" alt="<?php the_sub_field('titulo_principal_centered_style'); ?>">
                        <div class="carousel-content cover-image">
                            <h3 data-aos="fade-up"><?php the_sub_field('titulo_principal_centered_style'); ?></h3>
                            <a class="modal-open" href="<?php the_sub_field('link_do_video_centered_style'); ?>">
                                <img data-aos="fade-up" src="<?php echo THEME_IMAGES . '/icons/play-white.svg' ?>" alt="Ícone Play">
                                <span data-aos="fade-up"><?php the_sub_field('legenda_do_video'); ?></span>
                            </a>
                        </div>
                        <!-- /.carousel-content -->
                    </li>

				<?php elseif($slide_type === 'only-image'):  ?>
                    <li class="main-carousel-slide main-carousel-only-image main-carousel-slide-default embla__slide cover-image">
                        <img src="<?php the_sub_field('imagem_de_fundo_only_image'); ?>" alt="Imagem">

                        <div class="carousel-content container medium">
                            <div class="carousel-text">
                                <div data-aos="fade-up">
									<?php the_sub_field('titulo_principal_left_aligned_style'); ?>
                                </div>

                                <span data-aos="fade-up">
                                        <?php echo strip_tags(get_sub_field('subtitulo_left_aligned_style'), '<span>') ?>
                                    </span>

                                <a data-aos="fade-down" href="<?php the_sub_field('link_left_aligned_style_copiar'); ?>" class="button dark-blue solid">
									<?php the_sub_field('texto_link_left_aligned_style'); ?>
                                </a>
                            </div>
                            <!-- /.carousel-text -->
                        </div>
                        <!-- /.carousel-content -->

                    </li>
				<?php else: ?>
                    <li class="main-carousel-slide main-carousel-slide-default has-circle embla__slide">
                        <div class="carousel-content container medium">
                            <div class="carousel-text">
                                <div data-aos="fade-up">
									<?php the_sub_field('titulo_principal_left_aligned_style'); ?>
                                </div>

                                <span data-aos="fade-up">
                                        <?php echo strip_tags(get_sub_field('subtitulo_left_aligned_style'), '<span>') ?>
                                </span>

                                <a data-aos="fade-down" href="<?php the_sub_field('link_left_aligned_style_copiar'); ?>" class="button dark-blue solid">
									<?php the_sub_field('texto_link_left_aligned_style'); ?>
                                </a>
                            </div>
                            <!-- /.carousel-text -->

                            <div class="carousel-image circle-image">
                                <img src="<?php the_sub_field('imagem_representativa_left_aligned_style'); ?>" alt="<?php the_sub_field('subtitulo_left_aligned_style'); ?>">
                            </div>
                            <!-- /.cover-image -->

                        </div>
                        <!-- /.carousel-content -->

                        <div class="circle purple right"></div>
                    </li>
				<?php endif; ?>
			<?php endwhile; endif; ?>
        </ul>
        <!-- /.main-carousel -->
    </div>
    <!-- /#embla-carousel.embla -->
</section>
<!-- /#main-slider -->

<section id="brands">
    <div class="container medium">
        <div data-aos="fade-up" class="brand-description">
			<?php the_field('descricao_inicial_nossas_marcas') ?>
        </div>
        <!-- /.brand-description -->
        <h3 data-aos="fade-up">
            Nossas Marcas
        </h3>

        <ul class="malwee-brand-list">
			<?php if(have_rows('lista_de_logos_nossas_marcas')): while(have_rows('lista_de_logos_nossas_marcas')): the_row(); ?>
                <li data-aos="fade-up">
                    <img class="default-image" src="<?php the_sub_field('logo_marca');?>" alt="<?php the_sub_field('nome_da_marca');?>">
                    <img class="hover-image" src="<?php the_sub_field('imagem_hover');?>" alt="<?php the_sub_field('nome_da_marca');?>">
                </li>
			<?php endwhile; endif; ?>
        </ul>
        <!-- /.malwee-brand-list -->

        <h3 data-aos="fade-bottom"><?php the_field('subtitulo_marcas'); ?></h3>

        <ul class="business-people-planet">
			<?php if(have_rows('lista_de_pilares')): while(have_rows('lista_de_pilares')): the_row(); ?>
				<?php
				$color_legend = array(
					'business' => 'blue',
					'people' => 'purple',
					'planet' => 'green'
				);
				$bg_color = $color_legend[get_sub_field('representa_o_pilar')];
				?>
                <li data-aos="fade-up">
                    <strong class="text text-<?php the_sub_field('representa_o_pilar'); ?>">
						<?php echo strtolower(get_sub_field('titulo_pilar')); ?>
                    </strong>

                    <div class="image image-<?php the_sub_field('representa_o_pilar'); ?>">
                        <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="Negócios">
                        <span class="bg-<?php echo $bg_color; ?>"><?php echo strtolower(get_sub_field('titulo_pilar')); ?></span>
                    </div>
                    <!-- /.image -->

                    <p class="text text-<?php the_sub_field('representa_o_pilar'); ?>">
						<?php the_sub_field('subtitulo_pilar'); ?>
                    </p>

                    <a href="<?php the_sub_field('link'); ?>">
						<?php the_sub_field('texto_link'); ?>
                    </a>
                </li>

			<?php endwhile; endif; ?>
        </ul>
        <!-- /.business-people-planet -->

    </div>
    <!-- /.container -->


</section>
<!-- /#brands -->

<section id="company-numbers">
    <div class="container medium">
        <div class="company-numbers-content">

			<?php if(have_rows('colunas_de_numeros')): while(have_rows('colunas_de_numeros')): the_row(); ?>
				<?php $pilar = get_sub_field('representa_o_pilar')  ?>
                <ul class="company-numbers-wrap <?php echo $pilar; ?>-numbers">
					<?php if(have_rows('lista_de_numeros')): while(have_rows('lista_de_numeros')): the_row(); ?>
                        <li>
                            <div class="number-content text text-<?php echo $pilar; ?>">
                                <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="<?php  the_sub_field('numero');?>">00</strong>
                                <span class="number-symbol"><?php the_sub_field('unidade');?></span>
                            </div>
                            <!-- /.number-content -->
                            <span class="number-legend"><?php the_sub_field('descricao');?></span>
                        </li>
					<?php endwhile; endif; ?>
                </ul>
			<?php endwhile; endif; ?>
        </div>
        <!-- /.company-numbers-content -->
    </div>
    <!-- /.container medium -->
</section>
<!-- /#company-numbers -->

<section id="home-middle">
    <div class="esg-plan-2030">
        <div class="parallax" data-parallax-image="<?php the_field('imagem_de_fundo_parallax_1') ?>"></div>
        <div class="container medium">
            <p>
				<?php the_field('titulo_parallax_1') ?>
            </p>
            <a href="<?php the_field('link_parallax_1'); ?>">
				<?php the_field('texto_link_parallax_1'); ?>
            </a>
        </div>
        <!-- /.container medium -->

		<?php if(!wp_is_mobile()): ?>
            <svg class="bg-circle" xmlns="http://www.w3.org/2000/svg" width="648" height="648" viewBox="0 0 648 648">
                <circle id="Elipse_25" data-name="Elipse 25" cx="324" cy="324" r="324" fill="#0d1136"/>
            </svg>
		<?php endif; ?>


        <div class="esg-plan-2030-logo">
            <img src="<?php the_field('imagem_representativa_parallax_1'); ?>" alt="Plano ESG 2030">
        </div>
    </div>
    <!-- /.esg-plan-2030 -->

    <section class="transform-your-business">
        <div class="parallax" data-parallax-image="<?php the_field('imagem_de_fundo_parallax_2') ?>"></div>
        <div class="container medium">
            <div class="content">
                <strong><?php the_field('titulo_parallax_2') ?></strong>
                <p>
					<?php the_field('descricao_parallax_2'); ?>
                </p>
                <a href="<?php the_field('link_parallax_2'); ?>" class="button white outlined"><?php the_field('texto_link_parallax_2'); ?></a>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container medium -->
    </section>
    <!-- /.instituto-malwee-home -->
</section>
<!-- /#home-middle -->

<section id="instituto-malwee" class="bg-light-grey">
    <div class="container medium">
        <div class="content">
            <div class="description">
                <img data-aos="fade-up" src="<?php the_field('logo_instituto_malwee'); ?>" alt="Logo Instituto Malwee">
                <div data-aos="fade-up">
					<?php the_field('descricao_instituto_malwee'); ?>
                </div>
                <a data-aos="fade-up" href="<?php the_field('link_instituto_malwee_copiar'); ?>" class="button dark-blue outlined">
					<?php the_field('texto_link_instituto_malwee'); ?>
                </a>
            </div>
            <!-- /.description -->

            <div class="cover-image" data-aos="fade-left">
                <img src="<?php the_field('imagem_representativa_instituto_malwee'); ?>" alt="Foto Instituto Malwee">
            </div>
            <!-- /.cover-image -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container medium -->


    <div class="circle right purple" aria-label="Círculo decorativo"></div>

</section>
<!-- /#instituto-malwee -->

<?php get_footer(); ?>
