<?php get_header(); ?>

<section class="rounded-bottom-noimg default-intro">

	<div class="circle-1"></div>
	<div class="circle-2"></div>

	<div class="content">

		<h1><?php the_title(); ?></h1>

	</div>
</section>

<section class="default-wrapper">
	
	<div class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

	</div>

</section>

<?php get_footer( 'inner' ); ?>