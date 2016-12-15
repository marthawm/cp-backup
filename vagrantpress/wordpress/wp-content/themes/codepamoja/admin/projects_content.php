<?php
if (!function_exists('projects')):
    function projects()
    {
        add_settings_section('cp_projects_section', __('projects', 'cp'), 'cp_projects_section_callback', 'projects_settings');
        add_settings_field('cp_projects_field', __('projects', 'cp'), 'cp_projects_field_render', 'projects_settings', 'cp_projects_section');
    }
endif;
if (!function_exists('cp_projects_section_callback')):
    function cp_projects_section_callback()
    {
        echo '';
    }
endif;
if (!function_exists('cp_projects_field_render')):
    function cp_projects_field_render()
    {
        $options = get_option('projects_settings');
        ?>
        <!-- save data for projects section to the database-->
        <input placeholder="Enter title" type="text" size="40"
               name="projects_settings[title_field]"
               value="<?php if (isset($options['title_field'])) {
                   echo esc_attr($options['title_field']);
               } ?>"/>
        <input placeholder="Enter content" id="projects_settings[text_field]" type="text" size="40"
               name="projects_settings[text_field]"
               value="<?php if (isset($options['text_field'])) {
                   echo esc_attr($options['text_field']);
               } ?>"/>
        <?php
    }
endif;
?>