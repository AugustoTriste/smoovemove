<div class="top-section section-1 bg-full parallax-header wow fadeIn hidden-mb" style="background-image: url(<?php echo the_sub_field("header_bg_image"); ?>);">
    <div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-center">
				<div class="dis-ta header-text parallax-text">
					<div class="text-container dis-cell text-center align-middle wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
						<h2><?php echo the_sub_field("title"); ?></h2>
						<h3><?php echo the_sub_field("sub_title"); ?></h3>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->

<div class="top-section mb-sec-bg visible-mb wow fadeIn" style="background-image: url(<?php echo the_sub_field("mobile_background_image"); ?>);">
    
</div><!-- /.section -->

<div class="mb-section visible-mb">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-center">
				<div class="header-text">
					<div class="text-container dis-cell text-center align-middle wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
						<h2><?php echo the_sub_field("title"); ?></h2>
						<h3><?php echo the_sub_field("sub_title"); ?></h3>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row button-row text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
		    <div class="col-sm-12">
		        <a href="<?php the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
		    </div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.mb-section -->	

