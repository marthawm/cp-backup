<?php
$testimonial_settings = get_option('testimonial_settings');


$field1 = isset($testimonial_settings['cp_testimonial_title_field']) ? $testimonial_settings['cp_testimonial_title_field'] : '';
$field2 = isset($testimonial_settings['cp_project_text_field']) ? $testimonial_settings['cp_project_text_field'] : '';


?>

<!-- <section id="testimonials" class="testimonials-section">
	<div class="testimonials-wrap">
		<p class="testimonials-quote">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut porttitor libero nunc, ultrices dictum ante commodo non. Fusce massa risus, volutpat sit amet purus sit amet, tempus venenatis justo.
		</p>
		<ul class="testimonials-slider">
			<li class="testimonials-slider-item">
				<img class="employee-photo" src="<?php bloginfo('stylesheet_directory'); ?>/img/portrait-jim.png" alt="portrait">
				<div class="employee-info">
					<span class="employee-name"><?php
						if($field1 != ''){
							echo ('<h2>' . $field1 .'</h2>');
						}else{
							echo 'Scrum & Agile';
						}?></span>
					<p class="employee-job">Technical Lead &amp; Javascript Developer</p>
				</div>
			</li>
			<li class="testimonials-slider-item">
				<img class="employee-photo" src="<?php bloginfo('stylesheet_directory'); ?>/img/portrait-maria-cristina.png" alt="portrait">
				<div class="employee-info">
					<span class="employee-name"><?php
						if($field1 != ''){
							echo ('<h2>' . $field1 .'</h2>');
						}else{
							echo 'Scrum & Agile';
						}?></span>
					<p class="employee-job">Front-end Developer &amp; Designer</p>
				</div>
			</li>
			<li class="testimonials-slider-item">
				<img class="employee-photo" src="<?php bloginfo('stylesheet_directory'); ?>/img/portrait-raymon.png" alt="portrait">
				<div class="employee-info">
					<span class="employee-name"><?php
						if($field1 != ''){
							echo ('<h2>' . $field1 .'</h2>');
						}else{
							echo 'Scrum & Agile';
						}?></span>
					<p class="employee-job"><?php
						if($field1 != ''){
						echo ('<h2>' . $field1 .'</h2>');
					}else{
					echo 'Scrum & Agile';
					}?></p>
				</div>
			</li>
		</ul>
	</div>
</section> -->