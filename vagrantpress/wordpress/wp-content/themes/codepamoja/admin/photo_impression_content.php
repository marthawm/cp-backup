<?php
  if (!function_exists('photo_impressions')):
    function photo_impressions()
    {
      add_settings_section('cp_photo_impressions_section', __('Photo Impressions', 'cp'), 'cp_photo_impressions_section_callback', 'photo_impressions_settings');
      add_settings_field('cp_photo_impressions_field', __('', 'cp'), 'cp_photo_impressions_field_render', 'photo_impressions_settings', 'cp_photo_impressions_section');
    }
  endif;

  if (!function_exists('cp_photo_impressions_section_callback')):
    function cp_photo_impressions_section_callback()
    {
      echo '';
    }
  endif;

  if (!function_exists('cp_photo_impressions_field_render')):
  function cp_photo_impressions_field_render()
  {
    $options = get_option('photo_impressions_settings');

    $photo_impressions_settings = get_option('photo_impressions_settings');
    $data = [];
    $data['avatar' . 0] = isset($photo_impressions_settings['avatar_field']) ? $photo_impressions_settings['avatar_field'] : '';
    $data['caption' . 0] = isset($photo_impressions_settings['caption_field']) ? $photo_impressions_settings['caption_field'] : '';

    for ($i = 1; $i < count(array_count_values($photo_impressions_settings)); $i++) {
      $data['avatar' . $i] = isset($photo_impressions_settings['avatar_field_' . $i]) ? $photo_impressions_settings['avatar_field_' . $i] : '';
      $data['caption' . $i] = isset($photo_impressions_settings['caption_field_' . $i]) ? $photo_impressions_settings['caption_field_' . $i] : '';
    }
?>

<div id='masonry' class='main'>
  <div class="item img1" id='img1'>
    <img src='<?= $data['avatar' . 0]; ?>'>
  </div>
  <div class="item img2" id='img2'>
    <img src='<?= $data['avatar' . 1]; ?>'>
  </div>
  <div class="item img3" id='img3'>
    <img src='<?= $data['avatar' . 2]; ?>'>
  </div>
  <div class="item img4" id='img4'>
    <img src='<?= $data['avatar' . 3]; ?>'>
  </div>
  <div class="item img5" id='img5'>
    <img src='<?= $data['avatar' . 4]; ?>'>
  </div>

  <div class="item img6" id='img6'>
    <img src='<?= $data['avatar' . 5]; ?>'>
  </div>
  <div class="item img7" id='img7'>
    <img src='<?= $data['avatar' . 6]; ?>'>
  </div>
  <div class="item img8" id='img8'>
    <img src='<?= $data['avatar' . 7]; ?>'>
  </div>

  <div class="item img9" id='img9'>
    <img src='<?= $data['avatar' . 8]; ?>'>
  </div>
  <div class="item img10" id='img10'>
    <img src='<?= $data['avatar' . 9]; ?>'>
  </div>
  <div class="item img11" id='img11'>
    <img src='<?= $data['avatar' . 10]; ?>'>
  </div>
  <div class="item img12" id='img12'>
    <img src='<?= $data['avatar' . 11]; ?>'>
  </div>
</div>
<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
<script>
    var container = document.querySelector('#masonry');
    var msnry = new Masonry( container, {
      columnWidth: 1,
      itemSelector: '.item'
    });
</script>

<div id="wrapper" style="display:block">

<!-- photo_impressions one-->

<div class="default"><H3>Click on an image to change the photo</H3></div>

  <div class="one">
    <h3>Image One</h3>
    <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id" type="text" size="40"
       name="photo_impressions_settings[caption_field]"
       value="<?php if (isset($options['caption_field'])) {
           echo esc_attr($options['caption_field']);
       } ?>" />

    </br>

    <label for="image-url">Image URL:</label>
    <input placeholder="avatar url" id="image-url" type="text" size="80"
       name="photo_impressions_settings[avatar_field]"
       value="<?php if (isset($options['avatar_field'])) {
           echo esc_attr($options['avatar_field']);
       } ?>"/>

    </br>

    <form method="post">
        <input id="upload-button" type="button" class="button" value="Upload Image" />
    </form>

  <?php
    global $wpdb;
    if ( !empty( $_POST['image'] ) ) 
    {
      $image_url = $_POST['image'];
      $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
  ?>

</div>

<script type="text/javascript">
  jQuery(document).ready(function($)
  {
      var mediaUploader;

      $('#upload-button').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
          mediaUploader.on('select', function() 
          {
              attachment = mediaUploader.state().get('selection').first().toJSON();
              $('#image-url').val(attachment.url);
              $('#caption-id').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
</script>

  <!-- photo_impressions two-->
 <div class="two">
 <h3>Image Two</h3>
    <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id_1" type="text" size="40"
       name="photo_impressions_settings[caption_field_1]"
       value="<?php if (isset($options['caption_field_1'])) {
           echo esc_attr($options['caption_field_1']);
       } ?>" />

    </br>

    <label for="image-url">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_1" type="text" size="80"
       name="photo_impressions_settings[avatar_field_1]"
       value="<?php if (isset($options['avatar_field_1'])) {
           echo esc_attr($options['avatar_field_1']);
       } ?>" />

    </br>

    <form method="post">
        <input id="upload-button1" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button1').click(function(e) 
        {
            e.preventDefault();
            // If the uploader object has already been created, reopen the dialog
            if (mediaUploader)
             {
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
            mediaUploader.on('select', function() 
            {
                attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#image-url_1').val(attachment.url);
                $('#caption-id_1').val(attachment.caption);
            });
            // Open the uploader dialog
            mediaUploader.open();
        });
    });
  </script>

 <!-- photo_imressions three-->
 <div class="three">
 <h3>Image Three</h3>
    <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id_2" type="text" size="40"
       name="photo_impressions_settings[caption_field_2]"
       value="<?php if (isset($options['caption_field_2'])) {
           echo esc_attr($options['caption_field_2']);
       } ?>" />

    </br>

    <label for="image-url_2">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_2" type="text" size="80"
       name="photo_impressions_settings[avatar_field_2]"
       value="<?php if (isset($options['avatar_field_2'])) {
           echo esc_attr($options['avatar_field_2']);
       } ?>" />

    <br>

    <form method="post">
        <input id="upload-button2" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button2').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
              $('#image-url_2').val(attachment.url);
              $('#caption-id_2').val(attachment.caption);

          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>

