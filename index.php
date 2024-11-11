<?php
 
get_header(); ?>

<section class="pt-0">
	<div class="container">
		<div class="row g-xl-7">
			<!-- Blog list START -->
			<div class="col-lg-8">
				<!-- Title -->

                <?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
                    <header class="page-header">
                    <h1 class="page-title mb-4"><?php single_post_title(); ?></h1>
                    </header><!-- .page-header -->
                <?php endif; ?> 


                <?php
                    if ( have_posts() ) {

                        // Load posts loop.
                        while ( have_posts() ) {
                            the_post();
                            get_template_part( 'template-parts/content', 'archive' );
                        }

                        
                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content', 'none' ); 

                    }
                ?>   
				        
             <!-- Pagination START -->			  
			<div class="mt-6">
                <?php the_posts_pagination(); ?>
			</div>
			<!-- Pagination END -->
                    
            </div>
            <!-- Blog list END -->
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