<?php
/**
 * Template Name: Tooltip xem hình
 */

get_header();
?>
<div class="breadcrumb">
    
<?php ;
    $cat_id = 9;
    $post_of_page = 10;
?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php echo single_cat_title(); ?></h1>
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
        //query_posts(array('posts_per_page'  => $post_of_page,'paged' => $paged));    
        if ( have_posts() ) :  
        ?>
        <?php $index = 1; while ( have_posts() ) : the_post(); ?>
        <li<?php echo ($index%4==0)? ' class="nomargin"' : ''; ?>>
            <a href="<?php the_permalink() ?>">
                <input type="hidden" class="title_hide" value="<?php the_title()?>&lt;br/&gt; Bấm để xem chi tiết">
                <?php the_post_thumbnail('normal_thumb'); ?> 
                <!--<img src="http://static4.fashionbeans.com/wp-content/uploads/2013/04/anonymous379-254x400.jpg" alt="Anonymous, Photographed in Tokyo&lt;br/&gt; Click Photo To See More" width="150" height="235" aria-describedby="ui-tooltip-4">-->
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