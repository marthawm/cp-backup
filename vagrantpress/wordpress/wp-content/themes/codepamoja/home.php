<!-- php used for the blog overview page -->

<?php
if ( !wp_is_mobile() ) {
    get_header();

//        Example
//        include 'templates/';
    require_once 'templates/pitch-your-project.php';
    include 'templates/blog/blog-header.php';

    if(have_posts()):  
    ?>
    <div class="blog-header">
        <div class="overlay">
            <h1>Blogs</h1>
        </div>
    </div>
    <main class="main">
    <?php
    while(have_posts()): the_post();
        include 'templates/blog/blog-post-summary.php';
    endwhile;
        include 'templates/blog/blog-navigation.php';

    else :
        echo '<p>No content found</p>';
    endif;
    ?>
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
    <div class="blog-header">
        <div class="overlay">
            <h1>Blogs</h1>
        </div>
    </div>
    <div class="main">

    <aside class="blogs-aside">
        <?php get_search_form(); ?>
        <?php include 'templates/blog/blog-categories-dropdown.php'; ?>
    </aside>
        

    <?php
    if(have_posts()):
    while(have_posts()): the_post();
        include 'templates/blog/blog-post-summary.php';
    endwhile;

    else :
        echo '<p>No content found</p>';
    endif;
    ?>

    </div>

    <?php
    include 'templates/blog/blog-navigation.php';

    get_footer('mobile');
}