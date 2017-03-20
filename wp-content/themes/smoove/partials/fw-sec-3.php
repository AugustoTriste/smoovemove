<div class="section-3 bg-full" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
    <div class="container">
		<div class="row">
			<div class="col-sm-8 col-center text-center">
				<div class="dis-ta">
					<div class="inner-container dis-cell align-middle wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
						<h2><?php echo the_sub_field("title"); ?></h2>
						<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
						<div class="button-row">
							<a href="<?php echo the_sub_field("button_url"); ?>" class="btn btn-orange"><?php echo the_sub_field("button_text"); ?></a>
						</div>
					</div>
				</div><!-- /.dis-ta -->
			</div><!-- /.col-sm-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->
