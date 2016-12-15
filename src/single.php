<?php /*Template Name: Blog post*/?>

<!-- php used for a single blogpage -->

<?php
if ( !wp_is_mobile() ) {
    get_header();
    
    require_once 'templates/pitch-your-project.php';

    include 'templates/blog/blog-header.php';

    if(have_posts()):
        ?>
    <div class="blog-header"><div class="overlay">
        <h1>Blogs</h1>
    </div></div>
    <main class="main">
    <?php 
    while(have_posts()): the_post();
        include 'templates/blog/blog-post.php';
    endwhile;
        include 'templates/blog/blog-reply.php';
    else : ?>
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
        <?php endif; ?>
    </main>
   <aside class="blogs-aside">
        <?php get_sidebar(); ?>
   </aside>
    <?php

    get_footer();
} else {
    get_header('mobile');

    include 'templates/blog/blog-header.php';
    dynamic_sidebar('sidebar4');
   
    ?>
    <div class="blog-header"><div class="overlay">
        <h1>Blogs</h1>
    </div></div>
        <main class="main">
        <aside class="blogs-aside">
            <?php get_search_form(); ?>
            <?php include 'templates/blog/blog-categories-dropdown.php'; ?>
        </aside>
    <?php

    while(have_posts()): the_post();
        include 'templates/blog/blog-post.php';
    endwhile;
        include 'templates/blog/blog-reply.php';

    ?>
        </main>
    <?php
    
    get_footer('mobile');
}