<!-- photo_imressions four-->
<div class="four">
<h3>Image Four</h3>
    <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id_3" type="text" size="40"
       name="photo_impressions_settings[caption_field_3]"
       value="<?php if (isset($options['caption_field_3'])) {
           echo esc_attr($options['caption_field_3']);
       } ?>" />

    </br>

    <label for="image-url_3">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_3" type="text" size="40"
       name="photo_impressions_settings[avatar_field_3]"
       value="<?php if (isset($options['avatar_field_3'])) {
           echo esc_attr($options['avatar_field_3']);
       } ?>" />

    </br>

    <form method="post">
        <input id="upload-button3" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button3').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
              $('#image-url_3').val(attachment.url);
              $('#caption-id_3').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>


     <!-- photo_imressions five-->
<div class="five">
    <h3>Image Five</h3>
      <label for="caption-id">Caption:</label>
      <input placeholder="caption" id="caption-id_4" type="text" size="40"
         name="photo_impressions_settings[caption_field_4]"
         value="<?php if (isset($options['caption_field_4'])) {
             echo esc_attr($options['caption_field_4']);
         } ?>" />

      </br>

      <label for="image-url_4">Caption:</label>
      <input placeholder="avatar url" id="image-url_4" type="text" size="40"
          name="photo_impressions_settings[avatar_field_4]"
          value="<?php if (isset($options['avatar_field_4'])) {
               echo esc_attr($options['avatar_field_4']);
          } ?>" />

      </br>

      <form method="post">
          <input id="upload-button4" type="button" class="button" value="Upload Image" />
      </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button4').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader) 
          {
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
              $('#image-url_4').val(attachment.url);
              $('#caption-id_4').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>


     <!-- photo_imressions six-->
 <div class="six">
 <h3>Image Six</h3>
      <label for="caption-id">Caption:</label>
       <input placeholder="caption" id="caption-id_5" type="text" size="40"
         name="photo_impressions_settings[caption_field_5]"
         value="<?php if (isset($options['caption_field_5'])) {
             echo esc_attr($options['caption_field_5']);
         } ?>" />

      <br>

      <label for="image-url_5">Image URL:</label>
      <input placeholder="Avatar url" id="image-url_5" type="text" size="40"
         name="photo_impressions_settings[avatar_field_5]"
         value="<?php if (isset($options['avatar_field_5'])) {
             echo esc_attr($options['avatar_field_5']);
         } ?>" />

      <br>

      <form method="post">
        <input id="upload-button5" type="button" class="button" value="Upload Image" />
      </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) )
        {
          $image_url = $_POST['image'];
          $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
        }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button5').click(function(e)
       {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader) 
          {
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
          mediaUploader.on('select', function()
           {
              attachment = mediaUploader.state().get('selection').first().toJSON();
              $('#image-url_5').val(attachment.url);
              $('#caption-id_5').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>


 <!-- photo_imressions seven-->
 <div class="seven">
    <h3>Image Seven</h3>
      <label for="caption-id">Caption:</label>
      <input placeholder="caption" id="caption-id_6" type="text" size="40"
         name="photo_impressions_settings[caption_field_6]"
         value="<?php if (isset($options['caption_field_6'])) {
             echo esc_attr($options['caption_field_6']);
         } ?>" />

      <br>

      <label for="image-url_6">Image URL:</label>
      <input placeholder="Avatar url" id="image-url_6" type="text" size="40"
         name="photo_impressions_settings[avatar_field_6]"
         value="<?php if (isset($options['avatar_field_6'])) {
             echo esc_attr($options['avatar_field_6']);
         } ?>" />

      <br>

      <form method="post">
        <input id="upload-button6" type="button" class="button" value="Upload Image" />
      </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button6').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader) 
          {
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
              $('#image-url_6').val(attachment.url);
              $('#caption-id_6').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>



 <!-- photo_imressions eight-->
<div class="eight">
  <h3>Image Eight</h3>
    <label for="caption-id">Caption:</label>
     <input placeholder="caption" id="caption-id_7" type="text" size="40"
       name="photo_impressions_settings[caption_field_7]"
       value="<?php if (isset($options['caption_field_7'])) {
           echo esc_attr($options['caption_field_7']);
       } ?>" />

     <br>

    <label for="image-url_7">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_7" type="text" size="40"
       name="photo_impressions_settings[avatar_field_7]"
       value="<?php if (isset($options['avatar_field_7'])) {
           echo esc_attr($options['avatar_field_7']);
       } ?>" />

     <br>

    <form method="post">
        <input id="upload-button7" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) )
       {
          $image_url = $_POST['image'];
          $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
       }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button7').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
              $('#image-url_7').val(attachment.url);
              $('#caption-id_7').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>

