<?php

/*
  Template Name: About
*/

get_header();  ?>

<div class="main">
  <div class="container">

    <h2><?php the_title(); ?></h2>

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
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>