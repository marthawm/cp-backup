<?php
if (!wp_is_mobile())
  {
	  //For the desktop view the Technologies section is displayed.
?>


<section id="testimonials" class="testimonials-section">
	<input class="prev-testimonial" name="prev" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/previous.png">
    <div class="testimonials-wrap">
    	<div class="quotes-wrap">
    	<?php
            $args = array(
                'post_type' => 'testimonials',
                'posts_per_page' => 6,
                'orderby' => 'rand'
            );
            $testimonials = new WP_Query( $args );
            // The Loop
        ?>
        <?php if ( $testimonials->have_posts() ) {
            while ( $testimonials->have_posts() ) {
                    $testimonials->the_post(); ?>

			<span class="testimonials-quote">
				<?php echo get_the_content(); ?>
			</span>

			<?php } ?>
		<?php } ?>
		<?php wp_reset_postdata();?>
		</div>

		<div class="slider-wrapper">
            <ul class="testimonials-slider">
            <?php
            if ( $testimonials->have_posts() ) {
                while ( $testimonials->have_posts() ) {
                        $testimonials->the_post(); ?>
                <li class="testimonials-slider-item">
                    <div class="testimonials-slider-img" data-image="<?php the_post_thumbnail_url(); ?>" data-default="<?php bloginfo('stylesheet_directory'); ?>/img/default-icon.jpg">
                    </div>        	
                    <div class="employee-info">
						<?php $client_name = get_post_meta(get_the_ID(), 'client_name', true);
							if (!empty($client_name)):
								?>
							<span class="employee-name">
								<?php echo $client_name; ?>
							</span>
							<?php endif; ?>
						<?php $company = get_post_meta(get_the_ID(), 'company', true);
							if (!empty($company)):
							?>
							<p class="employee-job">
								<?php echo $company; ?>
							</p>
						<?php endif; ?>
                    </div>
                </li>
    		<?php } ?>
            </ul>
		</div>
               <?php } else { ?>
                <h3>No testimonials found</h3>
            <?php } ?>
            <?php wp_reset_postdata();?>
    </div>
	<input class="next-testimonial" name="next" type="image" src="<?php bloginfo('stylesheet_directory'); ?>/img/next.png">
</section>

<?php
 } else { ?>

<section id="testimonials-mobile" class="testimonials-mobile-section">
    <div class="testimonials-wrap-mobile">
        <div class="testimonials-quote-mobile">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue arcu non dolor pellentesque hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris congue arcu non dolor pel len tesque hendrerit.</p>
        </div>
        <img class="employee-image-mobile" src="<?php bloginfo('stylesheet_directory'); ?>/img/default-icon.jpg" >
        <div class="employee-info-mobile">   
            <span class="employee-name-mobile">Eelco Poelstra</span>
            <span class="employee-job-mobile">Front-end developer</span>
        </div>
    </div>
</section>

<?php } ?>