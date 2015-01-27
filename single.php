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
           
            <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
            
            <h1><?php the_title(); ?></h1>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-9">

            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'single' ); ?>
                    
                    <!-- Post navigation, shows next and previous posts -->
   
                    <div class="row text-center">

                        <div class="col-xs-6 col-sm-6 post-nav-left">

                            <?php next_post_link('%link', '<i class="fa fa-angle-left"></i>'); ?>

                        </div>

                        <div class="col-xs-6 col-sm-6 post-nav-right">

                            <?php previous_post_link('%link', '<i class="fa fa-angle-right"></i>'); ?>

                        </div>

                    </div>

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
