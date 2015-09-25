<?php

/*
  Template Name: About
*/

get_header();  ?>


  <div class="container">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>


 
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



    <?php $count = 0; ?>

    <!-- The counter above starts at 0. The counter starts outside of the loop -->


    <section class="row clearfix ac-container">

    <div class="col-xs-12">
      
      <?php if ( $faq -> have_posts() ) while ( $faq -> have_posts() ) : $faq -> the_post(); ?>

        <!-- Inside of the loop, every time a post added, the counter increments by 1 -->
      
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