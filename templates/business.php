<?php
	/**
	 * Template Name: Business
	 */
	get_header();
?>

<section id="intro" class="business bg-blue">
	<div class="content">
        <div class="intro-text" data-aos="fade-right">
            <strong><?php the_field('titulo_principal_introducao'); ?></strong>
            <span><?php the_field('subtitulo_introducao'); ?></span>
        </div>
        <!-- /.intro-text -->

        <div class="cover-image" data-aos="fade-left">
            <img src="<?php echo the_field('imagem_representativa_introducao'); ?>" alt="<?php the_field('titulo_principal_introducao'); ?>">
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
            <div class="entry-text text blue" data-aos="fade-right">
                <?php the_field('titulo_descricao'); ?>
            </div>
            <!-- /.entry-text text blue -->

            <div class="description" data-aos="fade-left" data-aos-delay="100">
                <p>
	                <?php the_field('descricao_descricao'); ?></p>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.content -->

        <ul class="benefits-list">
            <?php if(have_rows('colunas_descritivas_com_icones')): while(have_rows('colunas_descritivas_com_icones')): the_row(); ?>
            <li data-aos="fade-up">
                <img src="<?php the_sub_field('icone'); ?>" alt="Ícone">
                <?php the_sub_field('texto_descritivo'); ?>
            </li>

            <?php endwhile; endif; ?>
        </ul>
        <!-- /.benefits-list -->

    </div>
    <!-- /.container medium -->
</section>
<!-- /#benefits -->

<section id="business-model">
    <h2 data-aos="fade-down"><?php the_field('titulo_modelos_de_negocio') ?></h2>

    <?php if(have_rows('box_-_conteudo_+_imagem')): while(have_rows('box_-_conteudo_+_imagem')): the_row(); ?>

    <div class="description-with-image image-right bg-blue">
        <div class="description">
            <span class="text text-white" data-aos="fade-bottom"><?php the_sub_field('label_descritiva'); ?></span>
            <h4 class="text text-white" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

            <div data-aos="fade-up" class="text text-white">
                <?php the_sub_field('descricao'); ?>
            </div>

            <a data-aos="fade-up" class="button solid white rounded bold uppercase medium spacing" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('texto_link'); ?></a>

        </div>
        <!-- /.description -->

        <div class="cover-image" data-aos="fade-left" data-aos-delay="200">
            <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
        </div>
        <!-- /.cover-image -->
    </div>
    <!-- /.description-with-image image-right -->

    <?php endwhile; endif; ?>

    <div class="business-example">
        <div class="container medium">
            <h2 data-aos="fade-down" class="text text-business text-center"><?php the_field('titulo_lojas_malwee') ?></h2>
        </div>
        <!-- /.container medium -->

        <div class="business-example-carousel" data-aos="fade-up">
            <div class="swiper-wrapper">
                <?php if(have_rows('carousel_de_imagens_lojas')): while(have_rows('carousel_de_imagens_lojas')): the_row(); ?>
                <div class="swiper-slide cover-image">
                    <img src="<?php the_sub_field('imagem');?>" alt="<?php the_sub_field('legenda');?>">
                    <span class="legend"><?php the_sub_field('legenda');?></span>
                </div>
                <!-- /.swiper-slide -->

                <?php endwhile; endif; ?>
            </div>
            <!-- /.swiper-wrapper -->

            <button type="button" class="business-example-carousel-prev arrow-back">
                <img src="<?php echo THEME_IMAGES . '/icons/arrow-left.svg' ?>" alt="Ícone seta esquerda">
            </button>

            <button type="button" class="business-example-carousel-next arrow-next">
                <img src="<?php echo THEME_IMAGES . '/icons/arrow-right.svg' ?>" alt="Ícone seta direita">
            </button>
        </div>
        <!-- /.business-example-carousel -->
    </div>
    <!-- /.business-example -->

    <?php if(have_rows('box_-_conteudo_+_imagem_1')): while(have_rows('box_-_conteudo_+_imagem_1')): the_row(); ?>
        <div class="description-with-image image-right bg-white">
            <div class="description">
                <span class="text text-dar-blue" data-aos="fade-down"><?php the_sub_field('label_descritiva'); ?></span>
                <h4 class="text text-business" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

                <div data-aos="fade-up text text-dark-blue">
	                <?php the_sub_field('descricao'); ?>
                </div>

                <a data-aos="fade-up" class="button solid blue rounded bold uppercase medium spacing" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('texto_link'); ?></a>

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
    <div class="description-with-image image-left bg-dark-blue">
        <div class="description">
            <span class="text text-white" data-aos="fade-down"><?php the_sub_field('label_descritiva'); ?></span>
            <h4 class="text text-business" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>


            <div data-aos="fade-up text text-white">
	            <?php the_sub_field('descricao'); ?>
            </div>

            <a data-aos="fade-up" class="button solid blue rounded bold uppercase medium spacing" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('texto_link'); ?></a>

        </div>
        <!-- /.description -->

        <div class="cover-image" data-aos="fade-right" data-aos-delay="200">
            <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
        </div>
        <!-- /.cover-image -->
    </div>
    <!-- /.description-with-image image-right -->

	<?php endwhile; endif; ?>
