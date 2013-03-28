<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header();
?>
<div class="breadcrumb">
    
    <?php 
    $category = get_the_category(7);
    ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php echo $category[0]->cat_name; ?></h1>
</div>

<div class="featuredScroller left jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
    <?php get_slide_show() ?>        
</div>

<div class="cpmAdapt right">
    
</div>
<div class="break"></div>
<div class="blacktop"> 
    <span class="blackheader">Mới nhất: 
        <?php $category = get_the_category(7); 
            echo $category[0]->cat_name; ?>
    </span>
</div>
<div class="lookbookCategory">
<?php if ( have_posts() ) :  
        query_posts(array('posts_per_page'  => 30));
?>
<?php $count = 1; while ( have_posts() ) : the_post(); ?>
    <div class="lookbooks" <?php echo ($count%3==0)? 'style="margin-right:0px;"' : ''; ?>>
        <a class="iframe cboxElement" href="/wp-content/themes/newsite/lookbooks/index.php?id=173080" title="Open Lookbook Fullscreen" rel="nofollow">Open Lookbook Fullscreen</a> 
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title() ?>">
            <?php if(!has_post_thumbnail($post->ID)) {?>
                   <img src="<?php bloginfo( 'template_url' ); ?>/images/no_images.jpg" width="320" height="213" alt="<?php the_title() ?>" />
              <?php } else {
                  if ( function_exists('has_post_thumbnail') && has_post_thumbnail($id) ) {
 $thumbnail = wp_get_attachment_image_src(get_the_post_thumbnail($post->ID, 'large_thumb' )); 

echo $image_src[0];
                   echo get_the_post_thumbnail($post->ID, array(320,213));
            } ?>
            <div>
                <h2><?php the_title() ?></h2>
            </div> 
        </a>
    </div>
    <?php if($count%3==0): $count++ ?>
    <div class="break"></div>
    <?php endif; ?>
    
<?php endwhile; ?>
<?php endif; ?>
</div>