<?php

/*
  Template Name: Services
*/

get_header();  ?>

<!-- STATS COUNTER -->

<?php $stats = new WP_Query(array(
  'post_type' => 'stats'
)); ?>

<div class="container">
  
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

<!-- SERVICES jQuery Gallery-->

  <div class="row clearfix">

    <div class="previews col-xs-3">
      
      <?php $services = new WP_Query(array(
        'post_type' => 'services'
      )); ?>

      <?php if ( $services -> have_posts() ) while ( $services -> have_posts() ) : $services -> the_post(); ?>

      <?php $service_icon = get_field('service_icon'); ?>

        <a href="#" data-src="<?php echo $service_icon['url']; ?>" data-alt="<?php echo $service_icon['alt']; ?>" data-title="<?php the_field('service_name'); ?>" data-desc="<?php the_field('service_desc'); ?>" class="clearfix"> 
          
          <figure>
            
            <?php if ( !empty($service_icon)): ?>
              <img src="<?php echo $service_icon['url']; ?>" alt="<?php echo $service_icon['alt']; ?>">

            <?php endif; ?>      

          </figure>
            
          <p><?php the_field('service_name'); ?></p>
        </a>

      <?php endwhile; // end the loop?>

    </div> <!-- end of .previews -->

    <div class="full col-xs-9">

      <!-- The reason that we have fields set here is because we need one to be displayed by default on load. Once the user clicks one of the other services links, all these fields will be updated with the data from the data-attributes that correspond to the clicked service -->

      <?php $service_icon = get_field('service_icon'); ?>

      <figure>
        <?php if ( !empty($service_icon)): ?>
          <img src="<?php echo $service_icon['url']; ?>" alt="<?php echo $service_icon['alt']; ?>">

        <?php endif; ?>
      </figure>

      <h3><?php the_field('service_name'); ?></h3>
      <p><?php the_field('service_desc'); ?></p>
     
    </div> <!-- end of .full -->

  </div> <!-- end of .row -->

</div> <!-- end of .container -->

<?php get_footer(); ?>