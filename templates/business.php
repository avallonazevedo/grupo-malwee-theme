<?php
	/**
	 * Template Name: Business
	 */
	get_header();
?>

<section id="intro" class="business">
	<div class="content">
        <div class="intro-text">
            <strong>Malwee,</strong>
            <span>Presente em todo o Brasil e no coração das pessoas. </span>
        </div>
        <!-- /.intro-text -->

        <div class="cover-image">
            <img src="<?php echo THEME_IMAGES . '/intro/business.jpg' ?>" alt="Negócio Malwee">
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
            <div class="entry-text text blue">
                Onde tem Grupo Malwee, tem prosperidade e a melhor experiência de marca para os consumidores.
            </div>
            <!-- /.entry-text text blue -->

            <div class="description">
                <p>Estamos presentes em mais de 25 mil pontos de venda em uma completa rede de multimarcas, franquias, lojas fidelizadas, próprias e canais online. Nossos lojistas contam com estrutura especializada de atendimento e todas as ferramentas digitais e programas de treinamento exclusivos para potencializar os negócios e alcançar os melhores resultados. </p>
            </div>
            <!-- /.description -->
        </div>
        <!-- /.content -->

        <ul class="benefits-list">
            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/gestao.svg' ?>" alt="Ícone Gestão">
                <p>Gestão focada no <br> conceito de <u>open innovation</u></p>
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/beneficios.svg' ?>" alt="Ícone Benefícios">
                <p><u>Benefícios exclusivos</u> <br> para lojistas </p>
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/cobertura-nacional.svg' ?>" alt="Ícone Cobertura Nacional">
                <p>Cobertura nacional <br> de <u>atendimento ao lojista</u></p>
            </li>

            <li>
                <img src="<?php echo THEME_IMAGES . '/icons/ferramentas-online.svg' ?>" alt="Ícone Ferramentas Online">
                <p><u>Ferramentas</u> online e <br> <u>treinamentos</u> em varejo</p>
            </li>
        </ul>
        <!-- /.benefits-list -->

    </div>
    <!-- /.container medium -->
</section>
<!-- /#benefits -->

<section id="business-model">
    <h2>Nossos Modelos de Negócio</h2>

    <div class="description-with-image image-right bg-blue">
        <div class="description">
            <span class="text text-white">Rede aqui tem Malwee</span>
            <h4 class="text text-white">Faça parte da maior e melhor rede do varejo de rua do Brasil</h4>

            <p class="text text-white">A rede Aqui Tem Malwee é muito mais que uma loja de roupas: É um modelo de negócio sustentável, com o knowhow de marcas consolidadas no mercado e benefícios exclusivos para lojistas. </p>
            <p class="text text-white">Através de um projeto arquitetônico exclusivo, criamos uma loja única e especial que privilegia as relações, as pessoas e a comunidade local.</p>

            <a class="button solid white rounded bold uppercase medium spacing" href="#0">Quero ser lojista</a>

        </div>
        <!-- /.description -->

        <div class="cover-image">
            <img src="<?php echo THEME_IMAGES . '/business-model.jpg' ?>" alt="Modelo de Negócio Malwee">
        </div>
        <!-- /.cover-image -->
    </div>
    <!-- /.description-with-image image-right -->


    <div class="business-example">
        <div class="container medium">
            <h2 class="text text-business text-center">Conheça exemplos de lojas Aqui tem Malwee</h2>
        </div>
        <!-- /.container medium -->

        <div class="business-example-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide cover-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/aqui-tem-malwee.jpg' ?>" alt="Aqui Tem Malwee">
                    <span class="legend">São Lourenço</span>
                </div>
                <!-- /.swiper-slide -->

                <div class="swiper-slide cover-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/aqui-tem-malwee.jpg' ?>" alt="Aqui Tem Malwee">
                    <span class="legend">São Lourenço</span>
                </div>
                <!-- /.swiper-slide -->

                <div class="swiper-slide cover-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/aqui-tem-malwee.jpg' ?>" alt="Aqui Tem Malwee">
                    <span class="legend">São Lourenço</span>
                </div>
                <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->

            <button type="button" class="business-example-carousel-prev">
                <img src="<?php echo THEME_IMAGES . '/icons/arrow-left.svg' ?>" alt="Ícone seta esquerda">
            </button>

            <button type="button" class="business-example-carousel-next">
                <img src="<?php echo THEME_IMAGES . '/icons/arrow-right.svg' ?>" alt="Ícone seta direita">
            </button>

        </div>
        <!-- /.business-example-carousel -->

    </div>
    <!-- /.business-example -->

</section>
<!-- /#business-model -->

<?php get_footer(); ?>
