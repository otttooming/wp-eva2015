<?php
/**
 * The template for displaying search results pages.
 *
 * @package bebop
 */

get_header(); ?>

	<section id="primary" class="container content-area">
		<main id="main" class="row site-main" role="main">
            <div class="col-md-offset-2 col-md-8">
                <?php if ( have_posts() ) : ?>

                    <header class="page-header speech-bubble-yellow" style="min-height:0px;">
                        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'bebop' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header><!-- .page-header -->

                    <?php /* Start the Loop */ ?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part( 'content', 'search' );
                        ?>

                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                    <hr>
                   
                    <h2>Otsing</h2>
                    <?php get_search_form(); ?>
                        
                    <hr>

                <?php else : ?>

                    <?php get_template_part( 'content', 'none' ); ?>

                <?php endif; ?>
            </div>
		</main><!-- #main -->
		
	</section><!-- #primary -->

<?php get_footer(); ?>
