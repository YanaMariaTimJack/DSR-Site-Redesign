<div class="container">
	<?php

	/*
		Template Name: Contact
	*/

	get_header();  ?>

</div>


  <div class="container">
	<div class="row clearfix">
  		<h2 class="col-xs-12"><?php the_title(); ?></h2>
 	</div>

  	<div class="row clearfix">
  	   <iframe class="col-xs-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.014210092549!2d55.1443319!3d25.067507499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6cb1eb040be5%3A0xd4cbbb1ca0c76e3b!2sMazaya+Business+Avenue+-+Tower+AA1%2C+First+Al+Khail+St+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2sca!4v1442871444439" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
  	</div>

  	<div class="row clearfix">
  		<div class="col-xs-4 col-xxs-12 phone">
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

		<div class="col-xs-4 col-xxs-12 location">
		
	   		<figure>
				<?php 

				$location_icon = get_field('location_icon');

				if( !empty($phone_icon) ): ?>

					<img src="<?php echo $location_icon['url']; ?>" alt="<?php echo $location_icon['alt']; ?>" />

				<?php endif; ?>   			

	   		</figure>

	   		<p><?php the_field('address'); ?></p> 

   		</div>

   		<div class="col-xs-4 col-xxs-12 email">

	   		<figure>
				<?php 

				$email_icon = get_field('email_icon');

				if( !empty($phone_icon) ): ?>

					<img src="<?php echo $email_icon['url']; ?>" alt="<?php echo $email_icon['alt']; ?>" />

				<?php endif; ?>   			

	   		</figure>

   			<p><?php the_field('email'); ?></p>
  	 	</div>

<!--    THIS IS THE CLOSING DIV FOR THE ROW -->
</div>


		<h3>Contact form</h3>

	<form method="POST" action="////formspree.io/yanatzvetkova@gmail.com">

		<div class="row clearfix">
	  		<div class="col-xs-6 col-xxs-12">
		  		<input type="text" placeholder="name">
		  	</div>	
		  	<div class="col-xs-6 col-xxs-12">
			    <input type="email" name="_replyto" placeholder="email"/>
			</div>    
			<div class="col-xs-6 col-xxs-12">    
			    <input type="text" placeholder="phone">
			</div>    
			<div class="col-xs-6 col-xxs-12">    
		    	<input type="text" placeholder="website">
		    </div>
	  	</div>
		   
		<div class="row clearfix">
			<div class="col-xs-12"> 
		    	<textarea name="message" placeholder="comment"></textarea>
		    	<input type="text" name="_gotcha" style="display:none">
		    </div>
	    </div>


	    <div class="row clearfix">
		    <div class="col-xs-12"> 
		    	<button type="submit">Submit</button>
		    </div>
	    </div>
	</form>

  </div> <!-- /.container -->


<?php get_footer(); ?>