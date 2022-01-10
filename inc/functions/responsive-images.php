<?php 

function the_responsive_image($id, $size = 'full') {
    echo '<img src="' . wp_get_attachment_image_url($id, $size) . '" srcset="'. wp_get_attachment_image_srcset($id, $size) . '" sizes="'. wp_get_attachment_image_sizes($id, $size) .'">';
}