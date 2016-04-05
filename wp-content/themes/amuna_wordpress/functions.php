<?php

function custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}


?>
