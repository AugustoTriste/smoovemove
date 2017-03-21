<div class="section testimonial-section">
	<div class="container">
		<div class="row owl-carousel owl-theme owl-testimonials">
			<?php
	            if(have_rows("testimonial_item")):
	                while(have_rows("testimonial_item")): the_row();              
	        ?>
				<div>
					<div class="col-sm-8 col-center text-center">
						<img class="quotes quote-up" src="<?php bloginfo('template_directory'); ?>/images/quotes_up.png">
						<p class="testimonial"><?php echo the_sub_field("testimonial"); ?></p>
						<img class="quotes quote-down" src="<?php bloginfo('template_directory'); ?>/images/quotes_down.png">
						<p class="name"><?php echo the_sub_field("name_profession");?></p>
					</div>
				</div>                   
	        <?php
	            endwhile;
	            endif;
	        ?>
		</div><!-- /.row .owl-carousel -->
	</div><!-- /.conatainer -->
</div><!-- /.section.testimonial-section -->
