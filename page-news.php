<div class="container">
	
	<?php

	/*
		Template Name: News
	*/ 

	get_header();  ?>
	
</div>

	<figure>
		<?php if (has_post_thumbnail() ) { 
			the_post_thumbnail('large', array('class' => 'news-hero'));
 			} else { ?>
  			<div class="filler"></div>
  		<?php } ?>
  		<h1><?php the_title(); ?></h1>
	</figure>
    			
<div class="container">
	
	<?php $news = new WP_Query(array(
		'post_type' => 'news'
	)); ?>

	<!-- If we put the row inside of the if statement, every time it looped through the news posts, it would create another row. -->

	<div class="row clearfix">
		
			<?php if ( $news -> have_posts() ) while ( $news -> have_posts() ) : $news -> the_post(); ?>
			<div class="col-xs-4">	
				
				<!-- could not use the_date() twice on the page, so we used the_time() as a alternative  -->
				<span class="date"><?php the_date('d');?></span>	
				<span class="month-year"><?php the_time('M Y') ?></span>			
				<h2><?php the_title(); ?></h2>

			  <!-- This gets the first # of characters from the content in the post -->
			  <p><?php echo substr(get_the_excerpt(), 0,30); ?></p>

			<!-- If a features image has been set, this will post that featured image (post_thumbnail) -->
			<?php if (has_post_thumbnail() ) {
			  the_post_thumbnail();
			  }	else { ?>
			  <!-- However, if a featured image has not been set, a filler div will be put in its place so that the content around doesn't collapse -->
			  <div class="filler"></div>
			<?php	} ?>
		</div> <!-- end of column -->	

			<?php endwhile; // end the loop?>

	</div>	<!-- end of row -->

  </div> <!-- /.container -->


<?php get_footer(); ?>