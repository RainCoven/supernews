<?php
/**
 * Template name: Partners list
 */

get_header(); ?>

	<?php
		$partnersArgs = array(
			'post_type' => 'partners',
			'posts_per_page' => 10
		);
		$loop = new WP_Query( $partnersArgs );
	?>

	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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