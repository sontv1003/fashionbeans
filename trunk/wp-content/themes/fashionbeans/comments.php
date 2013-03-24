<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
 
	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>
 
<!-- You can start editing here. -->
 
<?php if ( have_comments() ) : ?>
<div class="blacktop">
<h2 id="comments"><?php comments_number('No comment', '1 Comment', '% Comments' );?> - <a class="highlight" href="#commentForm">Thêm Comment</a></h2>
</div>
	<ul class="commentlist">
            <?php wp_list_comments('type=comment&callback=advanced_comment'); //this is the important part that ensures we call our custom comment layout defined above 
            ?>
	</ul>
	<div class="clear"></div>
	<div class="comment-navigation">
		<div class="older"><?php previous_comments_link() ?></div>
		<div class="newer"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>
 
	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
 
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
 
	<?php endif; ?>
<?php endif; ?>

<a name="comments"></a>
<div class="articleComments">
    <div id="respond">
<?php if ( comments_open() ) : ?>
        <div class="blacktop">
            <h2>
                <?php comment_form_title( 'COMMENT CỦA BẠN', 'Leave a Reply to %s' ); ?>
            </h2>
            <a name="commentForm"></a>
        </div>
        <div class="commentingForm">
            <form action="<?php echo site_url() ?>/wp-comments-post.php" method="post" id="commentform" novalidate="novalidate">
                <label class="commentLabel">Họ Tên <span class="red bold">*</span>
                </label>
                <div class="input"> 
                    <input type="text" name="author" class="commentFieldsNew required" id="author" value="" size="22" tabindex="5" aria-required="true">
                </div>
                <div class="break"></div>
                <label class="commentLabel">E-mail <span class="red bold">*</span></label>
                <div class="input"> 
                    <input type="text" name="email" class="commentFieldsNew required email" id="email" value="" size="22" tabindex="6" aria-required="true"> 
                    <span class="help-block">
                        Email của bạn sẽ không sử dụng cho mục đích khác
                    </span></div>
                <div class="break"></div>
                <label class="commentLabel">
                    Comment
                    <span class="red bold">*</span>:
                </label><div class="input">
                    <textarea name="comment" id="comment" class="commentAreaNew required" cols="100%" rows="10" tabindex="8"></textarea>
                </div>
                <div class="break"></div>
<!--
                <p style="clear: both;" class="subscribe-to-comments"> 
                    <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" style="width: auto;">
                    <label for="subscribe">Notify me of follow-up comments via e-mail</label>
                </p>
-->
                <input name="submit" type="submit" id="submit" class="buttons commentSubmit right" tabindex="9" value="Đồng ý"> 
                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>
            </form>
            <div class="break"></div>
        </div>
        <?php endif; // If registration required and not logged in ?>
    </div>
</div>
