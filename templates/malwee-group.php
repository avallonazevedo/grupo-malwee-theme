<?php
	/**
	 * Template Name: Grupo Malwee
	 */
	get_header();
?>
<video src="<?php echo THEME_VIDEOS . '/group-intro.mp4' ?>" loop autoplay playsinline muted></video>

<section class="malwee-group-intro">
	<div class="container medium">
		<h3 class="text text-dark-blue" data-aos="fade-up"><?php the_field('titulo_introducao'); ?></h3>
		<ul class="group-circles">
            <?php if(have_rows('lista_de_circulos_representativos')): while(have_rows('lista_de_circulos_representativos')): the_row(); ?>
                <li class="<?php the_sub_field('representa_o_pilar'); ?>-circle" data-aos="fade-right">
                    <strong class="text text-<?php the_sub_field('representa_o_pilar'); ?>"><?php the_sub_field('titulo'); ?></strong>
                    <p><?php the_sub_field('descricao'); ?></p>
                </li>
            <?php endwhile; endif; ?>
		</ul>

		<h4 data-aos="fade-down" class="text text-people"><?php the_field('titulo_valores'); ?></h4>
	</div>
	<!-- /.container medium -->
</section>

<div class="carousel-our-values">
	<div class="swiper-wrapper">
        <?php if(have_rows('carousel_de_valores')): while(have_rows('carousel_de_valores')): the_row(); ?>
		<div class="swiper-slide our-values-slide cover-image">
			<img src="<?php the_sub_field('imagem_de_fundo'); ?>" alt="<?php the_sub_field('nome_do_valor'); ?>">
            <div class="container medium">
                <div class="content text text-dark-blue">
                    <strong><?php the_sub_field('nome_do_valor'); ?></strong>
                    <p>
	                    <?php the_sub_field('descricao'); ?>
                    </p>
                </div>
            </div>
            <!-- /.container medium -->
		</div>
		<!-- /.swiper-slide cover-image -->

        <?php endwhile; endif; ?>
	</div>

    <button type="button" class="our-values-carousel-prev arrow-back">
        <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-back.svg' ?>" alt="Ícone seta esquerda">
    </button>

    <button type="button" class="our-values-carousel-next arrow-next">
        <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-next.svg' ?>" alt="Ícone seta direita">
    </button>
</div>


<?php if(have_rows('disclaimer_valores')): while(have_rows('disclaimer_valores')): the_row(); ?>
<div class="our-team bg-light-grey">
    <div class="content" data-aos="fade-up">
        <p>
            <?php the_sub_field('texto'); ?>
        </p>
        <a class="button outlined dark-blue" href="<?php the_sub_field('link'); ?>">
	        <?php the_sub_field('texto_link'); ?>
        </a>
    </div>
    <!-- /.content -->
</div>
<!-- /.our-team -->
<?php endwhile; endif;?>

<?php if(have_rows('box_-_conteudo_+_texto_descritivo')): while(have_rows('box_-_conteudo_+_texto_descritivo')): the_row(); ?>
    <div class="featured-title-with-description">
        <div class="title bg-light-grey">
            <span data-aos="fade-up" class="text text-dark-blue"><?php the_sub_field('label_descritiva'); ?></span>
            <strong data-aos="fade-up" class="text text-dark-blue">
	            <?php the_sub_field('titulo'); ?>
            </strong>
        </div>
        <!-- /.title -->

        <div class="description bg-green text text-white" data-aos="fade-left" data-aos-delay="200">
	        <?php the_sub_field('descricao_completa'); ?>
        </div>
        <!-- /.description bg-green -->
    </div>
    <!-- /.featured-title-with-description -->
<?php endwhile; endif; ?>

<div class="timeline-carousel">
    <div class="swiper-wrapper">
        <?php if(have_rows('carousel_de_anos')): while(have_rows('carousel_de_anos')): the_row(); ?>
        <div class="swiper-slide timeline-slide">
            <div class="cover-image">
                <img src="<?php the_sub_field('imagem'); ?>" alt="Linha do tempo - Ano de <?php the_sub_field('ano'); ?>">
            </div>
            <!-- /.cover-image -->

            <div class="content">
                <strong class="year"><?php the_sub_field('ano'); ?></strong>
                <p><?php the_sub_field('descricao'); ?></p>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.swiper-slide timeline-slide -->
        <?php endwhile; endif; ?>
    </div>
    <!-- /.swiper-wrapper -->

    <button type="button" class="timeline-carousel-prev arrow-back">
        <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-back.svg' ?>" alt="Ícone seta esquerda">
    </button>

    <button type="button" class="timeline-carousel-next arrow-next">
        <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-next.svg' ?>" alt="Ícone seta direita">
    </button>
</div>
<!-- /.timeline-carousel -->

<section id="know-more-about-our-history">
    <div class="container medium">
        <div class="cover-image" data-aos="fade-right">
            <img class="rounded-image" src="<?php the_field('imagem_representativa_nossa_historia'); ?>" alt="<?php the_field('descricao_representativa_nossa_historia'); ?>">
        </div>
        <!-- /.cover-image -->

        <div class="content" data-aos="fade-left">
            <strong><?php the_field('descricao_representativa_nossa_historia'); ?></strong>

            <a href="<?php the_field('link_representativa_nossa_historia'); ?>"><?php the_field('texto_link_representativa_nossa_historia'); ?></a>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container medium -->
