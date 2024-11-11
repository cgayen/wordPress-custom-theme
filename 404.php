<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<?php 
    //Loading content-none.php file
    get_template_part( 'template-parts/content', 'none' ); 
?>  

<?php get_footer(); ?>