</section>
<!-- /#business-model -->

<?php if(have_rows('box_-_conteudo_+_imagem_circular')): while(have_rows('box_-_conteudo_+_imagem_circular')): the_row(); ?>

<section id="innovation" class="text-with-circle-image">
    <div class="circle left solid blue hide-desktop-down"></div>

    <div class="container small">
        <div class="content">

            <div data-aos="fade-right">
                <div class="cover-image">
                    <img class="rounded-image" src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                </div>
                <!-- /.cover-image rounded-image -->
            </div>

            <div class="description">
                <h4 data-aos="fade-up" class="text text-blue"><?php the_sub_field('titulo'); ?></h4>

                <div data-aos="fade-up">
	                <?php the_sub_field('descricao'); ?>
                </div>

                <span data-aos="fade-up" class="text text-blue">
                    <?php echo strip_tags(get_sub_field('legenda_descritiva'), '<br><br/>'); ?>
                </span>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container small -->
</section>
<!-- /#inovation.text-with-circle-image -->

<?php endwhile; endif; ?>

<?php if(have_rows('secao_loja_virtual_malwee')): while(have_rows('secao_loja_virtual_malwee')): the_row(); ?>
    <div class="description-with-image image-right image-height-full with-container bg-light-grey">
        <div class="container small">
            <div class="content">
                <div class="description">
                    <span class="text text-dark-blue" data-aos="fade-down"><?php the_sub_field('label_descritiva'); ?></span>
                    <h4 class="text text-business" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

                    <div data-aos="fade-up text text-dark-blue">
	                    <?php the_sub_field('descricao'); ?>
                    </div>
                </div>
                <!-- /.description -->
                <div class="cover-image" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                </div>
                <!-- /.cover-image -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container small -->
    </div>
    <!-- /.description-with-image image-right -->
<?php endwhile; endif; ?>

<div class="app-malwee-benefits bg-light-grey">
    <div class="container small">
        <ul class="app-malwee-benefits-list">
            <?php if(have_rows('colunas_descritivas_com_icones_loja_virtual_malwee')): while(have_rows('colunas_descritivas_com_icones_loja_virtual_malwee')): the_row(); ?>
                <li data-aos="fade-up">
                    <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                    <strong><?php the_sub_field('titulo'); ?></strong>
	                <?php the_sub_field('texto_descritivo'); ?>
                </li>
            <?php endwhile; endif; ?>
        </ul>


        <a data-aos="fade-up" data-aos-delay="600" class="button solid blue rounded bold uppercase medium spacing" href="<?php the_field('link_loja_virtual_malwee'); ?>"><?php the_field('texto_link_loja_virtual_malwee'); ?></a>

    </div>
    <!-- /.container small -->
</div>
<!-- /.app-malwee-benefits -->

<?php if(have_rows('box_-_conteudo_+_imagem_circular_2')): while(have_rows('box_-_conteudo_+_imagem_circular_2')): the_row(); ?>

<section id="partners-to-business" class="text-with-circle-image bg-blue small">
    <div class="circle left solid green hide-desktop-down"></div>

    <div class="container small">
        <div class="content">

            <div data-aos="fade-right">
                <div class="cover-image">
                    <img class="rounded-image" src="<?php the_sub_field('imagem_representativa'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                </div>
                <!-- /.cover-image rounded-image -->
            </div>

            <div class="description">
                <span data-aos="fade-up" class="text text-dark-blue description-legend"><?php the_sub_field('legenda_descritiva'); ?></span>
                <h4 data-aos="fade-up" data-aos-delay="100" class="text text-white"><?php the_sub_field('titulo'); ?></h4>
                <div class="text text-white" data-aos="fade-up" data-aos-delay="200">
	                <?php the_sub_field('descricao'); ?>
                </div>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container small -->
</section>
<!-- /#inovation.text-with-circle-image -->

<?php endwhile; endif; ?>

<?php if(have_rows('box_-_conteudo_+_imagem_circular_3')): while(have_rows('box_-_conteudo_+_imagem_circular_3')): the_row(); ?>
    <div id="papo-fashion" class="description-with-image image-right with-container bg-light-grey">
        <div class="container small">
            <div class="content">
                <div class="description">
                    <span class="text text-dark-blue" data-aos="fade-down"><?php the_sub_field('legenda_descritiva'); ?></span>
                    <h4 class="text text-business" data-aos="fade-up"><?php the_sub_field('titulo'); ?></h4>

                    <div data-aos="fade-down" class="text text-dark-blue">
	                    <?php the_sub_field('descricao'); ?>
                    </div>

                    <a data-aos="fade-up" class="button solid blue rounded bold uppercase medium spacing" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('texto_link'); ?></a>
                </div>
                <!-- /.description -->
                <div class="cover-image" data-aos="fade-left" data-aos-delay="200">
                    <img class="rounded-image" src="<?php the_sub_field( 'imagem_representativa' ); ?>" alt="Papo Fashion">
                </div>
                <!-- /.cover-image -->

                <div class="circle green right"></div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container small -->
    </div>
    <!-- /.description-with-image image-right -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>
