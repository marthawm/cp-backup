<?php if (!wp_is_mobile()){ ?>

	<section id="home" class="home-section">
	    <iframe width="560" height="349" src="http://localhost:8080/codepamoja.com/vagrantpress/wordpress/wp-content/themes/codepamoja/img/home-animation/all-in-one.html" frameborder="0" scrolling="no" allowfullscreen></iframe>
	    <!-- for online its http://codepamoja.org/wp-content/themes/codepamoja/img/home-animation/all-in-one.html -->
	</section>

<?php } else { ?>

	<section id="home-mobile" class="home-section">
	<!--    <div class="mobile-home-wrap">
	        <ul class="mobile-home-slider">
	            <li class="mobile-home-slider-item"> -->
	                <img class="mobile-home-slider-image" src="<?php bloginfo('stylesheet_directory'); ?>/img/background.svg" alt="background">
	<!--            </li>
	        </ul>
	    </div> -->
	</section>
<?php }  ?>
