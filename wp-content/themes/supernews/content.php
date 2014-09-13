<?php if (is_single()) : ?>
<div class="well">
<?php else: ?>
	<div class="well col-xs-4 col-xs-offset-1">
<?php endif; ?>
	<p class="label label-primary"><?php echo $post->post_date; ?></p>
	<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div>
		<?php the_content(); ?>
	</div>
</div>