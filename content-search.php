<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bebop
 */
?>

              <article class="loop blog-post">

                
                    <!-- Featured image -->
	                <div class="blog-view-img-top">
		                <?php the_post_thumbnail('featured-thumb', array('class' => 'img-responsive')); ?>
	                </div>
	                
	                <!-- Excerpt from the main blog post -->
	                <div class="blog-excerpt-content">
	                	<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Link <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	                    <?php the_excerpt(); ?>
	                </div>
	                

              </article>
