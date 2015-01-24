<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package bebop
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
				printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'bebop' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'bebop' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'bebop' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'bebop' ) ); ?></div>
		</nav><!-- #comment-nav-above -->
		<?php endif; // check for comment navigation ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="comment-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'bebop' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'bebop' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'bebop' ) ); ?></div>
		</nav><!-- #comment-nav-below -->
		<?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bebop' ); ?></p>
	<?php endif; ?>



	<?php 

        // Edit the comments form


        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? ' aria-required="true"' : '' );

        $fields['author'] = '
            <div class="respond-author-field form-group">
                <input class="form-control" placeholder="' . __( 'Name', 'wig' ) . '" id="respond-author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' autocomplete="off" />
            </div>
        ';

        $fields['email'] = '
            <div class="respond-author-field form-group">
                <input class="form-control" placeholder="' . __( 'Email', 'wig' ) . '" id="respond-email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $aria_req . ' autocomplete="off" />
            </div>
        ';

        $fields['url'] = '
            <div class="respond-author-field last form-group">
                <input class="form-control" placeholder="' . __( 'Website', 'wig' ) . '" id="respond-url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" autocomplete="off" />
            </div>
        ';

        $comment = '
            <div class="respond-comment form-group">
                <textarea class="form-control" placeholder="' . __( 'Enter your comment &hellip;', 'wig' ) . '" id="respond-comment" name="comment" rows="4" aria-required="true" autocomplete="off"></textarea>
            </div>
        ';

        $must_log_in = '
            <p class="respond-must-log-in">' . sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>
        ';

        $logged_in_as = '
            <p class="respond-logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) ) ) . '</p>
        ';

        $comment_notes_before = '';
        $comment_notes_after = '';

        comment_form( array(
            'fields'               => $fields,
            'comment_field'        => $comment,
            'must_log_in'          => $must_log_in,
            'logged_in_as'         => $logged_in_as,
            'comment_notes_before' => $comment_notes_before,
            'comment_notes_after'  => $comment_notes_after,
            'id_form'              => 'respond-form',
            'id_submit'            => 'respond-submit-hidden',
            'title_reply'          => __( 'Leave a Reply', 'wig' ),
            'title_reply_to'       => __( 'Leave a Reply to %s', 'wig' ),
            'cancel_reply_link'    => __( 'Cancel Reply', 'wig' ),
            'label_submit'         => __( 'Post Comment', 'wig' ),
        ) );
    ?>

</div><!-- #comments -->
