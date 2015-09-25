<?php

/*
  Template Name: Services
*/

get_header();  ?>

<!-- Stats counter -->

<?php $stats = new WP_Query(array(
  'post_type' => 'stats'
)); ?>

<div class="row clearfix">  

      <?php if ( $stats -> have_posts() ) while ( $stats -> have_posts() ) : $stats -> the_post(); ?>
    
      <div class="col-sm-3 col-xs-6 col-xxs-12">

        <div class="row">

          <figure class="col-xs-4">
            <?php 

            $stat_icon = get_field('stat_icon');


            if( !empty($stat_icon) ): ?>
      
              <img src="<?php echo $stat_icon['url']; ?>" alt="<?php echo $stat_icon['alt']; ?>" />

            <?php endif; ?>         
          </figure>
          <div class="col-xs-8">
            <p><?php  the_field('number');?></p>
            <p><?php  the_field('category');?></p>
          </div>  
        </div> <!-- Closing sub row inside the column -->

      </div> <!-- Closing column & Overall column layout -->

      <?php endwhile; // end the loop?>

    </div> <!-- closing .row -->

<!-- Services -->

<div class="previews">
  
  <?php $services = new WP_Query(array(
    'post_type' => 'services'
  )); ?>

  <?php if ( $services -> have_posts() ) while ( $services -> have_posts() ) : $services -> the_post(); ?>

    <a href="#" style="background:red">
      <figure>
        <?php $service_icon = get_field('service_icon'); ?>

        <?php if ( !empty($service_icon)): ?>
          <img src="<?php echo $service_icon['url']; ?> " alt="<?php echo $service_icon['alt']; ?> ">

        <?php endif; ?>      

      </figure>
        
      <p><?php the_field('service_name'); ?></p>
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