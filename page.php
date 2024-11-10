<?php
/*
The template for displaying all single Page
*/
 
get_header(); ?>
 
    <div class="container">      
    <h2><?php the_title(); ?></h2>
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

