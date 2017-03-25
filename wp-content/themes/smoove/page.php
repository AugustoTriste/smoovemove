<?php get_header(); ?>

			<?php

			if( have_rows('page_template_content') ):

			    while ( have_rows('page_template_content') ) : the_row();

			        if( get_row_layout() == 'header_content' ): ?>

		    <div class="section-1 bg-full parallax-header wow fadeIn" style="background-image: url(<?php echo the_sub_field('header_background_image'); ?>);">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-center">
							<div class="dis-ta header-text parallax-text wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
								<div class="text-container dis-cell text-center align-middle">
									<h2 itemprop="headline"><?php the_title(); ?></h2>
									<h3><?php echo the_sub_field('sub_title'); ?></h3>
								</div>
							</div>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.section -->
			
			<div class="container">
				<div class="content clearfix row">
			
					<div id="main" class="col-sm-10 col-center clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
							<section class="post_content clearfix wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms" itemprop="articleBody">
								<?php the_content(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
				
								<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ', ', '</p>'); ?>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>		
						
						<?php else : ?>
						
						<?php endif; ?>
				
					</div> <!-- end #main -->
	    
				</div> <!-- end #content -->
			</div><!-- /.container -->

			<?php elseif( get_row_layout() == 'middle_content' ): ?>

        	<div class="section-3 bg-full" style="background-image: url(<?php echo the_sub_field("background_image"); ?>);">
			    <div class="container">
					<div class="row">
						<div class="col-sm-8 col-center text-center wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
							<div class="dis-ta">
								<div class="inner-container dis-cell align-middle">
									<h2><?php echo the_sub_field("title"); ?></h2>
									<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
									<div class="button-row">
										<a href="<?php echo the_sub_field("middle_section_button_url"); ?>" class="btn btn-orange"><?php echo the_sub_field("middle_section_button_text"); ?></a>
									</div>
								</div>
							</div><!-- /.dis-ta -->
						</div><!-- /.col-sm-5 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.section -->

				
			<?php elseif( get_row_layout() == 'collapsible_tabs' ): ?>

			<div class="default-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-center wow fadeInUp" data-wow-delay="750ms" data-wow-duration="1500ms">
							<?php echo the_sub_field("collapsible"); ?>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.default-section -->

			<?php elseif( get_row_layout() == 'contact_section' ): ?>

			<div class="contact-section">
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
				</div>
			</div>


		    <?php endif;

		    endwhile;

			else :

			    // no layouts found

			endif;

			?>


<?php get_footer(); ?>