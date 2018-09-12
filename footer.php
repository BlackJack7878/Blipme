
	<?php wp_footer(); ?>

	<footer class="rounded-top home">
		<div class="content">
			
			<h2><?php the_field('main_footer_head'); ?></h2>
			<p><?php the_field('main_footer_text'); ?></p>
			<a class="bl_button-apple bl_button" href="<?php the_field('main_footer_btnLink'); ?>"><?php the_field('main_footer_btnText'); ?></a>

			<div class="bl_row">
				<div class="bl_col bl_col-left">
					<p class="copyright">© <?php echo date("Y"); ?> Blip, Inc. All Rights Reserved.</p>
				</div>
				<div class="bl_col bl_col-right">
					<?php bl_footer_menu(); ?>
				</div>
			</div>

		</div>	
	</footer>

</body>
</html>