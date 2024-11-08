<!-- Blog item -->
<article class="card card-hover-shadow border p-3 mb-4">
  <div class="row">
    <div class="col-md-4"> 
      <!-- Image --> 
        <?php if( !empty(get_the_post_thumbnail()) ) { ?>
        <?php //the_post_thumbnail('medium');?>
        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="img-fluid card-img" alt="blog-img">
         <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-placeholder.jpg" class="img-fluid card-img" alt="Coming Soon" />
        <?php } ?>        

    </div>
    <div class="col-md-8"> 
      <!-- Content -->
      <div class="card-body d-flex flex-column h-100 ps-0 pe-3">
        <div><span class="badge text-bg-dark mb-3"><?php the_category(); ?></span></div>
        <h5 class="card-title mb-3 mb-md-0"><?php the_title(); ?></h5>
        <p class="card-text"> <?php  the_excerpt();  ?> </p>
        <!-- Author name and button -->
        <div class="d-sm-flex justify-content-between align-items-center mt-auto">
          <p class="mb-2 heading-color fw-semibold">By <?php the_author(); ?></p>
          <a class="icon-link icon-link-hover stretched-link" href="<?php the_permalink(); ?>">Read more<i class="bi bi-arrow-right"></i> </a> </div>
      </div>
    </div>
  </div>
</article>






    


