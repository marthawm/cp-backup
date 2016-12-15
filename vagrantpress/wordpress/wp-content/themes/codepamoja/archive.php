<?php /* Template Name: Archive */ ?>

<!-- php used for the category overview blogpage -->

<?php
if ( !wp_is_mobile() ) {
    get_header();

    include 'templates/blog-header.php';

    if(have_posts()):
        ?>
    <main class="main">
    <?php 
    while(have_posts()): the_post();   
        
     include 'templates/blog-post-summary.php';
        
    endwhile;
    
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
    </main>
    <aside class="blogs-aside">
        <?php get_sidebar(); ?>
    </aside>
    <?php
    include 'templates/blog-navigation.php';

    get_footer();
} else {
    get_header('mobile');

    include 'templates/blog-header.php';
    dynamic_sidebar('sidebar4');

    ?>
    <div class="main">

    <?php
    if(have_posts()):
    while(have_posts()): the_post();
        include 'templates/blog-post-summary.php';
    endwhile;

    else :
        echo '<p>No content found</p>';
    endif;
    ?>

    </div>

    <?php
    include 'templates/blog-navigation.php';

    get_footer('mobile');
}