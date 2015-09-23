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
      
      <figure>
      <?php 

      $stat_icon = get_field('stat_icon');

      if( !empty($stat_icon) ): ?>

        <img src="<?php echo $stat_icon['url']; ?>" alt="<?php echo $stat_icon['alt']; ?>" />

      <?php endif; ?>         

      </figure>

        <?php  the_field('number');?>
        <?php  the_field('category');?>
    <?php endwhile; // end the loop?>

    <br>

    <?php $instructors = new WP_Query(array(
    'post_type' => 'instructors'
    )); ?>

    <?php if ( $instructors -> have_posts() ) while ( $instructors -> have_posts() ) : $instructors -> the_post(); ?>

          <figure>
      <?php 

      $instructor_image = get_field('instructor_image');

      if( !empty($instructor_image) ): ?>

        <img src="<?php echo $instructor_image['url']; ?>" alt="<?php echo $instructor_image['alt']; ?>" />

      <?php endif; ?>         

      </figure>
        <?php  the_field('instructor_name');?>
        <?php  the_field('instructor_title');?>
      <a href="<?php the_field('facebook_link');?>"> <?php the_field('facebook');?></a>
      <a href="<?php the_field('twitter_link');?>"> <?php the_field('twitter');?></a>
      <a href="<?php the_field('instagram_link');?>"> <?php the_field('instagram');?></a>

    <?php endwhile; // end the loop?>

    <?php $faq = new WP_Query(array(
    'post_type' => 'faq'
    )); ?>

    <?php $count = 0; ?>

    <section class="ac-container">
      
      <?php if ( $faq -> have_posts() ) while ( $faq -> have_posts() ) : $faq -> the_post(); ?>
      
        <?php $count += 1; ?>

        <input id="ac-<?php echo $count ?>" name="accordion-1" type="radio" />
        <label for="ac-<?php echo $count ?>"><?php the_title(); ?></label>
        <article class="ac-expand"><?php the_content(); ?></article>

      <?php endwhile; ?> 

    </section>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>