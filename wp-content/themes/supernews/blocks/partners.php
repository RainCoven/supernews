<?php
	/*
	* Блок с партнёрами
	*/
?>


<?php
	$partnersArgs = array(
		'post_type' => 'partners',
		'numberposts' => '3',
		'post_status' => 'publish'
	);	
	$partners = get_posts($partnersArgs);
?>

<?php if ( $partners ) : ?>
	<div class="partners">
		<?php foreach( $partners as $partner ) : ?>
			<?php				
				$partnerTitle = get_the_title($partner->ID);
				$partnerImageId = get_field('logo', $partner->ID);
				$partnerImageUrl = wp_get_attachment_image_src($partnerImageId, 'partners');
				//$partnerSite = get_field('site', $partner->ID);
				$partnerSite = get_post_meta($partner->ID, 'site');
			?>
		
			<div class="partner btn-group-vertical">
				<a href="<?php echo $partnerSite[0]; ?>">
					<img src="<?php echo $partnerImageUrl[0]; ?>" class="partner-image" title="<?php echo $partnerTitle; ?>" />
				</a>
			</div>
			
		<?php endforeach; ?>
	</div>
<?php endif; ?>