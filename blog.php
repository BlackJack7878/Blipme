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
		
		<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="row post wow fadeIn" style="max-width:949px;">
					<div class="large-5 medium-5 small-12 columns">
						<?php the_post_thumbnail( 'news' ); ?>
					</div>
					<div class="large-7 medium-7 small-12 columns">
						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<small><?php the_time('F jS, Y') ?> • <?php the_category(', ') ?></small>
						<div class="entry">
							<?php the_excerpt(); ?> 
						</div>
					</div>
					
				</div>
				
			<?php endwhile; ?>

			<div class="navigation">
				<div class="alignleft"><?php posts_nav_link('','','« Previous Entries') ?></div>
				<div class="alignright"><?php posts_nav_link('','Next Entries »','') ?></div>
			</div>
			
		<?php else : ?>

			<h2 class="center">Not Found</h2>
			<p class="center"><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>

		<?php endif; ?>

	</div>

</section>

<?php get_footer( 'inner' ); ?>