<?php

/*
  Template Name: Services
*/

get_header();  ?>

<!-- Stats counter -->

<?php $stats = new WP_Query(array(
  'post_type' => 'stats'
)); ?>

<?php if ( $stats -> have_posts() ) while ( $stats -> have_posts() ) : $stats -> the_post(); ?>

  <figure>
    <?php $stat_icon = get_field('stat_icon'); ?>

    <?php if ( !empty($stat_icon)): ?>
      <img src="<?php echo $stat_icon['url']; ?> " alt="<?php echo $stat_icon['alt']; ?> ">

    <?php endif; ?>      

  </figure>

  <?php the_field('number'); ?>
  <?php the_field('category') ?>

<?php endwhile; // end the loop?>

<!-- Services -->

<div class="previews">
  
  <?php $services = new WP_Query(array(
    'post_type' => 'services'
  )); ?>

  <?php if ( $services -> have_posts() ) while ( $services -> have_posts() ) : $services -> the_post(); ?>

    <a href="#" data-fill="">
      <figure>
        <?php $service_icon = get_field('service_icon'); ?>

        <?php if ( !empty($service_icon)): ?>
          <img src="<?php echo $service_icon['url']; ?> " alt="<?php echo $service_icon['alt']; ?> ">

        <?php endif; ?>      

      </figure>
      
      <?php the_field('service_name'); ?>
    </a>

  <?php endwhile; // end the loop?>

</div> <!-- end of .previews -->

<div class="full">

    <div class="previewFull">
      <?php the_field('service_name'); ?>
      <?php the_field('service_desc'); ?>
    </div>
    
</div> <!-- end of .full -->

<?php get_footer(); ?>