<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package bebop
 */

get_header(); ?>

	<div id="primary" class="container content-area text-center">
		<main id="main" class="row site-main" role="main">

			<section class="col-md-offset-3 col-md-6 error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'bebop' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'bebop' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
