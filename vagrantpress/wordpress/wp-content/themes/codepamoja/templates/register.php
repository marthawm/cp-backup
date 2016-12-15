<?php
	$register =  get_page_by_title('Register');
?>
<section id="register" class="register-section">
	<!-- box before opening form -->
	<div class="open-register-project">
		<p class="register-text"><?php 
			
			$key = 'title';
			echo get_post_meta($register->ID, $key, true);
			?></p> 
		<h3><?php 
			
			$key2 = 'title-bold';
			echo get_post_meta($register->ID, $key2, true);
			?></h3>
		<img class="sponsor-arrow open-register" src="<?php bloginfo('stylesheet_directory'); ?>/img/sponsor-arrow.png" alt="arrow-down">
	</div>

	<!-- box after opening form -->
	<div class="register-project">
		<p class="register-text"><?php echo get_post_meta($register->ID, $key, true);?></p> 
		<h3><?php echo get_post_meta($register->ID, $key2, true);?></h3>
		<form class="register-form">
			<?php 
				echo do_shortcode( $register->post_content); 
			?>

			<img class="sponsor-arrow close-register" src="<?php bloginfo('stylesheet_directory'); ?>/img/sponsor-arrow.png" alt="arrow-down">
		</form>	
	</div>
</section>