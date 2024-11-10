
                <!-- Title -->
				<h1 class="h2 mb-0"><?php the_title(); ?></h1>

                <!-- Action -->
				<div class="d-flex align-items-center flex-wrap mt-4">
					<div class="badge text-bg-dark mb-0"><?php the_category(); ?></div>
					<!--<span class="text-secondary opacity-3 mx-3">|</span>
					<div class="dropdown">
						<a href="#" class="text-secondary text-primary-hover" id="cardFeedAction" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-share me-2"></i>14
						</a>
						 Card feed action dropdown menu 
						<ul class="dropdown-menu min-w-auto" aria-labelledby="cardFeedAction">
							<li><a class="dropdown-item" href="#"> <i class="bi bi-facebook fa-fw me-2"></i>Facebook</a></li>
							<li><a class="dropdown-item" href="#"> <i class="bi bi-instagram fa-fw me-2"></i>Instagram</a></li>
							<li><a class="dropdown-item" href="#"> <i class="bi bi-whatsapp fa-fw me-2"></i>Whatsapp</a></li>
							<li><a class="dropdown-item" href="#"> <i class="fa-regular fa-paste fa-fw me-2"></i>Copy link</a></li>
						</ul>
					</div>-->
					<span class="text-secondary opacity-3 mx-3">|</span>
					<a href="#comments" class="text-secondary text-primary-hover mb-0"><i class="bi bi-chat me-2"></i><?php comments_number(); ?></a>
					<span class="text-secondary opacity-3 mx-3">|</span>
					<span class="text-secondary"><time>Last updated: <?php the_modified_date(); ?></time></span>
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
				
				<!-- Content -->
				<?php 
				the_content(); 
				?>
				<!-- Tags -->
				<?php 
				the_tags('<div class="tag-bar"><span>TAGGED:</span>' . '<span class="tags"><i class="bi bi-tag-fill"></i>','</span><span class="tags"><i class="bi bi-tag-fill"></i>','</span></div>'); 
				?>
				<!-- Comments -->
				<div id="comments">
					<?php 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>
				</div>

				<?php
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'cgcustom' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'cgcustom' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'cgcustom' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'cgcustom' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
				?>

            
        





