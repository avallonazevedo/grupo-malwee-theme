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
            <li class="main-carousel-slide main-carousel-slide-video embla__slide cover-image">
                <img src="<?php echo THEME_IMAGES . '/templates/video.jpg' ?>" alt="Vídeo Placeholder">
                <div class="carousel-content cover-image">
                   <h3>O mundo foi feito para durar.</h3>
                    <a class="modal-open" href="#0">
                        <img src="<?php echo THEME_IMAGES . '/icons/play-white.svg' ?>" alt="Ícone Play">
                        <span>Assista nosso manifesto</span>
                    </a>
                </div>
                <!-- /.carousel-content -->
            </li>

            <li class="main-carousel-slide main-carousel-slide-default has-circle embla__slide">
                <div class="carousel-content container medium">
                    <div class="carousel-text">
                        <p>
                            Tudo que  a gente faz é para o bem
                            <span style="color: #8E68FF;">das pessoas</span>,
                            <span style="color: #2273E1;">do negócio</span>
                            <span style="color: #55AF7D">e do planeta</span>.
                        </p>

                        <span>O mundo foi feito para durar. </span>

                        <a href="#0" class="button dark-blue solid">Conheça a nova marca</a>
                    </div>
                    <!-- /.carousel-text -->

                    <div class="carousel-image circle-image">
                        <img src="<?php echo THEME_IMAGES . '/brands/brand-icon.svg' ?>" alt="Ícone da Marca Malwee">
                    </div>
                    <!-- /.cover-image -->

                </div>
                <!-- /.carousel-content -->

                <div class="circle purple right"></div>
            </li>
        </ul>
        <!-- /.main-carousel -->
    </div>
    <!-- /#embla-carousel.embla -->
</section>
<!-- /#main-slider -->

<section id="brands">
    <div class="container medium">
        <div data-aos="fade-up" class="brand-description">
            Somos uma empresa de moda movida por relações duradouras com as pessoas, o negócio e o planeta. Enxergamos o mundo através do impacto positivo que geramos na vida das pessoas, na construção de parcerias prósperas e na moda democrática e com menor impacto ambiental.
        </div>
        <!-- /.brand-description -->
        <h3 data-aos="fade-up">
            Nossas Marcas
        </h3>

        <ul class="malwee-brand-list">
            <li>
                <img class="default-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/malwee.png' ?>" alt="Marca Malwee">
                <img class="hover-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/malwee-hover.png' ?>" alt="Marca Malwee">
            </li>

            <li>
                <img class="default-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/enfim.png' ?>" alt="Marca Enfim">
                <img class="hover-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/enfim-hover.png' ?>" alt="Marca Enfim">
            </li>

            <li>
                <img class="default-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/malwee-kids.png' ?>" alt="Marca Malwee Kids">
                <img class="hover-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/malwee-kids-hover.png' ?>" alt="Marca Malwee Kids">
            </li>

            <li>
                <img class="default-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/carinhoso.png' ?>" alt="Marca Carinhoso">
                <img class="hover-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/carinhoso-hover.png' ?>" alt="Marca Carinhoso">
            </li>

            <li>
                <img class="default-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/zig-zig-zaa.png' ?>" alt="Marca Zig Zig Zaa">
                <img class="hover-image" src="<?php echo THEME_IMAGES . '/brands/hover-brands/zig-zig-zaa-hover.png' ?>" alt="Marca Zig Zig Zaa">
            </li>
        </ul>
        <!-- /.malwee-brand-list -->

        <h3>Somos movidos por relações duradouras</h3>

        <ul class="business-people-planet">
            <li>
                <strong class="text text-business">negócios</strong>
                <img src="<?php echo THEME_IMAGES . '/business.jpg' ?>" alt="Negócios">

                <p class="text text-business">Gerar impacto positivo, <br> além do financeiro.</p>

                <a href="#0">Seja nosso parceiro</a>
            </li>

            <li>
                <strong class="text text-people">pessoas</strong>
                <img src="<?php echo THEME_IMAGES . '/people.jpg' ?>" alt="Pessoas">

                <p class="text text-people">Valores que constróem <br> Relações duradouras.</p>

                <a href="#0">Trabalhe conosco</a>
            </li>

            <li>
                <strong class="text text-planet">planeta</strong>
                <img src="<?php echo THEME_IMAGES . '/planet.jpg' ?>" alt="Planeta">

                <p class="text text-planet">Nosso compromisso <br> com o planeta. </p>

                <a href="#0">Saiba mais</a>
            </li>

        </ul>
        <!-- /.business-people-planet -->

    </div>
    <!-- /.container -->


