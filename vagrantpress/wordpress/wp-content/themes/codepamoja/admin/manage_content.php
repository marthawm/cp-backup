<?php
/**
 * @package WordPress
 */

add_action('admin_menu', 'cp_add_admin_menu');
add_action('admin_init', 'cp_settings_init');
if (!function_exists('cp_add_admin_menu')):
    function cp_add_admin_menu()
    {
        add_menu_page('CodePamoja Theme settings', 'Theme settings', 'administrator', 'admin/settings.php', 'agile_scrum_settings_page');
    }
endif;

if (!function_exists('cp_settings_init')):
    function cp_settings_init()
    {
        wp_enqueue_style('codepamoja', get_template_directory_uri() . '/css/codepamoja.css', false, '1.0', 'all');
        wp_localize_script('settings', 'settings_vars',
            array(
                'amenities_placeholder' => __('Add new', 'cp'),
                'admin_url' => get_admin_url(),
                'text' => __('Text', 'cp'),
                'numeric' => __('Numeric', 'cp'),
                'date' => __('Date', 'cp'),
                'no' => __('No', 'cp'),
                'yes' => __('Yes', 'cp'),
                'delete' => __('Delete', 'cp')
            )
        );
        register_setting('agile_scrum_settings', 'agile_scrum_settings');
        register_setting('photo_impressions_settings', 'photo_impressions_settings');
        register_setting('testimonial_settings', 'testimonial_settings');
        register_setting('projects_settings', 'projects_settings');

    }
endif;

//--------------Manage Content----------------//

require('projects_content.php');

require('photo_impression_content.php');

require('agile_scrum_content.php');

if (!function_exists('agile_scrum_settings_page')):
    function agile_scrum_settings_page() {
        $allowed_html = array();
        $active_tab = isset($_GET['tab']) ? wp_kses($_GET['tab'], $allowed_html) : 'manage-content';
        $tab = 'agile_scrum_settings';

        switch ($active_tab) {
            case "photo_impressions":
                photo_impressions();
                $tab = 'photo_impressions_settings';
                break;
            case "manage-content":
                agile_scrum();
                $tab = 'agile_scrum_settings';
                break;
            case "projects":
                projects();
                $tab = 'projects_settings';
                break;
        }
    ?>

    <div class="admin-settings-box">
        <div class="admin-settings-sidebar">
            <div class="admin-settings-logo">Theme settings</div>
            <ul class="admin-settings-nav">
                <li class="<?php echo $active_tab == 'manage-content' ? 'cp-tab-active' : '' ?>">
                    <a href="themes.php?page=admin/settings.php/#manage-content">
                        <span class="cp-tab-link"><?php esc_html_e('Agile & Scrum','cp') ?></span>
                    </a>
                </li>

                <li class="<?php echo $active_tab == 'projects' ? 'cp-tab-active' : '' ?>">
                    <a href="themes.php?page=admin/settings.php&tab=projects">
                        <span class="cp-tab-link"><?php esc_html_e('Projects', 'cp')?></span>
                    </a>
                </li>

                <li class="<?php echo $active_tab == 'photo_impressions' ? 'cp-tab-active' : '' ?>">
                    <a href="themes.php?page=admin/settings.php&tab=photo_impressions">
                        <span class="cp-tab-link"><?php esc_html_e('Photo Impressions', 'cp')?></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="admin-settings-content">
            <form action='options.php' method='post'>
                <?php
                wp_nonce_field('update-options');
                settings_fields($tab);
                do_settings_sections($tab);
                submit_button();
                ?>
            </form>
        </div>
    </div>
    <?php
}
endif;
?>