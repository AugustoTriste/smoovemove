<div class="section-2-images">
    <div class="container">
		 <?php
            if(have_rows("images_row")):
                while(have_rows("images_row")): the_row();
                $column_image = get_sub_field("image");                
        ?>
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
        <?php
                endwhile;
            endif;
        ?>
	</div><!-- /.container -->
</div><!-- /.section -->