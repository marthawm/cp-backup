<?php
// Set up the objects needed
$my_wp_query = new WP_Query();
$all_wp_pages = $my_wp_query->query(array(
    'post_type' => 'page'
));

// Get the page as an Object
$portfolio = get_page_by_title('Home');

// Filter through all pages and find Portfolio's children
$portfolio_children = get_page_children($portfolio->ID, $all_wp_pages);

?>

<section id="partners" class="partners-section text">
    <div class="partners-info">

        <?php
        if (isset($portfolio_children[0]->post_title)) {
            echo '<h2 class="projects-title">' . print_r($portfolio_children[0]->post_title, true) . '</h2>';
        }
        ?>


        <?php
        if (isset($portfolio_children[0]->post_content)) {
            echo '<p class="partners-text">' . print_r($portfolio_children[0]->post_content, true) . '</p>';
        }
        ?>

    </div>

    <ul class="flex-container">
          <li class="flex-item"><a class="competa flex-item-link" href="http://www.competa.com" target="_blank"></a></li>
          <li class="flex-item"><a class="developpp flex-item-link" href="http://www.developpp.de" target="_blank"></a> </li>
          <li class="flex-item"> <a class="dewcis flex-item-link" href="http://www.dewcis.com" target="_blank"></a>  </li>
          <li class="flex-item"> <a class="bti flex-item-link" href="http://www.btimillman.com" target="_blank"></a> </li>          
          <li class="flex-item"> <a class="german flex-item-link" href="http://www.example.com" target="_blank"></a>  </li>
          <li class="flex-item"> <a  class="sequa flex-item-link" class href="http://www.example.com" target="_blank"></a></li>   
    </ul>  
    <img class="background-partners" src="<?=bloginfo('stylesheet_directory')?>/img/nairobi-background.jpg">

</section>
