<?php
/**
 * The Template for displaying all single posts
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
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>			
		</div>
	<?php endwhile; ?>

<?php get_footer(); ?>