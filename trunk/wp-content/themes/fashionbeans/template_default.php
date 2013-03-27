<div id="catmainBody" class="left">
    <div class="featuredScroller jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
      <?php
        $numberposts = 5;
        $cats = get_the_category();
        $category_ids = $cats[0]->cat_ID;
        $args = array(
            'numberposts'     => $numberposts,
            'offset'          => 0,
            'category'        => $category_ids,
            'orderby'         => 'post_date',
            'order'           => 'DESC',
            'include'         => '',
            'exclude'         => '',
            'post_type'       => 'post',
            'post_status'     => 'publish' 
        );
        
        $recent_posts = get_posts( $args );
        $count = count($recent_posts);        
    ?>
        <div class="scrollerControls">
            <?php foreach(range(1,$count) as $index): ?>
                <a href="#" class="inactive"><?php echo $index; ?></a>            
            <?php endforeach; ?>
        </div>
        <div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;">
            <ul class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: -1350px; width: 3375px;">
                <?php foreach($recent_posts as $post): setup_postdata($post); ?>
                <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none; width: 675px;" jcarouselindex="1"> 
                    <a href="<?php the_permalink() ?>">
                         <?php echo get_the_post_thumbnail($post->ID,'slide_show'); ?> 
                        <div class="featuredInfo" style="display: none;"> 
                            <span>
                                <?php $category = get_the_category( $post->ID );
                                    echo $category[0]->cat_name;?>
                            </span>
                            <h2><?php the_title(); ?></h2>
                        </div> 
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="jcarousel-prev jcarousel-prev-horizontal" style="top: 135px; display: none;"></div>
        <div class="jcarousel-next jcarousel-next-horizontal" style="top: 135px; display: none;"></div>        
    </div>
    
    
    <div class="blacktop"> 
        <span class="blackheader">Mới nhất: 
            <?php $category = get_the_category(); 
                echo $category[0]->cat_name; ?>
        </span>
    </div>
    <?php if ( have_posts() ) : ?>
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
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
    <p class="pageCount"><?php echo ($paged-1) * $wp_query->post_count + 1; ?> - <?php echo $paged * $wp_query->post_count; ?> CỦA <?php echo $wp_query->found_posts?> <?php echo $category[0]->cat_name; ?></p>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : ?>
        Không có dữ liệu
    <?php endif; ?>

</div> <!-- End catmainBody -->

<?php get_sidebar(); ?>
<div class="break"></div>