<form  class="searchbox" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input  class="searchbox-input" type="text" value="" name="s" id="s" placeholder="Search ..." />
        <a href="<?php the_search_query(); ?>"><img class="searchbox-icon" src="<?php bloginfo('stylesheet_directory'); ?>/img/search.png" alt="search-icon"></a>
    </div>
</form>


