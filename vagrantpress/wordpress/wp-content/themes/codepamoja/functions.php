<?php

//disable admin bar
add_filter('show_admin_bar', '__return_false');

require_once 'admin/manage_content.php';

function grid_admin_script() { 
    wp_enqueue_style( 'grid_css', get_template_directory_uri() . '/css/admin-style.min.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'grid_script', get_template_directory_uri() . '/js/photo-impression-grid.min.js' );
}

add_action( 'admin_enqueue_scripts', 'grid_admin_script');

function scripts_enqueue() {
	//css
	if (!wp_is_mobile()){
		wp_enqueue_style('desktop-style', get_template_directory_uri() . '/css/desktop-style.min.css', array(), '1.0.0', 'all');

	} else {
		wp_enqueue_style('mobile-style', get_template_directory_uri() . '/css/mobile-style.min.css', array(), '1.0.0', 'all');
	}
	//js
	wp_enqueue_script('jquery2', get_template_directory_uri() . '/js/vendor/jquery-2.2.3.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/vendor/jquery-ui.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('hamburger', get_template_directory_uri() . '/js/hamburger-menu.min.js', array(), '1.0.0', true);
	wp_enqueue_script('draganddrop', get_template_directory_uri() . '/js/drag-and-drop.min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.min.js', array(), '1.0.0', true);
	wp_enqueue_script('newsletter', get_template_directory_uri() . '/js/newsletter.min.js', array(), '1.0.0', true);
	wp_enqueue_script('photoimpression', get_template_directory_uri() . '/js/photo-impression.min.js', array(), '1.0.0', true);
	wp_enqueue_script('pitchyourproject', get_template_directory_uri() . '/js/pitch-your-project.min.js', array(), '1.0.0', true);
	wp_enqueue_script('register', get_template_directory_uri() . '/js/register.min.js', array(), '1.0.0', true);
	wp_enqueue_script('blog-slider', get_template_directory_uri() . '/js/blog-slider.min.js', array(), '1.0.0', true);
	
	wp_enqueue_script('testimonials-slider', get_template_directory_uri() . '/js/testimonials-slider.min.js', array(), '1.0.0', true);


	// If page is not the front page, remove/dequeue following scripts
	if ( !is_front_page() ) {
		wp_dequeue_script('jquery2');
		wp_dequeue_script('jquery-ui');
		wp_dequeue_script('dropdown');
		wp_dequeue_script('newsletter');
		wp_dequeue_script('photoimpression');
		wp_dequeue_script('slider');
		wp_dequeue_script('draganddrop');
		wp_dequeue_script('register');
	}

	if(wp_is_mobile()){
		wp_dequeue_script('register');
	}
}

add_action('wp_enqueue_scripts', 'scripts_enqueue');

add_filter('excerpt_length', 'custom_excerpt_length');

add_action('get_header', 'remove_admin_login_header');


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function ingword_setup(){

	//Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 920, 210, true);
	add_theme_support('post-formats', array('aside','gallery','link'));
}
add_action('after_setup_theme', 'ingword_setup');


function ourWidgetInit(){
	register_sidebar(array(
			'name' => 'top-sidebar',
			'id' => 'sidebar1',
			'before_widget' => '<div class="aside-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<legend class="">',
			'after_title' => '</legend>'
		));
	register_sidebar(array(
			'name' => 'middle-sidebar',
			'id' => 'sidebar2',
			'before_widget' => '<div class="aside-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<legend>',
			'after_title' => '</legend>'
		));
	register_sidebar(array(
			'name' => 'bottom-sidebar',
			'id' => 'sidebar3',
			'before_widget' => '<div class="blog-newsletter-container">',
			'after_widget' => '</div>',
			'before_title' => '<legend>',
			'after_title' => '</legend>'
		));
}
add_action('widgets_init', 'ourWidgetInit');

function custom_excerpt_length( $length ) {
	return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// function to create a tab on the wp-admin side to set the menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//get categories on blog pages
function getcats()
{
		$categories = get_the_category();
		$separator = ", ";
		$output = '';
if($categories)
	{
		foreach ($categories as $category)
				{
$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'.$separator;
				}
echo $output;
}
}

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> [...]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function create_posttype() {
  $args = array(
    'labels' => array(
      'name' => __('Testimonials'),
      'singular_name' => __('Testimonials'),
      'all_items' => __('All Testimonials'),
      'add_new_item' => __('Add New Testimonial'),
      'edit_item' => __('Edit Testimonial'),
      'view_item' => __('View Testimonial')
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'testimonials'),
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'capability_type' => 'page',
    'supports' => array('title', 'editor', 'thumbnail'),
    'exclude_from_search' => true,
    'menu_position' => 80,
    'has_archive' => true,
    'menu_icon' => 'dashicons-format-status'
    );
  register_post_type('testimonials', $args);
}
add_action( 'init', 'create_posttype');

function my_add_meta_box(){
    add_meta_box( 'testimonial-details', 'Testimonial Details', 'my_meta_box_cb', 'testimonials', 'normal', 'default');
}
function my_meta_box_cb($post){
    $values = get_post_custom( $post->ID );
    $client_name = isset( $values['client_name'] ) ? esc_attr( $values['client_name'][0] ) : "";
    $company = isset( $values['company'] ) ? esc_attr( $values['company'][0] ) : "";
    wp_nonce_field( 'testimonial_details_nonce_action', 'testimonial_details_nonce' );
    $html = '';
    $html .= '<label>Client Name</label>';
    $html .= '<input type="text" name="client_name" id="client_name" style="margin-top:15px; margin-left:9px; margin-bottom:10px;" value="'. $client_name .'" /><br/>';
    $html .= '<label>Company</label>';
    $html .= '<input type="text" name="company" id="company" style="margin-left:25px; margin-bottom:15px;" value="'. $company .'" />';
    echo $html;
}
function my_save_meta_box($post_id){
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['testimonial_details_nonce'] ) || !wp_verify_nonce( $_POST['testimonial_details_nonce'], 'testimonial_details_nonce_action' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    if(isset( $_POST['client_name'] ) )
        update_post_meta( $post_id, 'client_name', $_POST['client_name']);

    if(isset( $_POST['company'] ) )
        update_post_meta( $post_id, 'company', $_POST['company']);
}
add_action( 'add_meta_boxes', 'my_add_meta_box' );
add_action( 'save_post', 'my_save_meta_box' );
