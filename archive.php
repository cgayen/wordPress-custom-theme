<?php
/*
The template for displaying all archive posts 
*/
 
get_header(); ?>
 
    <div class="container">
        <div class="row g-4 g-sm-7">
            <!-- Main content START -->
            <div class="col-lg-8"> 
        
                <h4 class="mb-4"><?php the_archive_title(); ?></h4>
                    <?php
                        if (have_posts() ){
                            while ( have_posts() ) {

                                the_post();
                                get_template_part( 'template-parts/content', 'archive' );

                            }                
                        
                        }
                    ?>
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
 
<?php get_footer(); ?>