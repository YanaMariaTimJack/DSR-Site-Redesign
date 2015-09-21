<?php

/*
	Template Name: News
*/

get_header();  ?>

<div class="main">
  <div class="container">
	
	<?php $news = new WP_Query(array(
		'post_type' => 'news'
	)); ?>

	<?php if ( $news -> have_posts() ) while ( $news -> have_posts() ) : $news -> the_post(); ?>

	  <h2><?php the_title(); ?></h2>
	  <?php the_content(); ?>

	<?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>