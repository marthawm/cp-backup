<?php
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
// Get the page as an Object
$agile =  get_page_by_title('Home');
// Filter through all pages and find Homes's children
$agile_pages = get_page_children( $agile->ID, $all_wp_pages );
$agile_scrum_settings = get_option('agile_scrum_settings');

/*  Fetch values from the admin section and display them in scrum balloons */

$title_balloon1 = isset($agile_scrum_settings['baloon1_title']) ? $agile_scrum_settings['baloon1_title'] : '';
$content_balloon1 = isset($agile_scrum_settings['baloon1_text']) ? $agile_scrum_settings['baloon1_text'] : '';
$title_balloon2 = isset($agile_scrum_settings['baloon2_title']) ? $agile_scrum_settings['baloon2_title'] : '';
$content_balloon2 = isset($agile_scrum_settings['baloon2_text']) ? $agile_scrum_settings['baloon2_text'] : '';
$title_balloon3 = isset($agile_scrum_settings['baloon3_title']) ? $agile_scrum_settings['baloon3_title'] : '';
$content_balloon3 = isset($agile_scrum_settings['baloon3_text']) ? $agile_scrum_settings['baloon3_text'] : '';
$title_balloon4 = isset($agile_scrum_settings['baloon4_title']) ? $agile_scrum_settings['baloon4_title'] : '';
$content_balloon4 = isset($agile_scrum_settings['baloon4_text']) ? $agile_scrum_settings['baloon4_text'] : '';

/* Add the variables created to an array */
$balloon_titles = array();
array_push($balloon_titles,$title_balloon1, $title_balloon2,$title_balloon3,$title_balloon4);

$balloon_content = array();
array_push($balloon_content,$content_balloon1,$content_balloon2,$content_balloon3,$content_balloon4);
?>
<?php
if (!wp_is_mobile()) {  ?> 
    <section id="methods" class="methods-section">
        <?php
            if(isset($agile_pages[1]->post_title)){
                echo '<h2 class="projects-title">' .print_r( $agile_pages[1]->post_title, true ) . '</h2>';
            }
            if(isset($agile_pages[1]->post_content)){
                echo '<p class="intro-text">' .print_r( $agile_pages[1]->post_content, true ) . '</p>';
            }
        ?>
        <!-- loop through all the variables in the arrays an add them to the balloons -->
        <div class="scrum-agile-image">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/scrum-agile.png" alt="scrum-agile">
            <div class="balloons-container">
            <?php for($i=0; $i<=3; $i++){ ?>
                <div class="single-balloon-container">
                    <div class="balloon">
                        <?php
                            if($balloon_titles[$i] != ''){
                                echo $balloon_titles[$i];
                            }
                        ?>
                        <div class="spanu"><i class="icon-methods fa fa-plus-circle fa-2x" aria-hidden="true" style="color: white;"></i></div>
                        <span class="spanx">
                            <?php if($balloon_content[$i] != ''){ 
                                echo ($balloon_content[$i]);
                            }?>
                        </span>
                    </div>
                    <div class="arrow-down"></div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>
<?php
 } else { ?>
    <section id="methods-mobile" class="methods-section">
    <?php
        if(isset($agile_pages[1]->post_title)){
            echo '<h2 class="section-title agile-title">' .print_r( $agile_pages[1]->post_title, true ) . '</h2>';
        }else{
            echo '<h2 class="projects-title">Scrum &amp; Agile</h2>';
        }

        if(isset($agile_pages[1]->post_content)){
            echo '<p class="intro-text">' .print_r( $agile_pages[1]->post_content, true ) . '</p>';
        }else{
            echo '<p>sdadsdaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in. et dolore magna aliqua..</p>';
        }
    ?>
    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/scrum-agile.png" class="agile-scrum-image" alt="scrum-agile">
    </section>
<?php } ?>
 













