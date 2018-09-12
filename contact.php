<?php 
/* Template Name: Contact */
get_header();
?>

<section class="rounded-bottom contact-intro">
	<div class="rounded-bottom-img" style="background-image: url(<?php echo get_field('con_intro_bg') ?>);"></div>

	<div class="circle-1"></div>
	<div class="circle-2"></div>

	<div class="content">

		<h1><?php the_field('con_intro_head'); ?></h1>
		<p><?php the_field('con_intro_text'); ?></p>
		<a class="bl_button" href="<?php the_field('con_intro_btnLink'); ?>"><?php the_field('con_intro_btnText'); ?></a>

	</div>
</section>

<section class="contact-info">
	<div class="content">
		
		<img src="<?php echo wp_get_attachment_image_url( get_field('con_info_img'), 'full' ); ?>" alt="BlipMe support">

		<h2><?php the_field('con_info_head'); ?></h2>

		<p><?php the_field('con_info_text'); ?></p>

	</div>
</section>

<?php get_footer( 'inner' ); ?>