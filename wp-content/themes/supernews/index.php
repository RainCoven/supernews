<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* For example, it puts together the home page when no home.php file exists.
*
* @link http://codex.wordpress.org/Template_Hierarchy
*
* Theme Name: Supernews
* @package WordPress
* @subpackage Super_News
* @since Supernews 1.0
*/

get_header(); ?>

	<div>
		<div class="well col-xs-8 col-xs-offset-1">
			<?php if ( have_posts() ) : ?>
			
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="well col-xs-4 col-xs-offset-1">					
						<p class="label label-primary">
							<?php echo get_the_date('d M, Y. H:i:s'); ?>
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
				
				<?php
					global $wp_query;

					$big = 999999999; // need an unlikely integer

					echo paginate_links( 
						array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages
						)
					);
				?>
				
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>