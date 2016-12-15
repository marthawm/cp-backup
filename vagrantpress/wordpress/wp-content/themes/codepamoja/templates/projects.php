<?php
// Get the page as an Object
$projects =  get_page_by_title('Project');
$projects_settings = get_option('projects_settings');

/* Fetch values from the admin section and display them in header and content section */
$var_header = isset($projects_settings['title_field']) ? $projects_settings['title_field'] : '';
$var_content= isset($projects_settings['text_field']) ? $projects_settings['text_field'] : '';

$keys = array('backlog_board', 'sprint_board', 'done_board');
$key_count = count($keys);

if (!wp_is_mobile()) { ?>
<section id="project" class="projects-section">
        <h2 class="projects-title">
    <?php
        if ($var_header != '') {
                echo $var_header;
        } else {
                echo 'Our projects';
        } 
    ?>
    </h2>
    <div class="projects-text text">
        <p><?php
            if ($var_content != '') {
                echo $var_content;
            } ?>
        </p>
    </div> 
    <div class="scrum-board">
        <div class="static-magnet">
            <img id="draggable-magnet-red" src="<?php bloginfo('stylesheet_directory'); ?>/img/red-magnet.png" alt="redmagnet">
            <img id="draggable-magnet-blue" src="<?php bloginfo('stylesheet_directory'); ?>/img/blue-magnet.png" alt="bluemagnet">
            <img id="draggable-magnet-red2" src="<?php bloginfo('stylesheet_directory'); ?>/img/red-magnet.png" alt="redmagnet2">
            <img id="draggable-magnet-blue2" src="<?php bloginfo('stylesheet_directory'); ?>/img/blue-magnet.png" alt="bluemagnet2">
        </div>
    <div class="board-projects">
    
    <!-- loop through all the variables in the arrays an add them to the list -->
    <?php for($i=0; $i<$key_count; $i++) {?>
        <ul class="board-titles">
            <?php
              $project = get_post_meta($projects->ID, $keys[$i], true);

              $project_array = explode(',', $project);
              $pro = count($project_array);
              for($y = 0; $y<$pro; $y++) {
                  ?>
                  <li><?php echo $project_array[$y]; ?></li>
                  <?php
              }
            ?>
        </ul>
    <?php } ?>
    </div>
        <div class="hand">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/scrum-hand.png" alt="hand">
        </div>
        <div class="sticky-note">
            <img id="draggable-sticky-note" class="draggable-sticky-note" src="<?php bloginfo('stylesheet_directory'); ?>/img/sticky.png" alt="drag-sticky">
        </div>
        <img id="scrum-board" class="scrum-board-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/scrum-board.png" alt="scrumboard">
    </div>
    <button type="button" class="btn submit-project-btn side-form">submit your project</button>
</section>
    <?php

} else {?>
<section id="projects-mobile" class="projects-section">
   <h2 class="projects-title">
       <?php
            if ($var_header != '') {
                    echo $var_header;
            } else {
                    echo 'Our projects';
            } 
        ?>
   </h2>
   <div class="projects-text text">
       <p>
       <?php
           if ($var_content != '') {
               echo $var_content;
           }  
        ?>
       </p>
   </div>
   <div class="scrum-board">
       <div class="hand">
           <img src="<?php bloginfo('stylesheet_directory'); ?>/img/hand-mobile.png">
       </div>
       <img class="note" src="<?php bloginfo('stylesheet_directory'); ?>/img/sticky.png" alt="stickynote">
       <img class="note sticky-2" src="<?php bloginfo('stylesheet_directory'); ?>/img/sticky.png" alt="stickynote">
       <div class="board-projects">

        <!-- loop through all the variables in the arrays an add them to the list -->
        <?php for($i=0; $i < $key_count; $i++) {?>
            <ul class="board-titles">
            <?php
                    $project = get_post_meta($projects->ID, $keys[$i], true);;
                        
                        $project_array = explode(',', $project);
                        $pro = count($project_array);
                        for($y = 0; $y < $pro; $y++) {
                            ?>
                                <li><?php echo $project_array[$y]; ?></li>
                            <?php
                        }
            ?>
            </ul>
        <?php } ?>
       </div>
       
       <img class="scrum-board-img" src="<?php bloginfo('stylesheet_directory'); ?>/img/board-mobile.png" alt="scrumboard">
   </div>        
   <button class="btn submit-project-btn side-form" href="#pitch-your-project">submit your project</button>
</section>
<?php } ?>


