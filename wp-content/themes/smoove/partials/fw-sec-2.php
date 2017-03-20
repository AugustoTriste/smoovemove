<div class="section-2">
    <div class="container">
		<div class="row">
			<div class="col-md-6 col-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
				<img src="<?php echo the_sub_field("logo"); ?>" alt="">
				<h2><?php echo the_sub_field("title"); ?></h2>
				<p><?php echo the_sub_field("sub_title"); ?></p>
			</div>
		</div><!-- /.row -->
		<div class="row hidden-xs">
		 <?php
            if(have_rows("images_row")):
                while(have_rows("images_row")): the_row();
                $column_image = get_sub_field("image");                
        ?>
        		<div class="">
        			<div class="col-sm-4">
	                    <?php
	                    if(!empty($column_image)):
	                    ?>
	                        <img src="<?php the_sub_field("image"); ?>">
	                    <?php
	                    endif;
	                    ?>
	                        <p class="sub-title text-center"><?php the_sub_field("text"); ?></p>                        
	                </div>  
        		</div>             
        <?php
                endwhile;
            endif;
        ?>
        </div><!-- /.row -->
		
		<div class="row visible-xs owl-carousel owl-theme">
		 <?php
            if(have_rows("images_row")):
                while(have_rows("images_row")): the_row();
                $column_image = get_sub_field("image");                
        ?>
        		<div>
        			<div class="col-sm-4">
	                    <?php
	                    if(!empty($column_image)):
	                    ?>
	                        <img src="<?php the_sub_field("image"); ?>">
	                    <?php
	                    endif;
	                    ?>
	                        <p class="sub-title text-center"><?php the_sub_field("text"); ?></p>                        
	                </div>  
        		</div>             
        <?php
                endwhile;
            endif;
        ?>
        </div><!-- /.row -->
        <div class="row text-center sec-2-button wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
		    <div class="col-sm-12">
		        <a href="<?php the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
		    </div>
		</div>
	</div><!-- /.container -->
</div><!-- /.section -->