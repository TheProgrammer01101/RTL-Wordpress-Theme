<?php

function learningWordPress_resources() {
	
  wp_enqueue_style('style', get_stylesheet_uri(), $version_number_here);



	
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

// Navigation Menus
register_nav_menus(array (
  'primary' => __('Primary Menu'), 
  'footer' => __ ('Footer Menu'),
));