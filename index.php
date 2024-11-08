<?php
 
get_header(); ?>

<section class="pt-0">
	<div class="container">
		<div class="row g-xl-7">
			<!-- Blog list START -->
			<div class="col-lg-8">
				<!-- Title -->
				<h4 class="mb-4"><?php the_title(); ?></h4>              
            
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
			<div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Popular tags -->
				<div class="align-items-center mt-5">
					<h6 class="mb-3 d-inline-block">Popular Tags:</h6>
					<ul class="list-inline mb-0 social-media-btn">
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">blog</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">business</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">bootstrap</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">data science</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">deep learning</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Adventure</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Community</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Tutorials</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Interview</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Photography</a> </li>
						<li class="list-inline-item"> <a class="btn btn-light btn-sm" href="#">Classic</a> </li>
					</ul>
				</div>

            </div>
			<!-- Sidebar END -->
             <!-- Pagination START -->
			<div class="col-12 mt-6">
				<ul class="pagination pagination-primary-soft d-flex justify-content-sm-between flex-wrap mb-0">
					<li>
						<ul class="list-unstyled">
							<li class="page-item">
								<a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left me-2 rtl-flip"></i>Prev</a>
							</li>
						</ul>
					</li>
					<li>
						<ul class="list-unstyled">
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">..</a></li>
							<li class="page-item"><a class="page-link" href="#">22</a></li>
							<li class="page-item"><a class="page-link" href="#">23</a></li>
						</ul>
					</li>
					<li>
						<ul class="list-unstyled">
							<li class="page-item">
								<a class="page-link" href="#">Next<i class="fas fa-long-arrow-alt-right ms-2 rtl-flip"></i></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- Pagination END -->
        </div>   

 

    </div><!-- .container-area -->
 
<?php get_footer(); ?>