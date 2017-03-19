<div class="blog-section random-posts">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="text-center">Recommended Articles</h2>
			</div>
		</div>
		<div class="row posts-row">
			<?php //Create WordPress Query with 'orderby' set to 'rand' (Random)
			$the_query = new WP_Query( array ( 'orderby' => 'rand', 'posts_per_page' => '3' ) );
			// output the random post
			while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			    <div class="col-sm-4">
			    	<div class="img-wrap">
			    		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
				    		<?php the_post_thumbnail( 'wpbs-featured' ); ?>
				    	</a>
			    	</div>
			    	<p class="meta"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS M, Y', '','', FALSE); ?></time> <?php _e("/", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
			    	<h4><?php the_title(); ?></h4>
			    </div>
			<?php endwhile;

			// Reset Post Data
			wp_reset_postdata(); ?>
		</div>
	</div>
</div>