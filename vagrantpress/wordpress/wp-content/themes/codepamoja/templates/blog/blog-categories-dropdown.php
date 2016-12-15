<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
    <?php
		$select = wp_dropdown_categories('show_option_none=Select Category&show_count=1&orderby=name&echo=0&selected=6');
		$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
		echo $select;
		?>
</form>