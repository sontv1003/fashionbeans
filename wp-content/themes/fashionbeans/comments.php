<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentyeleven_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
	</div><!-- #comments -->
	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php
				printf( _n( 'One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'twentyeleven' ),
					number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'twentyeleven' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyeleven' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php
				/* Loop through and list the comments. Tell wp_list_comments()
				 * to use twentyeleven_comment() to format the comments.
				 * If you want to overload this in a child theme then you can
				 * define twentyeleven_comment() and that will be used instead.
				 * See twentyeleven_comment() in twentyeleven/functions.php for more.
				 */
				wp_list_comments( array( 'callback' => 'twentyeleven_comment' ) );
			?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'twentyeleven' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentyeleven' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentyeleven' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'twentyeleven' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>

</div><!-- #comments -->

<!--
<a name="comments"></a>
<div class="articleComments">
    <div id="respond">
        <div class="blacktop">
            <h2>
                Leave A Comment
                <a rel="nofollow" id="cancel-comment-reply-link" href="/2013/engineered-garments-clothing-ss13-collection/#respond" style="display:none;">
                    - Click Here To Cancel Reply
                </a>
            </h2>
            <a name="commentForm"></a>
        </div>
        <div class="commentingForm">
            <form action="<?php echo site_url() ?>/wp-comments-post.php" method="post" id="commentform" novalidate="novalidate">
                <label class="commentLabel">Name <span class="red bold">*</span>
                </label>
                <div class="input"> 
                    <input type="text" name="author" class="commentFieldsNew required" id="author" value="" size="22" tabindex="5" aria-required="true">
                </div>
                <div class="break"></div>
                <label class="commentLabel">E-mail <span class="red bold">*</span></label>
                <div class="input"> 
                    <input type="text" name="email" class="commentFieldsNew required email" id="email" value="" size="22" tabindex="6" aria-required="true"> 
                    <span class="help-block">
                        Your email will <strong>NOT</strong> 
                        be published or used for marketing purposes
                    </span></div>
                <div class="break"></div>
                <label class="commentLabel">
                    Your Comment 
                    <span class="red bold">*</span>:
                </label><div class="input">
                    <textarea name="comment" id="comment" class="commentAreaNew required" cols="100%" rows="10" tabindex="8"></textarea>
                </div>
                <div class="break"></div>
                <p style="clear: both;" class="subscribe-to-comments"> 
                    <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" style="width: auto;">
                    <label for="subscribe">Notify me of follow-up comments via e-mail</label>
                </p> 
                <input name="submit" type="submit" id="submit" class="buttons commentSubmit right" tabindex="9" value="Submit"> 
                <input type="hidden" name="comment_post_ID" value="171398" id="comment_post_ID">
                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                <p style="display: none;">
                    <input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="ca67564a5f">
                </p>
            </form>
            <div class="break"></div>
        </div>
    </div>
</div>

-->