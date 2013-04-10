<?php get_header(); ?>
    <div class="featuredScroller jcarousel-container jcarousel-container-horizontal left" style="position: relative; display: block;">
        <?php get_slide_show() ?>        
    </div>
    <div class="cpmAdapt right">
        <?php dynamic_sidebar( 'sidebar-2' ); ?>
        <?php include 'widget_social.php'; ?>
    </div>
    <div class="break"></div>
    
<!-- CATEGORY XU HƯỚNG -->
<?php $cat_id = 5; ?>
    <div class="left maincolumn">
        <div class="blacktop"> 
            <span class="blackheader"><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></span>
        </div>        
        <div class="homeNewsBorder">
<?php
 $home_post1 = get_posts('post_status=publish&numberposts=4&category='.$cat_id);
 $index = 1;
 foreach($home_post1 as $post) : setup_postdata($post);
 ?>
            <div <?php echo ($index%2==0) ? 'style="margin:10px 0 0 0;"' : ""?> class="homeNewsOutline">
                <div class="homeNews"> 
                    <a href="<?php the_permalink() ?>"> 
                        <span class="imageHolder">
                            <?php the_post_thumbnail(array(100,100)); ?>                            
                        </span> 
                        <span class="articleTitle"><?php the_title() ?></span> 
                        <span class="previewText"><?php the_excerpt_max_charlength(200); ?></span>
                    </a>
                    <div class="break"></div>                    
                </div>                
            </div>
 
<?php $index++; endforeach; ?>
            <div class="break"></div>            
        </div>        
    </div>
<!-- END XU HƯỚNG -->

    <div class="cpmAdapt right">
        <?php if (function_exists('rps_show')) echo rps_show(); ?>
    </div>
    <div class="break"></div>
    
    

<!-- CATEGORY PHONG CÁCH -->
<?php $cat_id = 3; ?>
<div class="blacktop left maincolumn">
    <h2><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></h2>
    <ul class="streetStyleHome">
<?php
 $home_star = get_posts('post_status=publish&numberposts=10&category='.$cat_id);
 $index = 1;
 foreach($home_star as $post) : setup_postdata($post);
 ?>
        <li<?php echo ($index%5==0) ? ' class="nomargin"' : ''; ?>>
            <a rel="nofollow" href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('normal_thumb'); ?>                
            </a>
        </li>
<?php $index++; endforeach; ?>
        <!--<li class="seemoreStreet nomargin"><a href="<?php echo get_category_link($cat_id) ?>">Click để xem tiếp...</a></li>-->
    </ul>
    <div class="break"></div>
    
</div>
<!-- END PHONG CÁCH -->


<!-- COMMENT VIEW -->
<?php include 'widged-the-lastest.php'; ?>
<!-- END COMMENT VIEW -->

<!-- CATEGORY CHUYỆN SAO -->
<?php $cat_id = 7; ?>
<div class="blacktop twentyTop"><h2><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></h2></div>
<span class="arrow-prev left">Trước</span>
<div class="fbtvScroller left">
    <div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
        <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
            <ul id="fbtv-homepage" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -3600px; width: 3600px;">
<?php
 $home_fashions = get_posts('post_status=publish&numberposts=10&category='.$cat_id);
 $index = 1;
 foreach($home_fashions as $post) : setup_postdata($post);
?>
                <li class="latestFBTV jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none; width: 300px;" jcarouselindex="<?php echo $index?>"> 
                    <a href="<?php the_permalink() ?>" class="left" rel="nofollow">
                        <?php the_post_thumbnail('default_thumb'); ?>  
                        <span><?php the_title() ?></span> 
                    </a>
                </li>
<?php $index++; endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<span class="arrow-next left">Sau</span>
 <div class="break"></div>
<!-- END CHUYỆN SAO -->

    
<!-- CATEGORY THỜI TRANG -->  
<?php $cat_id = 2; ?>
    <div class="left maincolumn twentyTop">
        <div class="blacktop"><a href="<?php echo get_category_link($cat_id) ?>"><h2><?php echo get_cat_name($cat_id) ?></h2></a></div>
<?php
 $home_fashions = get_posts('post_status=publish&numberposts=4&category='.$cat_id);
 $index = 1;
 foreach($home_fashions as $post) : setup_postdata($post);
 ?>
        <div class="home-twoColumn <?php echo ($index%2==0)? 'farRight ':''; ?>left">
            <a href="<?php the_title() ?>">
                <?php the_post_thumbnail('large_thumb'); ?>                
            </a> 
            <a class="the-category" href="<?php $category = get_the_category($post->ID); echo get_category_link($category[0]->term_id);?>"><?php echo $category[0]->cat_name;?></a>
            <h3>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h3> 
            <span class="previewText"><?php the_excerpt_max_charlength(500); ?></span>
        </div>
<?php $index++; endforeach; ?>
    </div>
<!-- END THỜI TRANG -->


<!-- RIGHT QUẢNG CÁO -->
   <div class="sidebar right twentyTop">
       <div class="blacktop">           
           <span class="blackHeaderBox"><h2>Quảng cáo</h2></span>
       </div>
       <?php wp125_write_ads(); ?>
   </div> 
<!-- END QUẢNG CÁO -->

<!-- CATEGORY LÀM ĐẸP -->
<?php $cat_id = 6;  ?>
    <div class="left maincolumn twentyTop">
        <div class="blacktop">
            <a href="<?php echo get_category_link($cat_id) ?>"><h2><?php echo get_cat_name($cat_id) ?></h2></a>
        </div>
<?php
 $home_makeup = get_posts('post_status=publish&numberposts=4&category='.$cat_id);
 $index = 1;
 foreach($home_makeup as $post) : setup_postdata($post);
 ?>
        <div class="home-twoColumn <?php echo ($index%2==0)? 'farRight ':''; ?>left">
            <a href="<?php the_title() ?>">
                <?php the_post_thumbnail('large_thumb'); ?>                
            </a> 
            <a class="the-category" href="<?php $category = get_the_category($post->ID); echo get_category_link($category[0]->term_id);?>"><?php echo $category[0]->cat_name;?></a>
            <h3>
                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h3> 
            <span class="previewText"><?php the_excerpt_max_charlength(500); ?></span>
        </div>
<?php $index++; endforeach; ?>
    </div>
<!-- END LÀM ĐẸP -->


<!-- CATEGORY TIN TỨC -->  
<?php $cat_id = 9;?>    
    <div class="sidebar right twentyTop">
        <div class="blacktop">
            <h2><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></h2>
        </div>
<?php
    $home_news = get_posts('post_status=publish&numberposts=5&category='.$cat_id);
    $index = 0;
    foreach($home_news as $post) : setup_postdata($post);
?>
        <?php if($index > 0) { ?>
        <div class="homeNewsOutline fitnessHome">
        <?php } else { ?>
        <div style="margin:15px 0 0 0;width:300px;" class="homeNewsOutline">
        <?php } ?>
            <div class="homeNews">
                <a href="<?php the_permalink() ?>">
                    <span class="imageHolder">
                         <?php the_post_thumbnail(array(100,100)); ?> 
                    </span> 
                    <span class="articleTitle fitnessTitle"><?php the_title() ?></span>
                    <span class="previewText"><?php the_excerpt_max_charlength(100); ?></span>
                </a>
                <div class="break"></div>                
            </div>            
        </div>
<?php $index++; endforeach; ?>
    </div>

    <div class="break"></div>
    
<!-- END CATEGORY TIN TỨC -->    
    
<?php get_footer();?>