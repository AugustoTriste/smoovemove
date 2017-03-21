<div class="section-3 image-button bg-full" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
    <div class="container">
		<div class="row">
			<div class="col-sm-8 col-center text-center">
				<div class="dis-ta">
					<div class="inner-container dis-cell align-middle wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
						<h2><?php echo the_sub_field("title"); ?></h2>
						<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
						<div class="row">
							<?php
					            if(have_rows("buttons_row")):
					                while(have_rows("buttons_row")): the_row();              
					        ?>
								<div>
									<div class="col-sm-6 text-center wow fadeInUp" data-wow-duration="1s">
										<h3><?php echo the_sub_field("button_title"); ?></h3>
										<a href="<?php the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
									</div>
								</div>                   
					        <?php
					            endwhile;
					            endif;
					        ?>
						</div>
					</div>
				</div><!-- /.dis-ta -->
			</div><!-- /.col-sm-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->
