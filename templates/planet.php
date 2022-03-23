<?php
	/**
	 * Template Name: Planet
	 */

	get_header();
?>

<section class="intro-planet wrapper-image" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
    <div class="container small">
        <h1>O mundo <br> foi feito <br> para durar.</h1>

        <div class="circle green"></div>
    </div>
    <!-- /.container -->

	<?php if(!wp_is_mobile()): ?>
        <svg class="bg-circle" xmlns="http://www.w3.org/2000/svg" width="648" height="648" viewBox="0 0 648 648">
            <circle id="Elipse_25" data-name="Elipse 25" cx="324" cy="324" r="324" fill="#0d1136"/>
        </svg>
	<?php endif; ?>

    <div class="esg-plan-2030-logo">
        <img src="http://localhost:8888/malwee/wp-content/uploads/2022/03/logo-esg-plan-2030.png" alt="Plano ESG 2030">
    </div>

</section>
<!-- /#intro.intro-planet -->

<div class="featured-title-with-description wide">
    <div class="title bg-light-grey">
        <span data-aos="fade-up" class="text text-dark-blue">Planeta</span>
        <strong data-aos="fade-up" class="text text-dark-blue">
            Nossa moda
            é sustentável
            e feita para durar
        </strong>
    </div>
    <!-- /.title -->

    <div class="description bg-green text text-white" data-aos="fade-left" data-aos-delay="200">
        <p>Você sabia que o setor de moda é reconhecido pelo seu enorme impacto social e ambiental, ocupando a segunda posição entre as indústrias mais poluidoras do planeta? Mas essa realidade precisa mudar. </p>

            <p>Por isso, o Grupo Malwee faz moda de um jeito diferente!
            Nossa moda é sustentável e feita para durar.
            É uma moda para o bem das pessoas, do negócio e do planeta.
            Com compromisso e investimentos, mudamos a forma de fazer moda no Brasil para que o nosso consumidor descubra um novo jeito de se vestir: com roupas de alta qualidade, produzidas com matérias-primas e processos mais sustentáveis e todo o cuidado com as pessoas e o planeta.
            Porque aqui no Grupo Malwee: o mundo foi feito para durar.</p>
    </div>
    <!-- /.description bg-green -->
</div>
<!-- /.featured-title-with-description -->

<section id="planet-impact">
    <div class="container medium">
        <div class="planet-title-wrap">
            <h2 class="text text-dark-blue">O impacto da nossa moda no planeta</h2>
            <span class="text text-dark-blue">Conheça nosso jeito de fazer moda sustentável, em números*:</span>
        </div>
        <!-- /.title -->
    </div>
    <!-- /.container medium -->

    <div class="container medium">
        <ul class="impact-list">
            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/icon-coroa.svg' ?>" alt="Ícone coroa">
                <div class="impact-item-content">
                    <strong>91%</strong>
                    <span>das nossas roupas são produzidas com matérias-primas ou processos com menor impacto ambiental</span>
                </div>
                <!-- /.impact-item-content -->
            </li>
        </ul>
        <!-- /.impact-list -->
    </div>
    <!-- /.container medium -->
</section>
<!-- /#planet-impact -->

<section id="our-compromise" class="bg-dark-blue">
    <div class="container small">
        <div class="content">
            <span class="legend text text-planet">Nossos compromissos para 2030</span>
            <h3 class="text text-white">Um olhar para o futuro da moda, da sociedade e do planeta</h3>

            <div data-aos="fade-up" class="text text-white">
                <p>O mundo e a moda estão em constante evolução. De um lado, a ciência e a tecnologia impulsionam o desenvolvimento. De outro, a humanidade ainda enfrenta grandes desafios sociais e ambientais.</p>
                <p>Por isso, em 2021, lançamos o Plano ESG 2030 do Grupo Malwee - um documento público com os compromissos e metas sociais e ambientais que assumimos para esta década.</p>
                <p>Além de olhar para os desafios da moda, estamos encarando de frente o nosso compromisso de contribuir para uma sociedade mais justa, humana e de oportunidade para todos. Por isso, nossos compromissos estão conectados com os Objetivos do Desenvolvimento Sustentável e os princípios da economia circular.</p>
            </div>

            <a class="button solid green rounded bold uppercase medium spacing" href="">Conheça os nossos compromissos e metas para 2030</a>

        </div>
        <!-- /.content -->

        <img src="<?php echo THEME_IMAGES . '/temporary/esg-2030.png' ?>" alt="Esg">
    </div>
    <!-- /.container medium -->
</section>
<!-- /#our-compromise -->

<div class="timeline-carousel-planet-title">
    <div class="container medium">
        <div class="planet-title-wrap">
            <h2 class="text text-dark-blue">Uma história de pioneirismo em sustentabilidade</h2>
            <span class="text text-dark-blue">O Grupo Malwee foi fundado em 1968 e ao longo de sua história sempre investiu em projetos inovadores que levavam em consideração impactos sociais e ambientais. Conheça os principais marcos desta evolução: </span>
        </div>
        <!-- /.title -->
    </div>
    <!-- /.container medium -->
</div>
<!-- /.timeline-carousel-planet-title -->

<div class="timeline-carousel planet-carousel">
    <div class="swiper-wrapper">
		<?php if(have_rows('carousel_de_anos', 26)): while(have_rows('carousel_de_anos', 26)): the_row(); ?>
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


<?php get_footer(); ?>
