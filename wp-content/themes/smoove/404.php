<?php get_header(); ?>
			
<div class="bg-full sectio-404">
    <div class="container">
		<div class="row">
			<div class="col-sm-8 col-center text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
				<div class="dis-ta">
					<div class="inner-container dis-cell align-middle">
						<h2><i class="fa fa-meh-o"></i></h2>
						<h2>Epic 404 - Article Not Found</h2>
						<p><?php _e("This is embarassing. We can't find what you were looking for.","wpbootstrap"); ?></p>
						<div class="row">
							<div class="col col-lg-12">
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div><!-- /.dis-ta -->
			</div><!-- /.col-sm-5 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->


<?php get_footer(); ?>