</section>
<!-- /#know-more-about-our-history -->

<section id="where-do-we-produce">
    <div class="container medium">
        <h3 class="text text-dark-blue"><?php the_field('titulo_localidades'); ?></h3>
    </div>
    <!-- /.container medium -->

    <div class="carousel-where-do-we-produce">
        <div class="swiper-wrapper">
            <?php if(have_rows('carousel_de_localidades')): while(have_rows('carousel_de_localidades')): the_row(); ?>
                <div class="swiper-slide where-do-we-produce-slide">
                    <div class="description-with-image image-left bg-light-grey">
                        <div class="description">
                            <h4 class="text text-dark-blue" data-aos="fade-up"><?php the_sub_field('localidade'); ?></h4>


                            <div data-aos="fade-up">
                                <p class="text text-dark-blue">
	                                <?php the_sub_field('descricao'); ?>
                                </p>
                            </div>
                        </div>
                        <!-- /.description -->

                        <div class="cover-image" data-aos="fade-right" data-aos-delay="200">
                            <img src="<?php the_sub_field('imagem'); ?>" alt="´Malwee produz moda em <?php the_sub_field('localidade'); ?>">
                        </div>
                        <!-- /.cover-image -->
                    </div>
                    <!-- /.description-with-image image-right -->
                </div>
                <!-- /.swiper-slide where-do-we-produce-slide -->
            <?php endwhile; endif; ?>
        </div>
        <!-- /.swiper-wrapper -->

        <button type="button" class="where-do-we-produce-carousel-prev arrow-back">
            <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-back.svg' ?>" alt="Ícone seta esquerda">
        </button>

        <button type="button" class="where-do-we-produce-carousel-next arrow-next">
            <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-next.svg' ?>" alt="Ícone seta direita">
        </button>

    </div>
    <!-- /.carousel-where-do-we-produce -->
</section>

<section id="instituto-malwee" class="small bg-green">
    <div class="container medium">
        <div class="content">
            <div class="description">
                <img data-aos="fade-up" src="<?php the_field('logo_instituto_malwee'); ?>" alt="Logo Instituto Malwee">
                <p data-aos="fade-up">
                    <?php the_field('titulo_instituto_malwee'); ?>
                </p>

                <div data-aos="fade-up">
                    <span class="text text-white">
                        <?php the_field('descricao_instituto_malwee_copiar'); ?>
                    </span>

                    <a data-aos="fade-up" href="<?php the_field('link_instituto_malwee'); ?>" class="text text-dark-blue"><?php the_field('texto_link_instituto_malwee'); ?></a>
                </div>
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

<section id="our-prizes">
    <div class="image bg-light-grey">
        <img src="<?php echo THEME_IMAGES . '/prizes-featured-image.png' ?>" alt="Prêmios Grupo Malwee">
        <strong class="text text-dark-blue"><?php the_field('titulo_premios'); ?></strong>
    </div>
    <!-- /.image -->

    <div class="our-prizes-carousel">
        <div class="swiper-wrapper">
            <?php if(have_rows('carousel_de_premios')): while(have_rows('carousel_de_premios')): the_row(); ?>
                <div class="swiper-slide prize-slide">
                    <img src="<?php the_sub_field('logo_premio'); ?>" alt="<?php the_sub_field('nome_do_premio'); ?>">

                    <strong><?php the_sub_field('nome_do_premio'); ?></strong>
                    <span class="year"><?php the_sub_field('ano_do_premio'); ?></span>

                    <p>
	                    <?php the_sub_field('descricao_do_premio'); ?>
                    </p>

                    <a href="<?php the_sub_field('link_do_premio'); ?>">Saiba mais</a>

                </div>
                <!-- /.swiper-slide prize-slide -->
            <?php endwhile; endif; ?>
        </div>
        <!-- /.swiper-wrapper -->

        <button type="button" class="our-prizes-carousel-prev arrow-back">
            <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-back.svg' ?>" alt="Ícone seta esquerda">
        </button>

        <button type="button" class="our-prizes-carousel-next arrow-next">
            <img src="<?php echo THEME_IMAGES . '/icons/ionic-ios-arrow-next.svg' ?>" alt="Ícone seta direita">
        </button>

    </div>
    <!-- /.our-prizes-carousel -->
</section>
<!-- /#our-prizes -->

<section class="featured-social-list bg-blue">
    <div class="small-circle people-circle"></div>
    <div class="hide-desktop-down small-circle planet-circle"></div>
    <div class="small-circle dark-circle"></div>

    <strong class="text text-white">Acompanhe a gente nas redes sociais</strong>
    <div class="content">
	    <?php
	    $social = array(
		    'facebook' => 'https://facebook.com',
		    'instagram' => 'https://instagram.com',
		    'youtube' => 'https://youtube.com',
		    'linkedin' => 'https://linkedin.com'
	    );
	    ?>
	    <?php foreach ($social as $key => $social_item): ?>
            <a href="<?php echo $social_item ;?>" title="Siga-nos no <?php echo $social_item; ?>">
                <img src="<?php echo THEME_IMAGES . '/icons/' . $key ?>.svg" alt="<?php echo $social_item; ?>">
            </a>
	    <?php endforeach; ?>
    </div>
</section>
<!-- /.featured-social-list -->

<?php get_footer(); ?>
