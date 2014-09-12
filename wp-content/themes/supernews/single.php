<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div class="well">
		<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="label label-primary"><?php the_date(); ?></p>
		<div>
			<?php the_content(); ?>
		</div>
		<?php print_r($post); ?>
	</div>
<?php endwhile; ?>

<?php get_footer(); ?>