<?php

// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

// Get the page as an Object
$children =  get_page_by_title('blog');

// Filter through all pages and find Portfolio's children
$child = get_page_children( $children->ID, $all_wp_pages );

$args_desktop =array( 
    'post_type' => 'post',
    'posts_per_page'   => 5
    );
$args_mobile =array( 
    'post_type' => 'post',
    'posts_per_page'   => 2
    );
// query for desktop and mobile page content respectivelt
$query_desktop = new WP_Query( $args_desktop );
$query_mobile = new WP_Query( $args_mobile );
?>

<section id="blog" class="blog-section">
    
    <h2 class=" blog-title">
        <?php 
            if(isset($child->post_title[0])){
               echo print_r( $child[0]->post_title, true ); 
           }
        ?>
    </h2>
    <?php if(!wp_is_mobile()){ ?>
    <h2 class=" blog-title">
        <?php 
                echo do_shortcode($children->home_blog_title); 
        ?>
    </h2>
        <div class="blog-container">        
            <div class="blog">
           
            <?php
                while ( $query_desktop->have_posts() ) {
                    $query_desktop->the_post();

                      if ( has_post_thumbnail($post->ID) ) {
                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );    
                    } else {
                        $url = get_stylesheet_directory_uri() . '/img/blog-image1.png';
                    }
                    //$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>
        
                <div class="blog-item" style="background-image: url(<?php echo $url; ?>);">
                    <div class="blog-wrap text">
                        <div class="blog-subject">
                            <p><?php the_title();?></p>
                        </div>
                        <div class="blog-subject-line"></div>
                        <div class="blog-content">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="comment-wrap">
                            <div class="blog-icon"><i class="fa fa-eye"></i><?php if(function_exists('the_views')) { the_views(); } ?></div>
                            <div class="blog-icon"><i class="fa fa-comments"></i><?php comments_number('0', '1', '%');echo "&nbsp;&nbsp;&nbsp;&nbsp;"?></div>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                        <button class="btn read-more-plus"></button>
                        </a>
                    </div>
                </div>
            <?php  } ?>
                
            </div>
            <div class="blog-arrows">
                <button class="blog-arrow-btn right-arrow"></button>
                <button class="blog-arrow-btn left-arrow"></button>
            </div>

    	</div>
    	<button onclick="window.location.href='<?php bloginfo('url'); ?>/blog'" class="btn more-blogs-btn">read more</button>
</section>
    <?php } else { //mobile blog section with 2 posts?>  
    <div class="blog-container">
     <h2 class=" blog-title">
        <?php 
                echo do_shortcode( $children->home_blog_title); 
        ?>
    </h2>
    <?php
            // The Loop
                while ( $query_mobile->have_posts() ) {
                    $query_mobile->the_post();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    ?>
        <a href="<?php the_permalink(); ?>">
        <div class="blog-item" style="background-image: url(<?php echo $url; ?>);">
            <div class="blog-wrap text">
                <div class="blog-subject">
                    <span><?php the_title();?></span>
                </div>
                <div class="blog-subject-line"></div>
            </div>
        </div>
        </a>
        <?php  }?>
    </div>
    <button onclick="window.location.href='<?php bloginfo('url'); ?>/blog'" class="btn more-blogs-btn">read more blogs</button>
   <?php }?>
   </section>
