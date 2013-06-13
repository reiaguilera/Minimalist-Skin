<?php
/*
	This file is for skin specific customizations. Be careful not to change your skin's skin.php file as that will be upgraded in the future and your work will be lost.
	If you are more comfortable with PHP, we recommend using the super powerful Thesis Box system to create elements that you can interact with in the Thesis HTML Editor.
*/

function new_excerpt_more($more) {
       global $post;
    return '... <a href="'. get_permalink($post->ID) . '">read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


add_theme_support('post-thumbnails');

set_post_thumbnail_size( 125, 125, true ); // 290 pixels wide by 190 pixels tall, hard crop mode

add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size

