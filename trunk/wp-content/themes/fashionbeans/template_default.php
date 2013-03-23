<div id="catmainBody" class="left">
    <div class="featuredScroller">
        SLIDE SHOW
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
        <p><?php ?></p>
        <div class="articleData">
            <span class="right">
                <a href="<?php the_permalink() ?>#respond" title="<?php the_title() ?>">(<?php echo get_number_comments() ?>) Comments</a>
            </span>
        </div>
        <div class="break"></div>
    </div>
    <?php endwhile; ?>

    <div class="break"></div>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : ?>
        Không có dữ liệu
    <?php endif; ?>

</div> <!-- End catmainBody -->

<?php get_sidebar(); ?>
<div class="break"></div>