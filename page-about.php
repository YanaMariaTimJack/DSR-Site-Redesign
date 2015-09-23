<?php

/*
  Template Name: About
*/

get_header();  ?>

<div class="main">
  <div class="container">

     <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

          <?php $stats = new WP_Query(array(
    'post_type' => 'stats'
  )); ?>

    <?php if ( $stats -> have_posts() ) while ( $stats -> have_posts() ) : $stats -> the_post(); ?>
        
        

        <?php  the_field('stat_icon');?>
        <?php  the_field('number');?>
        <?php  the_field('category');?>
    <?php endwhile; // end the loop?>

    <br>

    <?php $instructors = new WP_Query(array(
    'post_type' => 'instructors'
  )); ?>

    <?php if ( $instructors -> have_posts() ) while ( $instructors -> have_posts() ) : $instructors -> the_post(); ?>

        <?php the_post_thumbnail(); ?> 
        <?php  the_field('instructor_name');?>
        <?php  the_field('instructor_title');?>
        <?php  the_field('facebook');?>
        <?php  the_field('twitter');?>
      <a href="<?php the_field('facebook_link');?>"> <?php the_field('instagram');?></a>

    <?php endwhile; // end the loop?>


    <?php $faq = new WP_Query(array(
    'post_type' => 'instructors'
  )); ?>

    <?php if ( $faq -> have_posts() ) while ( $faq -> have_posts() ) : $faq -> the_post(); ?>

        <?php  the_field('faq');?>

    <?php endwhile; // end the loop?>
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>