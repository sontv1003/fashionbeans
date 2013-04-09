<?php
/**
 * Template Name: Tooltip xem hình
 */

//NOTE: Phân Trang WP Navi chỉ hoạt động khi config số bản ghi / trang trong admin < posts_per_page
get_header();
?>
<div class="breadcrumb">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
</div>

<div class="streetStyleOutline left">
    <div class="featuredScroller jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
        <?php get_slide_show() ?>        
    </div>
    
    <div class="blacktop"> 
        <span class="blackheader">
            <?php echo single_cat_title() ?>
        </span>
    </div>
    
    <ul class="streetStyle">
    <?php 
        query_posts(array('post_status' => 'publish','posts_per_page'  => 40,'paged' => $paged,'cat' => get_current_catid()));    
        if ( have_posts() ) :  
        ?>
        <?php $index = 1; while ( have_posts() ) : the_post(); ?>
        <li<?php echo ($index%4==0)? ' class="nomargin"' : ''; ?>>
            <a href="<?php the_permalink() ?>">
                <input type="hidden" class="title_hide" value="<?php the_title()?>&lt;br/&gt; Bấm để xem chi tiết">
                <?php $image =  wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'normal_thumb');  ?>
                <img src="<?php echo $image[0] ?>" alt="<?php echo get_the_title($post->ID) ?>&lt;br/&gt; Bấm xem chi tiết" width="150" height="235" aria-describedby="ui-tooltip-4">
            </a>
        </li>
        <?php $index++; endwhile; ?>
    </ul>


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
<script>
    $(document).ready(function(){        
        $('.streetStyle li img').each(function(index){
            $(this).attr('alt',$('.title_hide',$(this).parent()).val());
        });
    });
</script>