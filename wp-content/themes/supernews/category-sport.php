<?php
/**
* The sport category template file
*
*/

get_header(); ?>

	<div>		
		<div class="well col-xs-8 col-xs-offset-1">
			<h1>Всё о спорте!</h1>
			<?php if ( have_posts() ) : ?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="well col-xs-4 col-xs-offset-1">					
						<p class="label label-primary">
							<?php echo get_the_date(); ?>
						</p>
						
						<h2>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						
						<div>
							<?php the_content(); ?>
						</div>
					</div>
					
				<?php endwhile; ?>
				
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>