<!-- photo_imressions nine-->

<div class="nine">
<h3>Image Nine</h3>
    <label for="caption-id">Caption:</label>
     <input placeholder="caption" id="caption-id_8" type="text" size="40"
       name="photo_impressions_settings[caption_field_8]"
       value="<?php if (isset($options['caption_field_8'])) {
           echo esc_attr($options['caption_field_8']);
       } ?>" />

    <br>

    <label for="image-url_8">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_8" type="text" size="40"
       name="photo_impressions_settings[avatar_field_8]"
       value="<?php if (isset($options['avatar_field_8'])) {
           echo esc_attr($options['avatar_field_8']);
       } ?>" />

    <br>

    <form method="post">
        <input id="upload-button8" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) ) 
      {
          $image_url = $_POST['image'];
          $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
      }
    ?>
    
  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button8').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
          mediaUploader.on('select', function()
           {
              attachment = mediaUploader.state().get('selection').first().toJSON();
              $('#image-url_8').val(attachment.url);
              $('#caption-id_8').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>


 <!-- photo_imressions 10-->
 <div class="ten">
 <h3>Image Ten</h3>
    <label for="caption-id">Caption:</label>
     <input placeholder="caption" id="caption-id_9" type="text" size="40"
         name="photo_impressions_settings[caption_field_9]"
         value="<?php if (isset($options['caption_field_9'])) {
             echo esc_attr($options['caption_field_9']);
         } ?>" />

    <br>

    <label for="image-url_9">Image URL:</label>
     <input placeholder="Avatar url" id="image-url_9" type="text" size="40"
         name="photo_impressions_settings[avatar_field_9]"
         value="<?php if (isset($options['avatar_field_9'])) {
             echo esc_attr($options['avatar_field_9']);
         } ?>" />

    <br>

    <form method="post">
        <input id="upload-button9" type="button" class="button" value="Upload Image" />
    </form>

    <?php
      global $wpdb;

      if ( !empty( $_POST['image'] ) )
       {
          $image_url = $_POST['image'];
          $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
       }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button9').click(function(e)
       {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
              $('#image-url_9').val(attachment.url);
              $('#caption-id_9').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });

  </script>


     <!-- photo_imressions 11-->
  <div class="eleven">
  <h3>Image Eleven</h3>
    <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id_10" type="text" size="40"
       name="photo_impressions_settings[caption_field_10]"
       value="<?php if (isset($options['caption_field_10'])) {
           echo esc_attr($options['caption_field_10']);
       } ?>" />

    <br>

    <label for="image-url_10">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_10" type="text" size="40"
       name="photo_impressions_settings[avatar_field_10]"
       value="<?php if (isset($options['avatar_field_10'])) {
           echo esc_attr($options['avatar_field_10']);
       } ?>" />

    <br>

    <form method="post">
      <input id="upload-button10" type="button" class="button" value="Upload Image" />
    </form>

    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) )
     {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
     }
    ?>

