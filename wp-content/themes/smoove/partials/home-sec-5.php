<div class="section-5">
    <div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-center">
				<h2><?php echo the_sub_field("sec_5_title"); ?></h2>
				<p class="sub-title"><?php echo the_sub_field("sec_3_sub_title"); ?></p>
			</div>
		</div><!-- /.row -->
		<div class="row">
			<?php 
			   // the query
			   $the_query = new WP_Query( array(
			      'posts_per_page' => 3
			   )); 
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			    <div class="col-sm-4">
			    	<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
			    		<?php the_post_thumbnail( 'wpbs-featured' ); ?>
			    	</a>
			    	<?php the_title(); ?>
			    	<?php the_excerpt(); ?>
			    </div>

			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>

			<?php else : ?>
			  <p><?php __('No News'); ?></p>
			<?php endif; ?>
		</div>
	</div><!-- /.container -->
</div><!-- /.section -->