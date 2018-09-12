<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?><?php wp_title("|", true, "left"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/ico" href="<?php the_field('favicon', get_option( 'page_on_front' )); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<header>
	
	<div class="content clearfix">
		<a class="logo" href="/">
			<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png" alt="Logo">
		</a>
	</div>

</header>