</section>
<!-- /#brands -->

<section id="company-numbers">
    <div class="container medium">
        <div class="company-numbers-content">
            <ul class="company-numbers-wrap business-numbers">
                <li>
                    <div class="number-content text text-business">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="10">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">dos municípios <br> brasileiros</span>
                </li>

                <li>
                    <div class="number-content text text-business">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="95">00</strong>
                        <span class="number-symbol">mil</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">clientes</span>
                </li>

                <li>
                    <div class="number-content text text-business">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="10">00</strong>
                        <span class="number-symbol">milhões</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">Peças produzidas por ano</span>
                </li>

                <li>
                    <div class="number-content text text-business">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="10">150</strong>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">Lojas fidelizadas</span>
                </li>
            </ul>

            <ul class="company-numbers-wrap people-numbers">
                <li>
                    <div class="number-content text text-people">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="10">00</strong>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">anos de história</span>
                </li>

                <li>
                    <div class="number-content text text-people">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="42">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">mulheres em cargos <br> de liderança</span>
                </li>

                <li>
                    <div class="number-content text text-people">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="2">00</strong>
                        <span class="number-symbol">mil</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">colaboradores</span>
                </li>

                <li>
                    <div class="number-content text text-people">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="15">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">dos colaboradores com <br> mais de 10 anos de casa </span>
                </li>
            </ul>

            <ul class="company-numbers-wrap planet-numbers">
                <li>
                    <div class="number-content text text-planet">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="67">00</strong>
                        <span class="number-symbol">milhões</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">m2 de preservação <br> ambiental </span>
                </li>

                <li>
                    <div class="number-content text text-planet">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="42">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">menos consumo <br> de água </span>
                </li>

                <li>
                    <div class="number-content text text-planet">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="89">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">menos emisssão de <br> gases de efeito estufa </span>
                </li>

                <li>
                    <div class="number-content text text-planet">
                        <strong class="purecounter" data-purecounter-start="0" data-purecounter-end="51">00</strong>
                        <span class="number-symbol">%</span>
                    </div>
                    <!-- /.number-content -->
                    <span class="number-legend">uso de energia <br> renovável</span>
                </li>
            </ul>
        </div>
        <!-- /.company-numbers-content -->
    </div>
    <!-- /.container medium -->
</section>
<!-- /#company-numbers -->

<section id="home-middle">
    <div class="esg-plan-2030">
        <div class="parallax" data-parallax-image="<?php echo THEME_IMAGES . '/parallax/people.jpg' ?>"></div>
        <div class="container medium">
            <p>
                O mundo precisa de
                pessoas que, juntas,
                façam o futuro hoje.
            </p>
            <a href="#0">Conheça o nosso plano ESG 2030.</a>
        </div>
        <!-- /.container medium -->

        <?php if(!wp_is_mobile()): ?>
            <svg class="bg-circle" xmlns="http://www.w3.org/2000/svg" width="648" height="648" viewBox="0 0 648 648">
                <circle id="Elipse_25" data-name="Elipse 25" cx="324" cy="324" r="324" fill="#0d1136"/>
            </svg>
        <?php endif; ?>


        <div class="esg-plan-2030-logo">
            <img src="<?php echo THEME_IMAGES . '/logo-esg-plan-2030.png' ?>" alt="Plano ESG 2030">
        </div>
    </div>
    <!-- /.esg-plan-2030 -->

    <section class="transform-your-business">
        <div class="parallax" data-parallax-image="<?php echo THEME_IMAGES . '/parallax/transform-your-business.jpg' ?>"></div>
        <div class="container medium">
            <div class="content">
                <strong>Transforme seu negócio</strong>
                <p>Criamos um modelo de loja única e especial, um espaço que privilegia relações, as pessoas e a comunidade local.</p>
                <a href="#0" class="button white outlined">Conheça o projeto</a>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.container medium -->
    </section>
    <!-- /.instituto-malwee-home -->
</section>
<!-- /#home-middle -->

<section id="instituto-malwee">
    <div class="container medium">
        <div class="content">
            <div class="description">
                <img src="<?php echo THEME_IMAGES . '/brands/instituto-malwee.png' ?>" alt="Logo Instituto Malwee">
                <p>
                    Construímos hoje, o amanhã. <br>
                    Com foco na infância e meio ambiente, investimos no futuro.
                </p>
                <a href="#0" class="button dark-blue outlined">Conheça o projeto</a>
            </div>
            <!-- /.description -->

            <div class="cover-image">
                <img src="<?php echo THEME_IMAGES . '/instituto-malwee.jpg' ?>" alt="Foto Instituto Malwee">
            </div>
            <!-- /.cover-image -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.container medium -->


    <div class="circle right purple" aria-label="Círculo decorativo"></div>

