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
	                include("partials/fw-header.php");
	            elseif(get_row_layout() == "section_2"):
                	include("partials/fw-three-image.php");
                elseif(get_row_layout() == "section_3"):
                	include("partials/fw-middle-section.php");
                elseif(get_row_layout() == "section_4"):
                	include("partials/fw-icon-text.php");
                elseif(get_row_layout() == "section_5"):
                	include("partials/fw-testimonials.php");
                elseif(get_row_layout() == "section_6"):
                	include("partials/fw-steps.php");
                elseif(get_row_layout() == "section_7"):
                	include("partials/fw-image-buttons.php");

	            endif;
	        endwhile;
	    endif;
	?>

<?php get_footer(); ?>