<?php
/*
The template for displaying all archive posts 
*/
 
get_header(); ?>
 
    <div class="container">
       
 
        <?php
            if (have_posts() ){
                while ( have_posts() ) {

                    the_post();
                    get_template_part( 'template-parts/content', 'archive' );

                }                
            
        
        ?>
 
11
    </div><!-- .container-area -->
 
<?php get_footer(); ?>