<?php 
/* Template Name: Homepage */
get_header(); 
?>

<section class="main-intro">
	<div class="content">
		
		<div class="bl_row">
			<div class="bl_col">
				<h1><?php the_field('main_head'); ?></h1>
				<p><?php the_field('main_text'); ?></p>
				<a class="bl_button-apple bl_button" href="<?php the_field('main_btnLink'); ?>"><?php the_field('main_btnText'); ?></a>
			</div>

			<div class="bl_col">
				<img id="main-phone-1" class="anim-right" src="<?php echo wp_get_attachment_image_url( get_field('main_img_1'), 'full' ); ?>" alt="Phone with BlipMe app">
				<img id="main-phone-2" class="anim-right-slow" src="<?php echo wp_get_attachment_image_url( get_field('main_img_2'), 'full' ); ?>" alt="Phone with BlipMe app">
			</div>
		</div>

	</div>
</section>

<section class="main-map">
	<div class="content">
		
		<div class="bl_row">
			<div class="bl_col">
				<img class="anim-left" src="<?php echo wp_get_attachment_image_url( get_field('main_map_img'), 'full' ); ?>" alt="BlipMe map on your phone">
			</div>
			<div class="bl_col">
				<h2><?php the_field('main_map_head'); ?></h2>
				<p><?php the_field('main_map_text'); ?></p>
			</div>
		</div>

	</div>
</section>

<section class="main-community">
	<div class="content">
		
		<div class="bl_row">
			<div class="bl_col">
				<h2><?php the_field('main_com_head'); ?></h2>
				<p><?php the_field('main_com_text'); ?></p>
			</div>
			<div class="bl_col">
				<img class="anim-spin-right" src="<?php echo wp_get_attachment_image_url( get_field('main_com_img'), 'full' ); ?>" alt="BlipMe community">
			</div>
		</div>

	</div>
</section>

<section class="main-feed">
	<div class="content">
		
		<div class="bl_row">
			<div class="bl_col">
				<img class="anim-left" src="<?php echo wp_get_attachment_image_url( get_field('main_feed_img'), 'full' ); ?>" alt="BlipMe feed">
			</div>
			<div class="bl_col">
				<h2><?php the_field('main_feed_head'); ?></h2>
				<p><?php the_field('main_feed_text'); ?></p>
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>