</section>
<!-- /#instituto-malwee -->

<section id="blog-home">
    <div class="container">
        <h2 class="text blue" data-aos="fade-up">Notícias</h2>
    </div>
    <!-- /.container -->
    <ul style="display: none;" class="blog-home-post-list">
        <li class="post post-category-business">
            <div class="post-content">
                <a data-aos="fade-up" class="category" href="#0">Malwee</a>
                <h3 data-aos="fade-up" class="entry-title">
                    <a href="#0">Moda sem ponto final.</a>
                </h3>
                <div data-aos="fade-up" class="excerpt">
                    <p>Uma nova forma de produzir em sintonia com uma nova forma de pensar.</p>
                </div>
                <!-- /.excerpt -->
                <a data-aos="fade-up" class="button outlined black" href="">Saiba mais</a>
            </div>
            <!-- /.post-content -->
            <div data-aos="fade-down" class="post-image wrapper-image">
                <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
            </div>
            <!-- /.post-image -->
        </li>

        <li class="post post-category-planet">
            <div class="post-content">
                <a data-aos="fade-up" class="category" href="#0">Malwee</a>
                <h3 data-aos="fade-up" class="entry-title">
                    <a href="#0">O jeans mais sustentável do Brasil.</a>
                </h3>
                <div data-aos="fade-up" class="excerpt">
                    <p>Descubra como fabricamos nossos Jeans economizando até 80% da água utilizada.</p>
                </div>
                <!-- /.excerpt -->
                <a data-aos="fade-up" class="button outlined black" href="">Veja o filme</a>
            </div>
            <!-- /.post-content -->
            <div data-aos="fade-down" class="post-image wrapper-image">
                <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
            </div>
            <!-- /.post-image -->
        </li>

        <li class="post post-category-people">
            <div class="post-content">
                <a data-aos="fade-up" class="category" href="#0">Malwee</a>
                <h3 data-aos="fade-up" class="entry-title">
                    <a href="#0">51 anos Grupo Malwee. Você faz parte dessa história. </a>
                </h3>
                <div data-aos="fade-up" class="excerpt">
                    <p>51 anos de história reservam boas lembranças. Entre feitos e aprendizados, também guardamos reconhecimentos.</p>
                </div>
                <!-- /.excerpt -->
                <a data-aos="fade-up" class="button outlined black" href="">Veja a entrevista</a>
            </div>
            <!-- /.post-content -->
            <div data-aos="fade-down" class="post-image wrapper-image">
                <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
            </div>
            <!-- /.post-image -->
        </li>
    </ul>

    <div id="more-posts">
        <ul class="more-posts-content" data-aos="fade-up">
            <li>
                <div class="post-image wrapper-image">
                    <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
                </div>
                <!-- /.post-image -->
                <h3 class="entry-title">
                    <a href="#0">Prêmio ser humano SC 2019</a>
                </h3>
                <a class="read-more" href="#0">Saiba mais</a>
            </li>

            <li>
                <div class="post-image wrapper-image">
                    <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
                </div>
                <!-- /.post-image -->
                <h3 class="entry-title">
                    <a href="#0">Prêmio ser humano SC 2019</a>
                </h3>
                <a class="read-more" href="#0">Saiba mais</a>
            </li>

            <li>
                <div class="post-image wrapper-image">
                    <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
                </div>
                <!-- /.post-image -->
                <h3 class="entry-title">
                    <a href="#0">Prêmio ser humano SC 2019</a>
                </h3>
                <a class="read-more" href="#0">Saiba mais</a>
            </li>

            <li>
                <div class="post-image wrapper-image">
                    <img src="<?php echo THEME_IMAGES . '/temp-blog.png' ?>" alt="">
                </div>
                <!-- /.post-image -->
                <h3 class="entry-title">
                    <a href="#0">Prêmio ser humano SC 2019</a>
                </h3>
                <a class="read-more" href="#0">Saiba mais</a>
            </li>
        </ul>
        <!-- /.more-posts-content -->
    </div>
    <!-- /#more-posts -->
</section>
<!-- /#blog-home -->

<?php get_footer(); ?>
