<div class="article-block">

    <div class="icon-header">    
        <?php include 'blog-social-media-share.php'; ?>
    </div>

    <div class="first-art">
        <div class="author-info">
            By 
                <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>

            Category

                <?php getcats(); ?> 
                
            Posted 

                <?php the_time("F jS, Y");?>
        </div>

        <div class="art-article"><b><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></b></div>

        <div class="art-excerpt">
            <?php echo the_excerpt(); ?>
        </div>
    </div>

    <a href="<?php the_permalink(); ?>">
        <div class="img-wrapper">
            <?php the_post_thumbnail('big', array('class' => 'big-image')); ?>
        </div>
    </a>

</div>