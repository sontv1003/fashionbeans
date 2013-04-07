<?php
/**
 * Template Name: Dàn ngang
 */

get_header();
?>
<div class="breadcrumb">
    
<?php 
    $cat_id = 7;
    $post_of_page = 2;
?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php echo single_cat_title(); ?></h1>
</div>

<div class="featuredScroller left jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
    <?php get_slide_show() ?>        
</div>

<div class="cpmAdapt right">
    
</div>
<div class="break"></div>
<div class="blacktop"> 
    <span class="blackheader">Mới nhất: 
        <?php echo single_cat_title(); ?>
    </span>
</div>
<div class="lookbookCategory">
<?php   
    //query_posts(array('posts_per_page'  => $post_of_page,'paged' => $paged));
    if ( have_posts() ) :  
?>
<?php $count = 1; while ( have_posts() ) : the_post(); ?>
    <div class="lookbooks" <?php echo ($count%3==0)? 'style="margin-right:0px;"' : ''; ?>>
        <a class="iframe cboxElement" href="/wp-content/themes/newsite/lookbooks/index.php?id=173080" title="Open Lookbook Fullscreen" rel="nofollow">Open Lookbook Fullscreen</a> 
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title() ?>">
            <?php if(has_post_thumbnail($post->ID)) {?>
                   <!--<img src="<?php bloginfo( 'template_url' ); ?>/images/no_images.jpg" width="320" height="213" alt="<?php the_title() ?>" />-->
                   <img src="http://localhost/fashionbeans/wp-content/uploads/2013/03/liblib1-675x450-675x340.jpg" width="320" height="213" alt="<?php the_title() ?>" />
              <?php } else {
                  if ( function_exists('has_post_thumbnail') && has_post_thumbnail($post->ID) ) {
                    $thumbnail = wp_get_attachment_image_src(get_the_post_thumbnail($post->ID, 'large_thumb' )); 
                    echo $thumbnail;
                    }
            
            
            } ?>
            <div>
                <h2><?php the_title() ?></h2>
            </div> 
        </a>
    </div>
    
<?php $count++;  endwhile; ?>
<?php endif; ?>
    <div class="break"></div>
</div>
<div class="break"></div>

<?php
get_footer(); 

?>