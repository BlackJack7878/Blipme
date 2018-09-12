<?php 

add_action('wp_enqueue_scripts', 'bl_frontend_enqueue');

function bl_frontend_enqueue() {

	// CSS
	wp_enqueue_style('blipme_css', get_stylesheet_uri());
	wp_enqueue_style('bl_fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600');
	wp_enqueue_style('blipme_css_landing', get_template_directory_uri() . '/css/main.css');
	

	// Javascript Files
	wp_enqueue_script('jquery');

	wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/waypoints.js', array(), false);
	wp_enqueue_script('main_js', get_template_directory_uri() . '/js/main.js', array(), false);
}

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> read more</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_action('init', 'bl_register_theme_menus');

function bl_register_theme_menus() {
	register_nav_menus(array(
		'footer-menu' => 'Footer menu'
	)); 
}

function bl_footer_menu() {
	wp_nav_menu(array(
		'theme_location'  => 'footer-menu',
		'menu'            => '', 
		'container'       => '', 
		'container_class' => '', 
		'container_id'    => '',
		'menu_class'      => '', 
		'menu_id'         => '',
		'echo'            => 1,
		'fallback_cb'     => '__return_false',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0
		));
}

function fc_svg_file_support($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_filter('upload_mimes', 'fc_svg_file_support');

?>