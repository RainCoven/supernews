<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
<?php get_sidebar(); ?>
</div>
</div><!-- #main .wrapper -->



<?php echo get_template_part('blocks/partners'); ?>

<footer class="bs-docs-footer" role="contentinfo">
	<hr>
	<div class="container">
		<p>@<?php bloginfo( 'name' ); ?>, <?php echo date('Y'); ?></p>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>