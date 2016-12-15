<div class="wrapper">
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
            <div class="art-article"><b><?php the_title(); ?></b></div>
            <div class="art-excerpt">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</div>