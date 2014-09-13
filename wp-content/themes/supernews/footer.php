<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
</div>
</div><!-- #main .wrapper -->
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