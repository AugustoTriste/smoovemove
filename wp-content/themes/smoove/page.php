<?php get_header(); ?>
			
			<div class="section-1 bg-full parallax-header" style="background-image: url(<?php the_field("header_background_image"); ?>);">
			    <div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-center">
							<div class="dis-ta header-text parallax-text">
								<div class="text-container dis-cell text-center align-middle">
									<h2 itemprop="headline"><?php the_title(); ?></h2>
									<h3><?php the_field("page_sub_title"); ?></h3>
								</div>
							</div>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.section -->
			
			<div class="container">
				<div class="content clearfix row">
			
					<div id="main" class="col-sm-12 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
							<section class="post_content clearfix" itemprop="articleBody">
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

			<div class="section-3 bg-full" style="background-image: url(<?php the_field("page_middle_background"); ?>);">
			    <div class="container">
					<div class="row">
						<div class="col-sm-8 col-center text-center">
							<div class="dis-ta">
								<div class="inner-container dis-cell align-middle">
									<h2><?php the_field("middle_section_title"); ?></h2>
									<p class="sub-title"><?php the_field("middle_section_sub_title"); ?></p>
									<div class="button-row">
										<a href="<?php echo the_sub_field("middle_section_button_url"); ?>" class="btn btn-orange"><?php the_field("middle_section_button_text"); ?></a>
									</div>
								</div>
							</div><!-- /.dis-ta -->
						</div><!-- /.col-sm-5 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.section -->

<?php get_footer(); ?>