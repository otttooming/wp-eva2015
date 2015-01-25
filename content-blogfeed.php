<?php
/**
 * Template Name: Blogfeed
 * The custom page template file
 */
?>

<div class="container-fluid text-center blog-header">

    <h2>Uudised</h2>
    
</div>

<div class="container-fluid blog-content">

    <div class="row">

        <?php 

          $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

          $custom_args = array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'paged' => $paged
            );

          $custom_query = new WP_Query( $custom_args ); ?>

          <?php if ( $custom_query->have_posts() ) : ?>

            <!-- the loop to display blog posts -->
            <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
              <article class="loop col-lg-3 col-md-6">

                <div class="speech-bubble-blue">

	                <!-- Excerpt from the main blog post -->
	                	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Link <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	                    <?php the_excerpt(); ?>
                  </div>

              </article>
            <?php endwhile; ?>
            <!-- end of the loop to display blog posts -->


          <?php wp_reset_postdata(); ?>

          <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>

    </div>

</div>
