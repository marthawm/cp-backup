<div class="wrapper">
    <div class="article-block">
        <div class="icon-header">
        <i class="fa fa-facebook-square fa-2x"></i>
        <i class="fa fa-twitter-square fa-2x"  aria-hidden="true"></i>
        <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
        </div>
        <div class="first-art">
                    <div class="art-article"><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></div>
            <div class="art-excerpt">
               <?php the_content('[...]'); ?>
            </div>
        </div>
    </div><!-- End of article-block-->
    <div class="img-wrapper">
        <img class="" alt=""><?php the_post_thumbnail(); ?>
    </div>
</div>