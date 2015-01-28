<?php
/**
 * The template for displaying all single posts.
 *
 * @package bebop
 */

get_header(); ?>

<div class="container single-post-content">
    
    <div class="row">
        
        <div class="col-lg-12">
           
            
            <h1></h1>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-9">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

               
                                   <!-- Featured image -->
	                <div class="blog-view-img-top">
		                <?php the_post_thumbnail('featured-thumb', array('class' => 'img-responsive')); ?>
	                </div>
               
               
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'single' ); ?>

                    <!-- Post navigation, shows next and previous posts -->
                    <?php 
                        the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'bebop' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'bebop' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) ); 
                    ?>
                    <!-- /END Post navigation -->


                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>

                <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
            </div><!-- #primary -->

        </div>
        
        <div class="col-md-3">
           
            <?php get_sidebar(); ?>
            
        </div>

    </div>
    
</div>
        
<?php get_footer(); ?>
