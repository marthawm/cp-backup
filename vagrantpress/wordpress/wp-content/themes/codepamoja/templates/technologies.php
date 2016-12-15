<?php
if (!wp_is_mobile())
  {
	  //For the desktop view the Technologies section is displayed.
?>

<section id="technologies" class="technologies-section">

	<h2 class=" technologies-title">Some of the stuff we use</h2>
	
	<ul class="technology-wrap">
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-git.png" alt="git">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-html.png" alt="html">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-css.png" alt="css">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-js.png" alt="javascript">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-angular.png" alt="angular">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-tomcat.png" alt="tomcat">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-reactjs.png" alt="reactjs">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-java.png" alt="java">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-jasmine.png" alt="jasmine">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-bower.png" alt="bower">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-ember.png" alt="ember">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-sass.png" alt="sass">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-grunt.png" alt="grunt">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-gulp.png" alt="gulp">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-json.png" alt="json">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-apache.png" alt="apache">
		</li>
		
		<li class="tech-hexagon">
			<img class="tech-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-yeoman.png" alt="yeoman">
		</li>
		
	</ul>
	
</section>

<?php
  }
else
  {
	  //Show nothing if mobile since we don't have the Technologies Section Mobile Design.
  }
?>