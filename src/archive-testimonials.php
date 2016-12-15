<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

   <?php the_post_thumbnail('thumbnail', array('class' => 'client-photo')); ?>
     
          <?php echo the_content(); ?>
     
      <?php $client_name = get_post_meta(get_the_ID(), 'client_name', true);
      if (!empty($client_name)):
          ?>
          
          <?php echo $client_name; ?>
         
      <?php endif; ?>
      <?php $company = get_post_meta(get_the_ID(), 'company', true);
      if (!empty($company)):
          ?>
          <?php echo $company; ?>
      <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>