<?php
	/**
	 * Template Name: Blog
	 */

	get_header();
?>

<section id="blog-intro" class="cover-image bg-image">
	<img src="<?php echo THEME_IMAGES . '/blog-intro.jpg' ?>" alt="Introdução">

	<div class="content" data-aos="fade-up">
		<h1>Notícias</h1>
		<span>Acontece no mundo Malwee</span>
	</div>
	<!-- /.content -->

</section>
<!-- /#blog-intro.cover-image -->

<section id="blog-filter">
	<div class="container small blog-filter-wrap">
		<div class="category-list" data-aos="fade-up">
			<button class="category-option" type="button">Grupo Malwee</button>
			<button class="category-option" type="button">Pessoas</button>
			<button class="category-option" type="button">Negócios</button>
			<button class="category-option" type="button">Planet</button>
			<button class="category-option" type="button">Malwee</button>
			<button class="category-option" type="button">Malwee Kids</button>
			<button class="category-option" type="button">Enfim</button>
			<button class="category-option" type="button">Carinhoso</button>
			<button class="category-option" type="button">Zig Zig Zaa</button>
		</div>
		<!-- /.category-list -->

		<input data-aos="fade-left" class="search-posts" placeholder="Pesquisar" type="search" aria-label="Pesquisar">
	</div>
	<!-- /.container small -->
</section>
<!-- /#blog-filter -->

<section id="post-list">
	<div class="container small">
		<div class="square-post-list">
			<a data-aos="fade-up" class="post-card" href="" aria-label="Malwee cria nova linha de Jeans Sustentavel">
                <strong class="category">Malwee</strong>
				<div class="cover-image bg-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/blog.jpg' ?>" alt="Blog">
				</div>

                <div class="post-entry">
                    <h3>Malwee cria nova linha de Jeans Sustentavel</h3>
                    <span class="date">Novembro/2021</span>
                </div>
                <!-- /.post-entry -->
			</a>

            <a data-aos="fade-up" data-aos-delay="200" class="post-card" href="" aria-label="Malwee cria nova linha de Jeans Sustentavel">
                <strong class="category">Malwee</strong>
                <div class="cover-image bg-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/blog.jpg' ?>" alt="Blog">
                </div>

                <div class="post-entry">
                    <h3>Malwee cria nova linha de Jeans Sustentavel</h3>
                    <span class="date">Novembro/2021</span>
                </div>
                <!-- /.post-entry -->
            </a>

            <a data-aos="fade-up" class="post-card" href="" aria-label="Malwee cria nova linha de Jeans Sustentavel">
                <strong class="category">Malwee</strong>
                <div class="cover-image bg-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/blog.jpg' ?>" alt="Blog">
                </div>

                <div class="post-entry">
                    <h3>Malwee cria nova linha de Jeans Sustentavel</h3>
                    <span class="date">Novembro/2021</span>
                </div>
                <!-- /.post-entry -->
            </a>

            <a data-aos="fade-up" data-aos-delay="200" class="post-card" href="" aria-label="Malwee cria nova linha de Jeans Sustentavel">
                <strong class="category">Malwee</strong>
                <div class="cover-image bg-image">
                    <img src="<?php echo THEME_IMAGES . '/temporary/blog.jpg' ?>" alt="Blog">
                </div>

                <div class="post-entry">
                    <h3>Malwee cria nova linha de Jeans Sustentavel</h3>
                    <span class="date">Novembro/2021</span>
                </div>
                <!-- /.post-entry -->
            </a>
		</div>
		<!-- /.square-post-list -->
	</div>
	<!-- /.container small -->
</section>
<!-- /#post-list -->

<?php get_footer(); ?>
