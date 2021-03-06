<?php get_header(); ?>
			
			<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

			<div class="top-section blog-header bg-full parallax-header wow fadeIn" style="background-image: url('<?php echo $thumb['0'];?>');">
			    <div class="tinted-bg">
			    	<div class="container-fluid">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-md-offset-1">
								<div class="dis-ta header-text parallax-text">
									<div class="text-container dis-cell text-center align-bottom wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
										<p class="cat-title text-left"><?php _e("", "wpbootstrap"); ?> <?php the_category(', '); ?></p>
										<h2 itemprop="headline"><?php the_title(); ?></h2>
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.row -->
					</div><!-- /.container -->
			    </div><!-- /.tinted-ng -->
			</div><!-- /.blog-header -->

			<div class="date-bar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="row">
								<div class="col-xs-6">
									<p class="meta wow fadeIn" data-wow-duration="1s" data-wow-delay="750ms"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS F, Y', '','', FALSE); ?></time> <?php _e("", "wpbootstrap"); ?> </p>
								</div>
								<div class="col-xs-6">
									<div class="cat text-right wow fadeIn" data-wow-duration="1s" data-wow-delay="750ms">
										<div class="social-wrap">
											<input type="checkbox" class="checkbox" id="share" checked>
											<label for="share" class="label">Share</label>
											<div class="social">
												<ul>
													<li class="facebook">
														<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="fa fa-facebook" title="Share on Facebook." target="_blank"></a>
													</li>
													<li class="twitter">
														<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" class="fa fa-twitter" title="Tweet this!" target="_blank"></a>
													</li>
													<li class="linkedin">
														<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="fa fa-linkedin" title="Share on LinkedIn" target="_blank"></a>
													</li>
												</ul>
											</div><!-- /.social -->
										</div><!-- /.social-wrap -->
									</div><!-- /.cat -->
								</div><!-- /.col-xs-6 -->
							</div><!-- /.row -->
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.date-bar -->
			
			<div class="container">
				<div class="content clearfix row">
			
					<div id="main" class="col-md-10 col-center clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
							<section class="post_content clearfix wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms" itemprop="articleBody">
								<?php the_content(); ?>
								
								<?php wp_link_pages(); ?>
						
							</section> <!-- end article section -->
							
							<footer>
								
								<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
									<div class="col-md-5 col-center">
										<div class="share text-center">Share</div>
										<div class="share-post">
											<div class="social">
												<ul class="list-unstyled list-inline">
													<li>
														<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="fa fa-facebook" title="Share on Facebook." target="_blank"></a>
													</li>
													<li>
														<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" class="fa fa-twitter" title="Tweet this!" target="_blank"></a>
													</li>
													<li>
														<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" class="fa fa-linkedin" title="Share on LinkedIn" target="_blank"></a>
													</li>
												</ul>
											</div><!-- /.social -->
										</div><!-- /.share-post -->
									</div>
								</div><!-- /.row -->

								<?php if( $user_level > 0 ) { 
								?>
								<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
								<?php } ?>
								
							</footer> <!-- end article footer -->
						
						</article> <!-- end article -->
						
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
			</div><!-- /.container -->

			<?php get_template_part( 'partials/random', 'posts' ); ?>

<?php get_footer(); ?>