<?php
/**
 * Template Name: Dàn ngang
 */

get_header();
?>
<div class="breadcrumb">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
<?php 
    $cat_id = 7;
    $post_of_page = 2;
?>
    
</div>

<div class="featuredScroller left jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
    <?php get_slide_show() ?>        
</div>

<div class="cpmAdapt right">
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
    <?php include 'widget_social.php'; ?>
</div>
<div class="break"></div>
<div class="blacktop"> 
    <span class="blackheader">Mới nhất: 
        <?php echo single_cat_title(); ?>
    </span>
</div>
<div class="categoryFilters"> 
    <!--
    <span class="openFilters">Click Here To Filter Lookbooks By Brand or Season</span>
    <div class="filterOptions">
        <div class="brandFilters left"> <span>Popular Brands</span>
            <ul>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=allsaints">AllSaints</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=asos">ASOS</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=banana-republic">Banana Republic</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=ben-sherman">Ben Sherman</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=digel">Digel</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=dolce-gabbana">Dolce &amp; Gabbana</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=el-burgues">El Burgués</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=he-by-mango">He by Mango</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=hm">H&amp;M</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=house-of-fraser">House Of Fraser</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=l-b-m-1911">L.B.M. 1911</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=massimo-dutti">Massimo Dutti</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=next">Next</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=pull-bear">Pull &amp; Bear</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=reiss">Reiss</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=river-island">River Island</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=scotch-soda">Scotch &amp; Soda</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=topman">Topman</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=urban-outfitters">Urban Outfitters</a></li>
                <li><a href="http://www.fashionbeans.com/category/mens-look-books/?bf=zara">Zara</a></li>
            </ul>
            <div class="break"></div>            
        </div>
        <div class="seasonFilter left"> 
            <span>Current Seasons</span> 
            <a href="http://www.fashionbeans.com/category/mens-look-books/?season=ss13">Spring/Summer 2013</a>
            <a href="http://www.fashionbeans.com/category/mens-look-books/?season=aw13">Autumn/Winter 2013</a>
            <div class="break"></div>                    
        </div>
        <div class="break"></div> 
        <span class="closeFilters">Close Filters</span>
    </div>
    -->
</div>
<div class="break"></div> 
<div class="lookbookCategory">
<?php   
    query_posts(array('post_status' => 'publish','posts_per_page'  => 30,'paged' => $paged,'cat' => get_current_catid()));    
    if ( have_posts() ) :  
?>
<?php $count = 1; while ( have_posts() ) : the_post(); ?>
    <div class="lookbooks" <?php echo ($count%3==0)? 'style="margin-right:0px;"' : ''; ?>> 
        <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title() ?>">
            <p style="width: 320px; height: 213px;">
                <?php the_post_thumbnail('large_thumb'); ?>
            </p>            
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
<?php $paged = (!empty($paged)) ? $paged : 1; ?>
<p class="pageCount"><?php echo ($paged-1) * $wp_query->post_count + 1; ?> - <?php echo $paged * $wp_query->post_count; ?> CỦA <?php echo $wp_query->found_posts?> <?php echo single_cat_title(); ?></p>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

<?php get_footer(); ?>