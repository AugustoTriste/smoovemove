<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
			<?php

			// check if the flexible content field has rows of data
			if( have_rows('section_1') ):

			     // loop through the rows of data
			    while ( have_rows('section_1') ) : the_row();

			        if( get_row_layout() == 'section_1_content' ): ?>


			        <div class="section-1 clearfix" style="background-image: url(<?php echo the_sub_field("background_image_1"); ?>);">

				        <div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<div class="dis-ta">
										<div class="text-container dis-cell text-center align-middle">
											<?php elseif( get_row_layout() == 'section_1_content' ): 

									        endif; ?>
											<h2><?php echo the_sub_field("home_main_title_1"); ?></h2>
											<h3><?php echo the_sub_field("home_sub_title_1"); ?></h3>
										</div>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.container -->
					</div><!-- /.section -->

			   <?php endwhile;

			else :

			    // no layouts found

			endif;

			?>
		
			
			<div id="content" class="clearfix row">
			
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					
						<header>

							<?php 
								$post_thumbnail_id = get_post_thumbnail_id();
								$featured_src = wp_get_attachment_image_src( $post_thumbnail_id, 'wpbs-featured-home' );
							?>

							<div class="jumbotron" style="background-image: url('<?php echo $featured_src[0]; ?>'); background-repeat: no-repeat; background-position: 0 0;">
				
								<div class="page-header">
									<h1><?php bloginfo('title'); ?><small><?php echo get_post_meta($post->ID, 'custom_tagline' , true);?></small></h1>
								</div>				
								
							</div>
						
						</header>
						
						<section class="row post_content">
						
							<div class="col-sm-8">
						
								<?php the_content(); ?>
								
							</div>
							
							<?php get_sidebar('sidebar2'); // sidebar 2 ?>
													
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->

<?php get_footer(); ?>