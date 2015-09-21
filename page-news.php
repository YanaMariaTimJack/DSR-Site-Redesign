<?php

/*
	Template Name: News
*/

get_header();  ?>
	
	<figure>
		<?php if (has_post_thumbnail() ) { 
			the_post_thumbnail('large', array('class' => 'news-hero'));
 			} else { ?>
  			<div class="filler"></div>
  		<?php } ?>
  		<h1><?php the_title(); ?></h1>
	</figure>
    			
<div class="main">
  <div class="container">
	
	<?php $news = new WP_Query(array(
		'post_type' => 'news'
	)); ?>

		<?php if ( $news -> have_posts() ) while ( $news -> have_posts() ) : $news -> the_post(); ?>

					
			<h2><?php the_title(); ?></h2>
			<span class="date"><?php the_date('d');?></span>	
			<span class="month-year"><?php the_time('M Y') ?></span>	
			<!-- could not use the_date() twice on the page, so we used the_time() as a alternative  -->

	  <?php the_content(); ?>

	<?php if (has_post_thumbnail() ) {
	  the_post_thumbnail();
	  }	else { ?>
	  <div class="filler"></div>
	<?php	} ?>

	<?php endwhile; // end the loop?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>