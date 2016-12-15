<?php
if(!function_exists('agile_scrum')):
	function agile_scrum() {
		add_settings_section( 'cp_manage_section', __( 'Agile & Scrum', 'cp' ), 'cp_manage_section_callback', 'agile_scrum_settings' );
		add_settings_field( 'cp_agile_field',  __( '', 'cp' ), 'cp_agile_field_render', 'agile_scrum_settings', 'cp_manage_section' );
	}
	endif;

	if(!function_exists('cp_manage_section_callback')):
		function cp_manage_section_callback() {
			echo '';
		}
	endif;

if( !function_exists('cp_agile_field_render') ):
	function cp_agile_field_render() {
		$options = get_option( 'agile_scrum_settings' );
?>
    <!-- loop through all the variables in the arrays an add them to the balloons -->
    <section id="methods" class="scrum-agile-settings">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/scrum-agile.png" alt="scrum-agile">
        <div class="admin-balloons-container">
        <?php for($i=1; $i<=4; $i++){ ?>
            <div class="single-balloon-container">
                <div class="balloon">
                    <input placeholder="Enter the Title" id="agile_scrum_settings[baloon$i_title]"  type="text" size="10" name="agile_scrum_settings[baloon<?php echo $i ?>_title]" value="<?php if(isset($options['baloon'.$i.'_title'])) { echo esc_attr($options['baloon'.$i.'_title']); } ?>" />                       
                    <textarea rows="3" cols="12" maxlength="111" placeholder="Enter the Content" id="agile_scrum_settings[baloon$i_text]" type="text" name="agile_scrum_settings[baloon<?php echo $i ?>_text]" value="<?php if(isset($options['baloon'.$i.'_text'])) { echo esc_attr($options['baloon'.$i.'_text']); } ?>"/><?php if(isset($options['baloon'.$i.'_text'])) { echo esc_attr($options['baloon'.$i.'_text']); } ?></textarea>
                </div>
            </div>
        <?php } ?>
        </div>
    </section>   
<?php
}
endif;