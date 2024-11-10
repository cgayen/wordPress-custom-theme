<?php
/*
The template for displaying all single posts and attachments
*/
 
get_header(); ?>
 

<section>
    <div class="container pt-4">
        <div class="row g-4 g-sm-7">
                    <!-- Main content START -->
                    <div class="col-lg-8">       
 
                        <?php
                            if (have_posts() ){
                                while ( have_posts() ) {

                                    the_post();
                                    //Loading content-article.php file
                                    get_template_part( 'template-parts/content', 'article' );

                                } 
                            }  

                        ?>
                    </div>
            <!-- Main content END -->


            <!-- Sidebar START -->
			<div class="col-lg-4 ps-xl-6">
                <?php 
                    get_sidebar(); 
                ?>				
			</div>
			<!-- Sidebar END -->   
        </div>     
    </div><!-- .container-area -->
</section>   
    

<?php get_footer(); ?>