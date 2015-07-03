<?php
/**
 * The Template for displaying all pages
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="well col-xs-8 col-xs-offset-1">
			<h2>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			
			<p class="label label-primary">
				<?php the_date(); ?>
			</p>
			
			<div>
				<?php the_content(); ?>
			</div>
			
		</div>
	<?php endwhile; ?>

<?php get_footer(); ?>
