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
             elseif(get_row_layout() == "section_2_button"):
                include("partials/home-sec-2-button.php");
             elseif(get_row_layout() == "section_3_content"):
                include("partials/home-sec-3.php");
             elseif(get_row_layout() == "section_4_content"):
                include("partials/home-sec-4.php");
             elseif(get_row_layout() == "section_5_content"):
                include("partials/home-sec-5.php");
             elseif(get_row_layout() == "section_6_content"):
                include("partials/home-sec-6.php");                     
            endif;

            
        endwhile;
    endif;
?>

<?php get_footer(); ?>