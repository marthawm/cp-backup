<?php
	$register =  get_page_by_title('Pitch');
?>
<section id="pitch-your-project" class="pitch-your-project-section">
	<div class="pitch-your-project">
		<div class="pitch-text-wrapper">
			<button type="button" class="hamburger btn close-pitch"><span></span></button>
		    <h2 class="pitch-title text">
		    <?php 
			
			$key = 'title-pitch';
			echo get_post_meta($register->ID, $key, true);
			?></h2>
			<p class="pitch-text"><?php 
			
			$key = 'content-pitch';
			echo get_post_meta($register->ID, $key, true);
			?></p>
		</div>

		<form id="pitchform" enctype="multipart/form-data" action="" method="post" class="pitch-form">
			<?= do_shortcode( $register->post_content); ?>
		</form>
	</div>
</section>