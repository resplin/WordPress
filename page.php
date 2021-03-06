<?php get_header(); ?>

<div class="row">
	<div class="col-xs-8">

		<?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>	

	</div>
	
	<div class="col-xs-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>