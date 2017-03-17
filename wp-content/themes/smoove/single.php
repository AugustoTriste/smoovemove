<?php get_header(); ?>

			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

			<div class="blog-header bg-full" style="background-image: url('<?php echo $thumb['0'];?>');">
			    <div class="tinted-bg">
			    	<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-center">
								<div class="dis-ta header-text">
									<div class="text-container dis-cell text-center align-middle">
										<h2><?php the_field('blog_title', get_option('page_for_posts')); ?></h2>
										<h3><?php the_field('blog_sub_title', get_option('page_for_posts')); ?></h3>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.row -->
					</div><!-- /.container -->
			    </div><!-- /.tinted-ng -->
			</div><!-- /.blog-header -->
			
			<div class="container">
				<div id="content" class="clearfix row">
			
					<div id="main" class="col-sm-12 clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
							<header>
								
								<?php the_post_thumbnail( 'wpbs-featured' ); ?>

								<h1>THIS IS THE SINGLE TEMPLATE</h1>
								
								<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
								
								<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
							
							</header> <!-- end article header -->
						
							<section class="post_content clearfix" itemprop="articleBody">
								<?php the_content(); ?>
								
								<?php wp_link_pages(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
				
								<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
								
								<?php 
								// only show edit button if user has permission to edit posts
								if( $user_level > 0 ) { 
								?>
								<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
								<?php } ?>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
						<?php comments_template('',true); ?>
						
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
	    
				</div> <!-- end #content -->
			</div>

<?php get_footer(); ?>