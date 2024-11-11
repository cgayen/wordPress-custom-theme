<?php
/*
The template for displaying all archive posts 
*/
 
get_header(); ?>

<?php if ( have_posts() ) : ?>
    <div class="container">
        <div class="row g-4 g-sm-7">
            <!-- Main content START -->
            <div class="col-lg-8"> 

                <header class="page-header">
                    <?php the_archive_title( '<h1 class="page-title mb-4">', '</h1>' ); ?>                    
                </header>
                <!-- .page-header end-->
        
                

                <?php while ( have_posts() ) : ?>
                <?php the_post(); ?>
                <?php get_template_part( 'template-parts/content', 'archive', get_theme_mod( 'display_excerpt_or_full_post', 'excerpt' ) ); ?>
                <?php endwhile; ?>


                <!-- Pagination START -->			  
                    <div class="mt-6">
                    <?php
                        the_posts_pagination(); 
                    ?>
                    </div>
                <!-- Pagination END -->    
            </div>
            <!-- Main content END -->
 
            <!-- Sidebar START -->
            <div class="col-lg-4 ps-xl-6">
                <?php 
                //Loading content-blog-widgets-right.php file
                    get_template_part( 'template-parts/content', 'blog-widgets-right' ); 
                ?>				
			</div>
			<!-- Sidebar END --> 
             
        </div>
    </div><!-- .container-area -->
    
<?php else : ?>

<?php 
    //Loading content-none.php file
    get_template_part( 'template-parts/content', 'none' ); 
?>  


<?php endif; ?>

<?php get_footer(); ?>