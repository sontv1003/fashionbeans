<?php
/**
 * Template Name: List theo chiều dọc
 */

get_header();
?>
<div class="breadcrumb">
    
<?php ;
    $cat_id = 9;
    $post_of_page = 2;
?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php echo single_cat_title(); ?></h1>
</div>

<div id="catmainBody" class="left">
    <div class="featuredScroller jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
        <?php get_slide_show() ?>        
    </div>
    
    <div class="blacktop"> 
        <span class="blackheader">Mới nhất:
            <?php echo single_cat_title() ?>
        </span>
    </div>
    <?php 
    query_posts(array('posts_per_page'  => $post_of_page,'paged' => $paged));    
    if ( have_posts() ) :  
    ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="catArticles"> 
        <a href="<?php the_permalink() ?>" class="left relative">
                <?php if(!has_post_thumbnail($post->ID)) {?>
                   <img src="<?php bloginfo( 'template_url' ); ?>/images/no_images.jpg" width="300" height="200" alt="<?php the_title() ?>" />
              <?php } else {
                   echo get_the_post_thumbnail($post->ID, 'default_thumb');
              } ?>
        </a>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a>
        </h2> 
        <span class="artAuthor">Người đăng: <?php the_author_nickname(); ?></span>
        <p><?php the_excerpt_max_charlength(500); ?></p>
        <div class="articleData">
            <span class="right">
                <a href="<?php the_permalink() ?>#respond" title="<?php the_title() ?>">(<?php echo get_number_comments() ?>) Comments</a>
            </span>
        </div>
        <div class="break"></div>
    </div>
    <?php endwhile; ?>

    <div class="break"></div>
    <?php $paged = (!empty($paged)) ? $paged : 1; ?>
    <p class="pageCount"><?php echo ($paged-1) * $wp_query->post_count + 1; ?> - <?php echo $paged * $wp_query->post_count; ?> CỦA <?php echo $wp_query->found_posts?> <?php echo single_cat_title(); ?></p>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : ?>
        Không có dữ liệu
    <?php endif; ?>

</div> <!-- End catmainBody -->

<?php get_sidebar(); ?>
<div class="break"></div>

<?php
get_footer(); 

?>