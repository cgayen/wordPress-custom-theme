<?php 
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'cgcustom' ); ?>">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
<?php 
else : ?>
    <!-- Create some custom HTML or call the_widget().  It's up to you. Here we have added one custom widget and three default widgets widgets -->
    <aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'cgcustom' ); ?>">
        <section id="custom-widget-1" class="widget widget_custom">
            <h6 class="widget-title"><?php _e( 'This is Custom Widget Title', 'cgcustom' ); ?></h6>
            <div class="widget-content">
                <p>This is custom widget content</p>
            </div>
        </section>
 
        <?php    
        the_widget( 'WP_Widget_Recent_Posts' );
 
        the_widget( 'WP_Widget_Categories' );
 
        the_widget( 'WP_Widget_Tag_Cloud' );
        ?>
    </aside>
<?php endif; ?>