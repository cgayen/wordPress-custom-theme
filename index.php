<?php
 
get_header(); ?>

<section class="pt-0">
	<div class="container">
		<div class="row g-xl-7">
			<!-- Blog list START -->
			<div class="col-lg-8">
				<!-- Title -->
				<h4 class="mb-4"><?php single_post_title(); ?></h4>              
            
                    <?php
                        if (have_posts() ){
                            while ( have_posts() ) {

                                the_post();
                                get_template_part( 'template-parts/content', 'archive' );

                            }                
                        
                        }
                    ?>
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

             <!-- Pagination START -->			  
			<div class="col-12 mt-6">
			<?php
			  	the_posts_pagination(); 
			  ?>
			</div>
			<!-- Pagination END -->
			 
        </div>   

 

    </div><!-- .container-area -->
 
<?php get_footer(); ?>