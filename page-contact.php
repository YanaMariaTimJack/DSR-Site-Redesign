<?php

/*
	Template Name: Contact
*/

get_header();  ?>

<div class="main">
  <div class="container">

  	<h2><?php the_title(); ?></h2>

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.014210092549!2d55.1443319!3d25.067507499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6cb1eb040be5%3A0xd4cbbb1ca0c76e3b!2sMazaya+Business+Avenue+-+Tower+AA1%2C+First+Al+Khail+St+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2sca!4v1442871444439" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

   <div class="phone">
   		<figure>
			<?php 

			$phone_icon = get_field('phone_icon');

			if( !empty($phone_icon) ): ?>

				<img src="<?php echo $phone_icon['url']; ?>" alt="<?php echo $phone_icon['alt']; ?>" />

			<?php endif; ?>   			

   		</figure>

		<?php while( has_sub_field('phone') ): ?>
		  <p class="phone_number"><?php the_sub_field('phone_number'); ?></p>
		<?php endwhile; ?>
   </div>

   <div class="location">
   		<p><?php the_field('address'); ?></p> 
   </div>

   <div class="email">
   		<p><?php the_field('email'); ?></p>
   </div>

	<h3>Contact form</h3>

	<form class="contact" method="POST" action="////formspree.io/yanatzvetkova@gmail.com">
	   	<input type="text" placeholder="name">
	    <input type="email" name="_replyto" placeholder="email"/>
	    <input type="text" placeholder="phone">
	    <input type="text" placeholder="website">
	    <textarea name="message" placeholder="comment"></textarea>
	    <input type="text" name="_gotcha" style="display:none">
	    <button type="submit">Submit</button>
	</form>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>