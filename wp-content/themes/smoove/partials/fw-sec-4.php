<div class="section-4">
    <div class="container wow fadeInUp" data-wow-duration="1s" data-wow-delay="750ms">
		<div class="row">
			<div class="col-sm-8 col-center text-center">
				<div class="main-text">
					<div class="inner-container dis-cell align-middle">
						<h2><?php echo the_sub_field("title"); ?></h2>
						<p class="sub-title"><?php echo the_sub_field("sub_title"); ?></p>
					</div>
				</div><!-- /.dis-ta -->
			</div><!-- /.col-sm-5 -->
		</div><!-- /.row -->
		<div class="row">
			<div class="col-lg-10 col-md-12 col-center">
				<div class="row">
					<div class="col-sm-6">
						<img class="large-img" src="<?php echo the_sub_field("image"); ?>" alt="Smoove Move App">
					</div>
					<div class="col-sm-6">
						<div class="row icons-row">
							<?php
					            if(have_rows("icons")):
					                while(have_rows("icons")): the_row();
					                $column_image = get_sub_field("image");                
					        ?>
			        			<div class="col-sm-12">
			        				<div class="dis-ta">
			        					 <?php
					                    if(!empty($column_image)):
					                    ?>
					                        <div class="img dis-cell">
					                        	<img src="<?php the_sub_field("image"); ?>">
					                        </div>
					                    <?php
					                    endif;
					                    ?>
					                        <div class="text dis-cell">
					                        	<p class="sub-title text-center"><?php the_sub_field("text"); ?></p> 
					                        </div>  
			        				</div>                     
				                </div>             
					        <?php
					            endwhile;
					            endif;
					        ?>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
		<div class="row button-row text-center">
		    <div class="col-sm-6 col-center">
		        <a href="<?php the_sub_field("button_url"); ?>" class="btn btn-orange" target="_blank"><?php echo the_sub_field("button_text"); ?></a>
		    </div>
		</div>
	</div><!-- /.container -->
</div><!-- /.section -->