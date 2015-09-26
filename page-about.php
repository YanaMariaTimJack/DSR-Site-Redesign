<?php

/*
  Template Name: About
*/

get_header();  ?>

<!-- ABOUT US DESCRIPTION -->

  <div class="container">
      
     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

<!-- STATS COUNTER -->

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

            // If the user has not uploaded an image to the custom field, no icon can or will be displayed

            // If they have uploaded an image, and the_field('stat_icon') is NOT (!) empty, then the icon will be displayed 

            // If, when setting up a custom image field (using the ACF plugin), and we set the return value as Image Object, we have to use this convention for calling it onto the page. 

            // More info can be found on the Image section of the ACF Documentation page here: http://www.advancedcustomfields.com/resources/image/

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

<!-- INSTRUCTORS     -->

     <?php $instructors = new WP_Query(array(
      'post_type' => 'instructors'
      )); ?>

  <div class="row clearfix">
        <?php if ( $instructors -> have_posts() ) while ( $instructors -> have_posts() ) : $instructors -> the_post(); ?>

          <div class="col-sm-3 col-xs-6 col-xxs-12">

          <figure>
            <?php 

            $instructor_image = get_field('instructor_image');

            if( !empty($instructor_image) ): ?>

              <img src="<?php echo $instructor_image['url']; ?>" alt="<?php echo $instructor_image['alt']; ?>" />

            <?php endif; ?>   

          </figure>


          <p><?php  the_field('instructor_name');?></p>
          <p><?php  the_field('instructor_title');?></p>

            <div class="social-icons">
              <a href="<?php the_field('facebook_link');?>"> <?php the_field('facebook');?></a>
              <a href="<?php the_field('twitter_link');?>"> <?php the_field('twitter');?></a>
              <a href="<?php the_field('instagram_link');?>"> <?php the_field('instagram');?></a>
            </div>  

          </div> <!-- closing column -->

      <?php endwhile; // end the loop?>

  </div> <!-- end of .row  -->   

    <?php $faq = new WP_Query(array(
    'post_type' => 'faq'
    )); ?>

    <!-- The counter above starts at 0. The counter starts outside of the loop -->
    
    <?php $count = 0; ?>

    <section class="row clearfix ac-container">

    <div class="col-xs-12">
      
      <?php if ( $faq -> have_posts() ) while ( $faq -> have_posts() ) : $faq -> the_post(); ?>

        <!-- Inside of the loop, every time a post is added, the counter increments by 1 -->
      
        <?php $count += 1; ?>
        
        <div>
          
          <!-- So, for every faq post on the WP dashboard that is added to the accordion, the id and for will also increment by 1 -->

          <input id="ac-<?php echo $count ?>" name="accordion-1" type="radio" />
          <label for="ac-<?php echo $count ?>"><?php the_title(); ?></label>
          <article class="ac-expand"><?php the_content(); ?></article>
        
        </div>

      <?php endwhile; ?> 
      </div>
  </section>
 
 </div>  <!--   container end   --> 

<?php get_footer(); ?>