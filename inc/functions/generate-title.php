<?php
function generate_title() {

    if(is_tag()) {
        echo 'Publicações na tag &quot;'.$tag.'&quot; | ';
    }

    if(is_archive() && !is_category()) {
        wp_title(''); echo ' Arquivos | ';
    }

    if(is_category()) {
        single_cat_title();
        echo ' | Todos os posts - ';
    }

    if(is_search()) {
        echo 'Resultados para &quot;'.$s.'&quot; | ';
    }

    if(!is_404() && is_single()) {
        echo get_the_title() . ' | ';
    }

    if(is_page() && !is_front_page()) {
        echo get_the_title() . ' | ';
    }

    if(is_404()) {
        echo 'Nenhum resultado encontrado | ';
    }

    echo get_bloginfo('name');

    if(is_home() || is_front_page()) {
        echo  ' | ' . get_bloginfo('description');
    }
}

add_action('title', 'generate_title');
?>