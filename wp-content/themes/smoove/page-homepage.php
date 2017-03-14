<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
		
		
<?php
    if(have_rows("home_sections")):
        while(have_rows("home_sections")): the_row();
            if(get_row_layout() == "section_1_content"):
                include("partials/home-sec-1.php");
             elseif(get_row_layout() == "section_2_content"):
                include("partials/home-sec-2.php");
             elseif(get_row_layout() == "section_2_images"):
                include("partials/home-sec-2-images.php");                          
            endif;

            
        endwhile;
    endif;
?>

<?php get_footer(); ?>