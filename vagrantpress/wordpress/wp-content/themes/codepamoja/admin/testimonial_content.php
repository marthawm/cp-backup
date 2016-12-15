<?php
if (!function_exists('testimonial')):
function testimonial()
{
add_settings_section('cp_testimonial_section', __('testimonial', 'cp'), 'cp_testimonial_section_callback', 'testimonial_settings');
add_settings_field('cp_testimonial_field', __('testimonial', 'cp'), 'cp_testimonial_field_render', 'testimonial_settings', 'cp_testimonial_section');
}
endif;

if (!function_exists('cp_testimonial_section_callback')):
function cp_testimonial_section_callback()
{
echo '';
}
endif;

if (!function_exists('cp_testimonial_field_render')):
function cp_testimonial_field_render()
{
$options = get_option('testimonial_settings');
?>
<!-- testimonial one-->
<input placeholder="Enter the Name" type="text" size="40"
       name="testimonial_settings[cp_testimonial_title_field]"
       value="<?php if (isset($options['cp_testimonial_title_field'])) {
           echo esc_attr($options['cp_testimonial_title_field']);
       } ?>"/>
<input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field]" type="text" size="40"
       name="testimonial_settings[cp_testimonial_text_field]"
       value="<?php if (isset($options['cp_testimonial_text_field'])) {
           echo esc_attr($options['cp_testimonial_text_field']);
       } ?>"/>

<input placeholder="Avatar url" id="image-url" type="hidden" size="40"
       name="testimonial_settings[cp_testimonial_avatar_field]"
       value="<?php if (isset($options['cp_testimonial_avatar_field'])) {
           echo esc_attr($options['cp_testimonial_avatar_field']);
       } ?>"/>
    <form method="post">
        <input id="upload-button" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>

    <!-- testimonial two-->
    <input placeholder="Enter the Name" type="text" size="40"
           name="testimonial_settings[cp_testimonial_title_field_1]"
           value="<?php if (isset($options['cp_testimonial_title_field_1'])) {
               echo esc_attr($options['cp_testimonial_title_field_1']);
           } ?>"/>
    <input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field_1]" type="text" size="40"
           name="testimonial_settings[cp_testimonial_text_field_1]"
           value="<?php if (isset($options['cp_testimonial_text_field_1'])) {
               echo esc_attr($options['cp_testimonial_text_field_1']);
           } ?>"/>

    <input placeholder="Avatar url" id="image-url1" type="text" size="40"
           name="testimonial_settings[cp_testimonial_avatar_field_1]"
           value="<?php if (isset($options['cp_testimonial_avatar_field_1'])) {
               echo esc_attr($options['cp_testimonial_avatar_field_1']);
           } ?>"/>
    <form method="post">
        <input id="upload-button1" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button1').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url1').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>
      <!-- testimonial three-->
    <input placeholder="Enter the Name" type="text" size="40"
           name="testimonial_settings[cp_testimonial_title_field_2]"
           value="<?php if (isset($options['cp_testimonial_title_field_2'])) {
               echo esc_attr($options['cp_testimonial_title_field_2']);
           } ?>"/>
    <input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field_2]" type="text" size="40"
           name="testimonial_settings[cp_testimonial_text_field_2]"
           value="<?php if (isset($options['cp_testimonial_text_field_2'])) {
               echo esc_attr($options['cp_testimonial_text_field_2']);
           } ?>"/>

    <input placeholder="Avatar url" id="image-url2" type="text" size="40"
           name="testimonial_settings[cp_testimonial_avatar_field_2]"
           value="<?php if (isset($options['cp_testimonial_avatar_field_2'])) {
               echo esc_attr($options['cp_testimonial_avatar_field_2']);
           } ?>"/>
    <form method="post">
        <input id="upload-button2" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button2').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url2').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>

  <!-- testimonial four-->
    <input placeholder="Enter the Name" type="text" size="40"
           name="testimonial_settings[cp_testimonial_title_field_3]"
           value="<?php if (isset($options['cp_testimonial_title_field_3'])) {
               echo esc_attr($options['cp_testimonial_title_field_3']);
           } ?>"/>
    <input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field_3]" type="text" size="40"
           name="testimonial_settings[cp_testimonial_text_field_3]"
           value="<?php if (isset($options['cp_testimonial_text_field_3'])) {
               echo esc_attr($options['cp_testimonial_text_field_3']);
           } ?>"/>

    <input placeholder="Avatar url" id="image-url3" type="text" size="40"
           name="testimonial_settings[cp_testimonial_avatar_field_3]"
           value="<?php if (isset($options['cp_testimonial_avatar_field_3'])) {
               echo esc_attr($options['cp_testimonial_avatar_field_3']);
           } ?>"/>
   <form method="post">
        <input id="upload-button3" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button3').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url3').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>

      <!-- testimonial five-->
    <input placeholder="Enter the Name" type="text" size="40"
           name="testimonial_settings[cp_testimonial_title_field_4]"
           value="<?php if (isset($options['cp_testimonial_title_field_4'])) {
               echo esc_attr($options['cp_testimonial_title_field_4']);
           } ?>"/>
    <input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field_4]" type="text" size="40"
           name="testimonial_settings[cp_testimonial_text_field_4]"
           value="<?php if (isset($options['cp_testimonial_text_field_4'])) {
               echo esc_attr($options['cp_testimonial_text_field_4']);
           } ?>"/>

    <input placeholder="Avatar url" id="image-url4" type="text" size="40"
           name="testimonial_settings[cp_testimonial_avatar_field_4]"
           value="<?php if (isset($options['cp_testimonial_avatar_field_4'])) {
               echo esc_attr($options['cp_testimonial_avatar_field_4']);
           } ?>"/>
      <form method="post">
        <input id="upload-button4" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button4').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url4').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>

      <!-- testimonial Six-->
    <input placeholder="Enter the Name" type="text" size="40"
           name="testimonial_settings[cp_testimonial_title_field_5]"
           value="<?php if (isset($options['cp_testimonial_title_field_5'])) {
               echo esc_attr($options['cp_testimonial_title_field_5']);
           } ?>"/>
    <input placeholder="Enter description" id="testimonial_settings[cp_testimonial_text_field_5]" type="text" size="40"
           name="testimonial_settings[cp_testimonial_text_field_5]"
           value="<?php if (isset($options['cp_testimonial_text_field_5'])) {
               echo esc_attr($options['cp_testimonial_text_field_5']);
           } ?>"/>

    <input placeholder="Avatar url" id="image-url_5" type="text" size="40"
           name="testimonial_settings[cp_testimonial_avatar_field_5]"
           value="<?php if (isset($options['cp_testimonial_avatar_field_5'])) {
               echo esc_attr($options['cp_testimonial_avatar_field_5']);
           } ?>"/>
 <form method="post">
        <input id="upload-button5" type="button" class="button" value="Upload Image" />
    </form>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>
    <script type='text/javascript'>

        jQuery(document).ready(function($){

            var mediaUploader;

            $('#upload-button5').click(function(e) {
                e.preventDefault();
                // If the uploader object has already been created, reopen the dialog
                if (mediaUploader) {
                    mediaUploader.open();
                    return;
                }
                // Extend the wp.media object
                mediaUploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Image',
                    button: {
                        text: 'Choose Image'
                    }, multiple: false });

                // When a file is selected, grab the URL and set it as the text field's value
                mediaUploader.on('select', function() {
                    attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#image-url_5').val(attachment.url);
                });
                // Open the uploader dialog
                mediaUploader.open();
            });

        });
    </script>
    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    wp_enqueue_media();

    ?>

    <?php

}
endif;
?>