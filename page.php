<?php
/*
The template for displaying all single Page
*/
 
get_header(); ?>
 
    <div class="container">      
    <?php the_title('<h1 class="page-title mb-4">', '</h1>'); ?>
        <?php
            if (have_posts() ){
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content', 'page' );
                }                
            }        
        ?>
    </div><!-- .container-area -->
 
<?php get_footer(); ?>

