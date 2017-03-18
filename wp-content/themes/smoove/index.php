<?php get_header(); ?>

		<div class="bg-full parallax-header" style="background-image: url(<?php the_field('blog_bg_image', get_option('page_for_posts')); ?>);">
		    <div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-center">
						<div class="dis-ta header-text parallax-text">
							<div class="text-container dis-cell text-center align-middle">
								<h2><?php the_field('blog_title', get_option('page_for_posts')); ?></h2>
								<h3><?php the_field('blog_sub_title', get_option('page_for_posts')); ?></h3>
							</div>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.section -->

		<div class="blog-cat">
			<div class="container">
				<div class="col-sm-12">
					<div class="cat-wrap">
						<ul id="filters" class="list-unstyled list-inline">
						    <li><a href="#" data-filter="*" class="selected">All</a></li>
							<?php 
							 $terms = get_terms("category"); // get all categories, but you can use any taxonomy
							 $count = count($terms); //How many are they?
							 if ( $count > 0 ){  //If there are more than 0 terms
								 foreach ( $terms as $term ) {  //for each term:
								 echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
								 //create a list item with the current term slug for sorting, and name for label
								 }
							 } 
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="blog-section blog-page">
			<div class="container">
			
				<div class="content row posts-row">

					<div class="col-sm-12">
						<div id="isotope-list">
							<?php if (have_posts()) : while (have_posts()) : the_post();

								 $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
								 $termsString = ""; //initialize the string that will contain the terms
								 foreach ( $termsArray as $term ) { // for each term 
								 	$termsString .= $term->slug.' '; //create a string that has all the slugs 
								 }
								 ?> 

								<div class="col-lg-4 col-md-6 <?php echo $termsString; ?> item">
							    	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							    		<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							    	</a>
							    	<p class="meta"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS M, Y', '','', FALSE); ?></time> <?php _e("/", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
							    	<h4><?php the_title(); ?></h4>
							    </div>
					
							<?php endwhile; ?>
						</div><!-- /.isotope-list -->

							 <div class="blog-nav">
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
							 </div>

						<?php endif; ?>
						
					</div><!-- /.col-sm-12 -->
	    
				</div> <!-- end /.content -->

			</div><!-- /.container -->
		</div><!-- /.blog-section -->

<?php get_footer(); ?>