<?php
/*
The template for displaying all single posts and attachments
*/
 
get_header(); ?>
 
    <div class="container">
       
 
        <?php
            if (have_posts() ){
                while ( have_posts() ) {

                    the_post();
                    get_template_part( 'template-parts/content', 'article' );

                } 
                
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

            }
            
        
 
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
 

    </div><!-- .container-area -->
 
<?php get_footer(); ?>