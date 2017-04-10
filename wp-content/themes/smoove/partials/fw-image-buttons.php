<div class="section-3 image-button bg-full" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
	<div class="tablet-bg-image bg-full" style="background-image: url(<?php echo the_sub_field("tablet_background_image"); ?>);">
	    <div class="container">
			<div class="row">
				<div class="col-sm-8 col-center text-center">
					<div class="dis-ta">
						<div class="inner-container dis-cell align-middle wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
							<h2><?php echo the_sub_field("title"); ?></h2>
							<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
							<div class="row wow fadeInUp" data-wow-duration="1s">
								<div class="col-xs-6 text-center">
									<h3><?php echo the_sub_field("button_register_title"); ?></h3>
									<a href="<?php the_sub_field("button_register_url"); ?>" class="btn btn-orange" data-toggle="modal" data-target=".register-form"><?php echo the_sub_field("button_register_text"); ?></a>
									<!-- Large modal -->

								</div>
								<div class="col-xs-6 text-center">
									<h3><?php echo the_sub_field("button_phone_title"); ?></h3>
									<a href="<?php the_sub_field("button_phone_number"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_phone_number"); ?></a>
								</div>
							</div><!-- /.row -->
						</div>
					</div><!-- /.dis-ta -->
				</div><!-- /.col-sm-5 -->

			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.tablet-bg-image -->
</div><!-- /.section -->
<div class="modal fade register-form" tabindex="-1" role="dialog" aria-labelledby="registerForm">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
	<div class="modal-dialog" role="document">
		<div class="contact-form-cont modal-form">
			<h2 class="title"><?php echo the_sub_field("modal_form_title"); ?></h2>
			<p class="sub-title"><?php echo the_sub_field("modal_form_subtitle"); ?></p>
			<?php echo the_sub_field("modal_form_id"); ?>
		</div>
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
