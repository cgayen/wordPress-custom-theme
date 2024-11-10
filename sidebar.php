<!-- Author detail box -->
<div class="card card-body d-inline-block bg-light border p-4"> 
  <!-- Avatar and info -->
  <div class="d-flex align-items-center mb-3"> 
    <!-- Avatar -->
    <div class="avatar avatar-lg flex-shrink-0 me-2"> <?php echo get_avatar( get_the_author_meta( 'ID' ) , 64 ); ?> </div>
    <?php the_author_meta(); ?>
    <div class="ms-2">
      <h6 class="mb-0">
        <?php the_author_posts_link(); ?>
      </h6>
      <small></small> </div>
  </div>
  <p>
    <?php the_author_description(); ?>
  </p>
  <!-- Button 
  <a href="#" class="btn btn-sm btn-outline-primary mb-0">Follow author</a>-->  
</div>

<?php 
  //Loading content-blog-widgets-right.php file
    get_template_part( 'template-parts/content', 'blog-widgets-right' ); 
?>