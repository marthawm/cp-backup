<?php
if ( !wp_is_mobile() ) {
    get_header();
//        Example
//        include 'templates/';
    include 'templates/blog/blog-header.php';

    if(have_posts()):
        ?>
    <main class="main">
    <?php 
    while(have_posts()): the_post();
  	    include 'templates/blog/blog-post-summary.php';
    endwhile;

    else :
    	?>
    	<main class="main">
            <?php echo '<div id="primary" class="content-area">
                <div id="content" class="site-content" role="main">
                    <div class="page-wrapper">
                        <div class="page-content text">
                            <h2>No content</h2>
                        </div><!-- .page-content -->
                    </div><!-- .page-wrapper -->
                </div><!-- #content -->
            </div>'; ?>
        </main>
        <aside class="blogs-aside">
        <?php get_sidebar(); ?>
        </aside>
        <?php
    endif;
    ?>
   </main> 
   <aside class="blogs-aside">
        <?php get_sidebar(); ?>
        </aside>
    <?php
    include 'templates/blog/blog-navigation.php';

    get_footer();
} else {
    get_header('mobile');
//        Example
//        include 'templates/';
    get_footer('mobile');
}