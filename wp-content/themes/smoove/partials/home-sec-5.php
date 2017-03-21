<div class="section-5 blog-section">
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
		<div class="row text-center">
			<div class="col-sm-8 col-center">
				<h2><?php echo the_sub_field("sec_5_title"); ?></h2>
				<p class="sub-title"><?php echo the_sub_field("sec_3_sub_title"); ?></p>
			</div>
		</div><!-- /.row -->
		<div class="row posts-row">
			<?php 
			   // the query
			   $the_query = new WP_Query( array(
			      'posts_per_page' => 3
			   )); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			    <div class="col-sm-4">
			    	<div class="img-wrap">
			    		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
				    		<?php the_post_thumbnail( 'blog-list' ); ?>
				    	</a>
			    	</div>
			    	<p class="meta"><?php _e("", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('jS M, Y', '','', FALSE); ?></time> <?php _e("/", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
			    	<h4><?php the_title(); ?></h4>
			    </div>

			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>

			<?php else : ?>
			  <p><?php __('No News'); ?></p>
			<?php endif; ?>
		</div><!-- /.row.posts-row -->
		<div class="row button-row text-center">
		    <div class="col-sm-6 col-center">
		        <a href="/blog" class="btn btn-orange">View all articles</a>
		    </div>
		</div><!-- /.row.button-row -->
	</div><!-- /.container -->
</div><!-- /.section -->
