<?php
/**
 * Template Name: Õpilasfirmad
 */

the_post();

// Get 'studentcompany' posts
$studentcompany_posts = get_posts( array(
	'post_type' => 'studentcompany',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $studentcompany_posts ):

get_header(); ?>
<div class="container">

    <section class="row profiles">
        <div class="intro">
            <h2>Tartu Kutsehariduskeskuse tudengifirmad</h2>
            <p class="lead">&ldquo;Individuals can and do make a difference, but it takes a team<br>to really mess things up.&rdquo;</p>
        </div>

        <?php 
        foreach ( $studentcompany_posts as $post ): 
        setup_postdata($post);

        // Resize and CDNize thumbnails using Automattic Photon service
        $thumb_src = null;
        if ( has_post_thumbnail($post->ID) ) {
            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'studentcompany-thumb' );
            $thumb_src = $src[0];
        }
        ?>
        <article class="col-sm-6 profile">
            <div class="profile-header">
                <?php if ( $thumb_src ): ?>
                <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('studentcompany_position'); ?>" class="img-circle">
                <?php endif; ?>
            </div>

            <div class="profile-content">
                <h3><?php the_title(); ?></h3>
                <p class="lead position"><?php the_field('studentcompany_position'); ?></p>
                <?php the_content(); ?>
            </div>

            <div class="profile-footer">
                <a href="tel:<?php the_field('studentcompany_phone'); ?>"><i class="icon-mobile-phone"></i></a>
                <a href="mailto:<?php echo antispambot( get_field('studentcompany_email') ); ?>"><i class="icon-envelope"></i></a>
                <?php if ( $twitter = get_field('studentcompany_twitter') ): ?>
                <a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a>
                <?php endif; ?>
                <?php if ( $linkedin = get_field('studentcompany_linkedin') ): ?>
                <a href="<?php echo $linkedin; ?>"><i class="icon-linkedin"></i></a>
                <?php endif; ?>
            </div>
        </article><!-- /.profile -->
        <?php endforeach; ?>
    </section><!-- /.row -->
</div>
<?php endif; ?>


<?php get_footer(); ?>
