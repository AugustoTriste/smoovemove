<?php
/*
Template Name: Trade Page
*/
?>

<?php get_header(); ?>

			<?php

			if( have_rows('page_contents') ):

			    while ( have_rows('page_contents') ) : the_row();

			        if( get_row_layout() == 'hero_section' ): ?>

			<div class="top-section section-1 bg-full parallax-header wow fadeIn hidden-mb" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
				<div class="tablet-bg-image bg-full" style="background-image: url(<?php echo the_sub_field("tablet_background_image"); ?>);">
				    <div class="container-fluid">
						<div class="row">
							<div class="col-md-5 col-center">
								<div class="dis-ta header-text parallax-text">
									<div class="text-container dis-cell text-center align-middle wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
										<h2><?php echo the_sub_field("title"); ?></h2>
										<h3><?php echo the_sub_field("sub_title"); ?></h3>
										<div class="button-row">
											<a href="<?php echo the_sub_field("button_url"); ?>" class="btn btn-orange"><?php echo the_sub_field("button_text"); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.tablet-bg-image -->
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

			<?php elseif( get_row_layout() == 'section_2_images' ): ?>

			<div class="section-images">
			    <div class="container">
					<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
						<div class="col-md-6 col-center">
							<img src="<?php echo the_sub_field("logo"); ?>" alt="Smoovemove">
							<h2><?php echo the_sub_field("title"); ?></h2>
							<p><?php echo the_sub_field("sub_title"); ?></p>
						</div>
					</div><!-- /.row -->
					<div class="row images-row hidden-xs wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
					 <?php
			            if(have_rows("images_row")):
			                while(have_rows("images_row")): the_row();
			                $column_image = get_sub_field("image");                
			        ?>
			        		<div class="">
			        			<div class="col-sm-4">
				                    <?php
				                    if(!empty($column_image)):
				                    ?>
				                        <img class="round" src="<?php the_sub_field("image"); ?>">
				                    <?php
				                    endif;
				                    ?>
				                        <p class="sub-title text-center"><?php the_sub_field("text"); ?></p>                        
				                </div>  
			        		</div>             
			        <?php
			                endwhile;
			            endif;
			        ?>
			        </div><!-- /.row -->
					
					<div class="images-row visible-xs owl-carousel owl-theme owl-3-images wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
					 <?php
			            if(have_rows("images_row")):
			                while(have_rows("images_row")): the_row();
			                $column_image = get_sub_field("image");                
			        ?>
			        		<div>
			        			<div class="col-sm-4">
				                    <?php
				                    if(!empty($column_image)):
				                    ?>
				                        <img class="round" src="<?php the_sub_field("image"); ?>">
				                    <?php
				                    endif;
				                    ?>
				                        <p class="sub-title text-center"><?php the_sub_field("text"); ?></p>                        
				                </div>  
			        		</div>             
			        <?php
			                endwhile;
			            endif;
			        ?>
			        </div><!-- /.row -->
			        <div class="row button-row text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
					    <div class="col-sm-12">
					        <a href="<?php the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
					    </div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.section -->
				
			<?php elseif( get_row_layout() == 'middle_section' ): ?>

			<div class="section-3 bg-full hidden-mb" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
				<div class="tablet-bg-image bg-full" style="background-image: url(<?php echo the_sub_field("tablet_background_image"); ?>);">
				    <div class="container">
						<div class="row">
							<div class="col-sm-8 col-center text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
								<div class="dis-ta">
									<div class="inner-container dis-cell align-middle">
										<h2><?php echo the_sub_field("title"); ?></h2>
										<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
										<div class="button-row">
											<a href="<?php echo the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
										</div>
									</div>
								</div><!-- /.dis-ta -->
							</div><!-- /.col-sm-5 -->
						</div><!-- /.row -->
					</div><!-- /.container -->
				</div><!-- /.tablet-bg-image -->
			</div><!-- /.section -->

			<div class="mb-sec-bg mb-mid-bg visible-mb" style="background-image: url(<?php echo the_sub_field("mobile_background_image"); ?>);">
			    
			</div><!-- /.section -->

			<div class="section-3 mb-section visible-mb">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-center text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
							<h2><?php echo the_sub_field("title"); ?></h2>
							<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
							<div class="button-row">
								<a href="<?php echo the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
							</div>
						</div><!-- /.col-sm-5 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.middle-mb-bg -->

			<?php elseif( get_row_layout() == 'mobile_left' ): ?>

			<div class="section-6 mobile-left" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
			    <div class="container">
					<div class="row text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="750ms">
						<div class="col-sm-6 hidden-xs">
							<div class="right-image">
								<img src="<?php echo the_sub_field("mobile_image"); ?>">
							</div>
						</div>
						<div class="col-sm-6">
							<img src="<?php echo the_sub_field("logo"); ?>" class="mini-logo">
							<h2><?php echo the_sub_field("title"); ?></h2>
							<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
							<div class="button-row">
								<a href="<?php echo the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
							</div>
						</div>
						<div class="col-sm-6 visible-xs">
							<div class="right-image">
								<img src="<?php echo the_sub_field("mobile_image"); ?>">
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.section -->

			<?php elseif( get_row_layout() == 'mobile_right' ): ?>

			<div class="section-6 mobile-right" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
			    <div class="container">
					<div class="row text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="750ms">
						<div class="col-md-6">
							<img src="<?php echo the_sub_field("logo"); ?>" class="mini-logo">
							<h2><?php echo the_sub_field("title"); ?></h2>
							<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
							<div class="bullets">
								<?php echo the_sub_field("bullet_points"); ?>
							</div>
							<h3><?php echo the_sub_field("text"); ?></h3>
						</div>
						<div class="col-md-6">
							<div class="right-image">
								<img src="<?php echo the_sub_field("mobile_image"); ?>">
							</div>
						</div>
					</div>
				</div><!-- /.container -->
			</div><!-- /.section -->

			<?php elseif( get_row_layout() == 'contact_section' ): ?>

			<div class="contact-section" id="register">
				<div class="contact-form-cont">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-8 col-center text-center wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
								<h2 class="title"><?php echo the_sub_field("title"); ?></h2>
								<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
								<?php echo the_sub_field("contact_form"); ?>
							</div>
						</div>
					</div><!-- /.container -->
				</div><!-- /.contact-form-cont -->
			</div><!-- /.contact-section -->


		    <?php endif;

		    endwhile;

			else :

			    // no layouts found

			endif;

			?>


<?php get_footer(); ?>