<?php get_header(); ?>

			<div class="blog-section blog-page">
				<div class="container">
					<div id="content" class="clearfix row posts-row">
			
						<div id="main" class="col-sm-12 clearfix" role="main">
						
							<div class="page-header">
							<?php if (is_category()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("Moving Guides:", "wpbootstrap"); ?></span> <?php single_cat_title(); ?>
								</h1>
							<?php } elseif (is_tag()) { ?> 
								<h1 class="archive_title h2">
									<span><?php _e("Posts Tagged:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
								</h1>
							<?php } elseif (is_author()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("Posts By:", "wpbootstrap"); ?></span> <?php get_the_author_meta('display_name'); ?>
								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive_title h2">
									<span><?php _e("Daily Archives:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>
							<?php } elseif (is_month()) { ?>
							    <h1 class="archive_title h2">
							    	<span><?php _e("Monthly Archives:", "wpbootstrap"); ?></span> <?php the_time('F Y'); ?>
							    </h1>
							<?php } elseif (is_year()) { ?>
							    <h1 class="archive_title h2">
							    	<span><?php _e("Yearly Archives:", "wpbootstrap"); ?></span> <?php the_time('Y'); ?>
							    </h1>
							<?php } ?>
							</div>
							
							<div class="row category-row">
							
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<div class="col-lg-4 col-md-6">
								    	<div class="img-wrap">
								    		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
									    		<?php the_post_thumbnail( 'blog-list' ); ?>
									    	</a>
								    	</div>
								    	<p class="meta"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS M, Y', '','', FALSE); ?></time> <?php _e("/", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
								    	<h4><?php the_title(); ?></h4>
								    </div>
						
								<?php endwhile; ?>

							</div>
							
							<?php if (function_exists('wp_bootstrap_page_navi')) { // if expirimental feature is active ?>
								
								<?php wp_bootstrap_page_navi(); // use the page navi function ?>

							<?php } else { // if it is disabled, display regular wp prev & next links ?>
								<nav class="wp-prev-next">
									<ul class="pager">
										<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "wpbootstrap")) ?></li>
										<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "wpbootstrap")) ?></li>
									</ul>
								</nav>
							<?php } ?>
										
							
							<?php else : ?>
							
							<article id="post-not-found">
							    <header>
							    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
							    </header>
							    <section class="post_content">
							    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
							    </section>
							    <footer>
							    </footer>
							</article>
							
							<?php endif; ?>
					
						</div> <!-- end #main -->
		    
					</div> <!-- end #content -->
				</div>
			</div>

<?php get_footer(); ?>