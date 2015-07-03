<?php
/**
 * The template for displaying the footer
 */
?>

				<?php get_sidebar(); ?>
			</div>
		</div>



			<?php echo get_template_part('blocks/partners'); ?>

			<footer class="bs-docs-footer" role="contentinfo">
				<hr>
				<div class="container">
					<p>
						@<?php bloginfo( 'name' ); ?>,
						<?php echo date('Y'); ?>
					</p>
				</div>
			</footer>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>