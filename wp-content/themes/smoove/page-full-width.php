<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>
			
	<?php
	    if(have_rows("page_sections")):
	        while(have_rows("page_sections")): the_row();
	            if(get_row_layout() == "header_section"):
	                include("partials/fw-sec-1.php");
	            elseif(get_row_layout() == "section_2"):
                	include("partials/fw-sec-2.php");
                elseif(get_row_layout() == "section_3"):
                	include("partials/fw-sec-3.php");                 
	            endif;

	            
	        endwhile;
	    endif;
	?>

<?php get_footer(); ?>