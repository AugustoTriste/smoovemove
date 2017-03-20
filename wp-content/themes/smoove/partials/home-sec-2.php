<div class="section-images">
    <div class="container">
		<div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
			<div class="col-sm-12 wow">
				<img src="<?php echo the_sub_field("section_2_logo"); ?>" alt="">
				<h2><?php echo the_sub_field("sec_2_title"); ?></h2>
				<p><?php echo the_sub_field("sec_2_sub_title"); ?></p>
			</div>
		</div><!-- /.row -->
		<div class="row images-row hidden-xs wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
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
	                        <img class="round" src="<?php the_sub_field("image"); ?>">
	                    <?php
	                    endif;
	                    ?>
	                        <p class="sub-title text-center thin"><?php the_sub_field("text"); ?></p>                        
	                </div>  
        		</div>             
        <?php
                endwhile;
            endif;
        ?>
        </div><!-- /.row -->
		
		<div class="row images-row visible-xs owl-carousel owl-theme wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
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
	                        <img class="round" src="<?php the_sub_field("image"); ?>">
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
        <div class="row button-row text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
		    <div class="col-sm-12">
		        <a href="<?php the_sub_field("section_2_app_btn_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("section_2_button_text"); ?></a>
		    </div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div><!-- /.section -->