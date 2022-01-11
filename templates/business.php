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
</section>
<!-- /#business-model -->

<?php get_footer(); ?>
