<?php

add_action( 'widgets_init', function () {
	register_sidebar( array(
		'name'          => 'Coluna rodapé #1',
		'id'            => 'coluna_rodape_1',
		'before_widget' => '<div class="footer-column-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Coluna rodapé #2',
		'id'            => 'coluna_rodape_2',
		'before_widget' => '<div class="footer-column-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Coluna rodapé #3',
		'id'            => 'coluna_rodape_3',
		'before_widget' => '<div class="footer-column-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
});