</div>

<script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button10').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
              $('#image-url_10').val(attachment.url);
              $('#caption-id_10').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>

    <!-- photo_impressions 12-->
<div class="twelve">
<h3>Image Twelve</h3>
  <label for="caption-id">Caption:</label>
    <input placeholder="caption" id="caption-id_11" type="text" size="40"
     name="photo_impressions_settings[caption_field_11]"
     value="<?php if (isset($options['caption_field_11'])) {
         echo esc_attr($options['caption_field_11']);
     } ?>" />

    <br>
    
    <label for="image-url_11">Image URL:</label>
    <input placeholder="Avatar url" id="image-url_11" type="text" size="40"
       name="photo_impressions_settings[avatar_field_11]"
       value="<?php if (isset($options['avatar_field_11'])) {
           echo esc_attr($options['avatar_field_11']);
       } ?>" />

    <br>

    <form method="post">
      <input id="upload-button11" type="button" class="button" value="Upload Image" />
    </form>

    <?php
    global $wpdb;

    if ( !empty( $_POST['image'] ) ) 
    {
        $image_url = $_POST['image'];
        $wpdb->insert( 'images', array( 'image_url' => $image_url ), array( '%s' ) );
    }
    ?>

  </div>

  <script type="text/javascript">
    jQuery(document).ready(function($)
    {
      var mediaUploader;

      $('#upload-button11').click(function(e) 
      {
          e.preventDefault();
          // If the uploader object has already been created, reopen the dialog
          if (mediaUploader)
           {
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
          mediaUploader.on('select', function()
          {
              attachment = mediaUploader.state().get('selection').first().toJSON();
              $('#image-url_11').val(attachment.url);
              $('#caption-id_11').val(attachment.caption);
          });
          // Open the uploader dialog
          mediaUploader.open();
      });
    });
  </script>


</div>
   
 
<?php
 
  }
  endif;
?>