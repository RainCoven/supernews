<?php
	/*
	*
	* Блок с партнёрами
	*
	*/
?>


<?php
	$partnersArgs = array(
		'post_type' => 'partners',
		'numberposts' => '5',
		'post_status' => 'publish'
	);
	
	$partners = get_posts($partnersArgs);
?>

<?php if($partners) : ?>
	<div class="partners">
		<?php foreach($partners as $partner) : ?>
			<?php				
				$partnerTitle = get_the_title($partner->ID);
				$partnerImageUrl = get_field('image', $partner->ID);
				$partnerSite = get_field('site', $partner->ID);
			?>
		
			<div class="partner">
				<img src="<?php echo $partnerImageUrl; ?>" class="partner-image" title="<?php echo $partnerTitle; ?>" />
			</div>
			
		<?php endforeach; ?>
	</div>
<?php endif; ?>