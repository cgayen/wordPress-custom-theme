<section>
	<div class="container pt-4 pt-lg-0">
		<div class="row g-4 g-sm-7">
			<!-- Main content START -->
			<div class="col-lg-8">
                <!-- Title -->
				<h1 class="h2 mb-0"><?php the_title(); ?></h1>

                <!-- Action -->
				<div class="d-flex align-items-center flex-wrap mt-4">
					<a href="#" class="badge text-bg-dark mb-0">Lifestyle</a>
					<span class="text-secondary opacity-3 mx-3">|</span>
					<div class="dropdown">
						<a href="#" class="text-secondary text-primary-hover" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-share me-2"></i>14
						</a>
						<!-- Card feed action dropdown menu -->
						<ul class="dropdown-menu min-w-auto" aria-labelledby="cardFeedAction">
							<li><a class="dropdown-item" href="#"> <i class="bi bi-facebook fa-fw me-2"></i>Facebook</a></li>
							<li><a class="dropdown-item" href="#"> <i class="bi bi-instagram fa-fw me-2"></i>Instagram</a></li>
							<li><a class="dropdown-item" href="#"> <i class="bi bi-whatsapp fa-fw me-2"></i>Whatsapp</a></li>
							<li><a class="dropdown-item" href="#"> <i class="fa-regular fa-paste fa-fw me-2"></i>Copy link</a></li>
						</ul>
					</div>
					<span class="text-secondary opacity-3 mx-3">|</span>
					<a href="#" class="text-secondary text-primary-hover mb-0"><i class="bi bi-chat me-2"></i>5</a>
					<span class="text-secondary opacity-3 mx-3">|</span>
					<span class="text-secondary">2 min read</span>
				</div>

				<!-- Image -->                
                <figure class="figure mt-5">
                    <?php if( !empty(get_the_post_thumbnail()) ) { ?>
                    <?php //the_post_thumbnail('large');?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="figure-img img-fluid rounded" alt="blog-img">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-placeholder.jpg" class="figure-img img-fluid rounded" alt="Coming Soon" />
                    <?php } ?>
                    <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
                </figure>				

            </div>
            <!-- Main content END -->


            <!-- Sidebar START -->
			<div class="col-lg-4 ps-xl-6">
				<!-- Author detail box -->
				<div class="card card-body d-inline-block bg-light border p-4">
					<!-- Avatar and info -->
					<div class="d-flex align-items-center mb-3">
						<!-- Avatar -->
						<div class="avatar avatar-lg flex-shrink-0 me-2">
							<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
						</div>
						<div class="ms-2">
							<h6 class="mb-0"><a href="#">Louis Crawford</a></h6>
							<small>Content creator</small>
						</div>
					</div>
					<p>Incorporating gratitude into our daily where we write down three things we are grateful for each day.</p>
					<!-- Button -->
					<a href="#" class="btn btn-sm btn-outline-primary mb-0">Follow author</a>
				</div>
				
				<!-- Related post -->
				<div class="align-items-center mt-5">
					<h6 class="mb-3 d-inline-block">Related post:</h6>

					<ul class="list-group list-group-flush">
						<li class="list-group-item ps-0"><a href="#" class="heading-color text-primary-hover fw-semibold">5 investment doubts you should clarify</a></li>
						<li class="list-group-item ps-0"><a href="#" class="heading-color text-primary-hover fw-semibold">Mastering Responsive Web Design with Bootstrap</a></li>
						<li class="list-group-item ps-0"><a href="#" class="heading-color text-primary-hover fw-semibold">Effortless Web Development with Mizzle</a></li>
						<li class="list-group-item ps-0"><a href="#" class="heading-color text-primary-hover fw-semibold">Sleek and Responsive - Designing with Bootstrap and Mizzle</a></li>
						<li class="list-group-item ps-0"><a href="#" class="heading-color text-primary-hover fw-semibold">Ten questions you should answer truthfully.</a></li>
					</ul>
				</div>

				<!-- Popular tags -->
				<div class="align-items-center mt-5">
					<h6 class="mb-3 d-inline-block">Popular Tags:</h6>
					<ul class="list-inline mb-0">
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
        </div>
    </div>
</section>
        






<article>
<header class="single-header">
    <h1></h1>

    <a class="meta-avatar" href="#">
        <img src="https://mlzdy7rkgqoo.i.optimole.com/w:120/h:120/q:mauto/ig:avif/https://blog.travelhype.co.in/wp-content/uploads/2024/08/unnamed.jpg" width="120" height="120" alt="" class="avatar">
    </a>

    <div class="meta-author"> 
        <span class="meta-label">By</span> 
        <a href="#">Vikky Malhotra</a> 
    </div>    

    <time>Last updated: <?php the_date(); ?></time>

    <div class="meta-comments">
        <a href="#comments"><i class="bi bi-chat-text-fill"></i> <?php comments_number(); ?> </a>
    </div>
</header>



<?php 
the_content(); 
?>




 
  	
<?php 
the_tags('<div class="tag-bar"><span>TAGGED:</span>' . '<span class="tags"><i class="bi bi-tag-fill"></i>','</span><span class="tags"><i class="bi bi-tag-fill"></i>','</span></div>'); 
?>






</article>