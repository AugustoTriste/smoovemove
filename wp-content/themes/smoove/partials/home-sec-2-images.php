<div class="section-2-images">
    <div class="container">
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
	</div><!-- /.container -->
</div><!-- /.section -->