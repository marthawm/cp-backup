<!-- To be included in the class="icon-header" in the templates/blog-post-summary.php file-->

	<a href="<?php the_permalink();?>&t=<?php the_title(); ?>"></a><i class="fa fa-comments fa-2x" aria-hidden="true"></i>
	<?php comments_number('0', '1', '%');echo "&nbsp;&nbsp;&nbsp;&nbsp;"?>
	
	<a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>">
		<i class="fa fa-facebook-square fa-2x"></i></a>
	<a target="_blank" href="http://www.twitter.com/home?status=<?php the_permalink();?>">
		<i class="fa fa-twitter-square fa-2x"  aria-hidden="true"></i></a>
	<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink();?>">
		<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>