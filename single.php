<?php
/**
 * The template for displaying all single posts.
 *
 * @package bebop
 */

get_header(); ?>

<div class="container-fluid single-post-content">
    
    <div class="row">
        
        <div class="col-lg-12">
           
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            
            <h1><?php the_title(); ?></h1>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-8">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>

                    <?php the_post_navigation(); ?>

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
        
        <div class="col-md-4">
           
            <?php get_sidebar(); ?>
            
        </div>

    </div>
    
</div>
        
<?php get_footer(); ?>
