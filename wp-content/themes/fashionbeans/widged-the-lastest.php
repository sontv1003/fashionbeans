<?php
?>
<div class="rhsMostPopular right">
    <div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal">
        <div style="position: relative;" class="jcarousel-clip jcarousel-clip-horizontal">
            <ul style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 600px;" class="jcarousel-list jcarousel-list-horizontal" id="mostPopular">
                <li jcarouselindex="1" style="float: left; list-style: none; width: 300px;" class="popularLists jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal">
                    <div class="blacktop left">
                        <h2>Comment nhiều nhất</h2>
                        <ul class="rhsNews">
<?php  query_posts(array('post_status' => 'publish','posts_per_page'  => 5,'orderby' => 'comment_count', 'order' => 'DESC' )); ?>
                            <?php while ( have_posts() ) : the_post(); ?>
                            <li>
                                <a href="<?php echo the_permalink(); ?>">
                                    <?php the_post_thumbnail('small_thumb'); ?> 
                                    <span><?php the_title() ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>                           
                        </ul>
                    </div>
                </li>
                <li jcarouselindex="2" style="float: left; list-style: none; width: 300px;" class="popularLists jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal">
                    <div class="blacktop left">
                        <h2>Bài viết mới nhất</h2>
                        <ul class="rhsNews">
<?php $args = array(
    'numberposts' => 5,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'suppress_filters' => true );

    $recent_posts = wp_get_recent_posts( $args, $output = ARRAY_A );
?>                                     
                    <?php while ( have_posts() ) : the_post(); ?>         
                            <li>
                                <a href="<?php echo the_permalink(); ?>">
                                    <?php the_post_thumbnail('small_thumb'); ?> 
                                    <span><?php the_title() ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>   
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="popularControls"> 
        <span class="pop-prev">Trước</span>
        <a class="active" href="<?php site_url() ?>/#">1</a> 
        <a class="inactive" href="<?php site_url() ?>/#">2</a> 
        <span class="pop-next">Sau</span>
    </div>
</div>
<div class="break"></div>