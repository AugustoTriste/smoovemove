<?php get_header(); ?>

		<div class="blog-section">
			<div class="container">
			
				<div id="content" class="row posts-row">

					<div class="col-sm-12">
						<?php 
				            $startRow = true;
				            $postCounter = 0;
				        ?>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php
					        if ($startRow) {
					          echo '<!-- START OF INTERNAL ROW --><div class="row">';
					          $startRow = false;
					        }  
				        ?>
				        <?php $postCounter += 1; ?>
						
						<div class="col-sm-4">
					    	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
					    		<?php the_post_thumbnail( 'wpbs-featured' ); ?>
					    	</a>
					    	<p class="meta"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS M, Y', '','', FALSE); ?></time> <?php _e("/", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
					    	<h4><?php the_title(); ?></h4>
					    </div>

					     <?php 
				            if ( 3 === $postCounter ) {
				                echo '</div><!-- END OF INTERNAL ROW -->';
				                $startRow = true;
				                $postCounter = 0;
				            }
			            ?>
						
						<?php endwhile; ?>

						<?php 
				            if ($postCounter !== 0 ) {
				              echo '</div><!-- END OF INTERNAL ROW -->';
				            }
			            ?>
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
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
	    
				</div> <!-- end #content -->

			</div><!-- /.container -->
		</div><!-- /.blog-section -->

<?php get_footer(); ?>