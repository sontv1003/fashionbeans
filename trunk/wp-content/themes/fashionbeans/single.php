<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();?>
<div class="breadcrumb">
    <?php if(function_exists('bcn_display')){ bcn_display();}?>
    <!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php the_title() ?></h1>-->
</div>
<div class="articleInfo">
    <div class="commentCount right"> 
        <a href="#comments"><span><?php echo get_number_comments() ?></span>Comments</a>
    </div>
    <h1 class="articles"><?php the_title(); ?></h1>
    <div class="meta">
        <span class="author">Người đăng: 
            <a href="<?php the_author_link() ?>" title="<?php the_author_nickname()?>" rel="author"><?php the_author_nickname()?></a> 
            on 21st March 2013 </span>
        <div class="break"></div>
    </div>
</div>
<div id="singleOutline" class="left">
    <div class="articleImage">
        <?php the_post_thumbnail() ?>
    </div>
    
    <div class="articleSocial" style="border-top:none;border-bottom:double #111;margin:0 0 25px 0;padding-top:0;">
       <span class="left">CHIA SẺ:</span>
       <div class="left"><?php echo get_jamie_social_code(); ?></div>
       <div class="break"></div>
    </div>
    
    <div class="articleBody"><?php the_content() ?></div>
    
    <div class="articleSocial">
        <span class="left">CHIA SẺ:</span>
        <div class="left"><?php echo get_jamie_social_code(); ?></div>
        <div class="break"></div>
    </div>
    
    <div class="relatedPosts"></div>
    
    <div class="break"></div>
    
    <?php comments_template(); ?>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>

<div class="break"></div>
    
<?php get_footer(); ?>
<script>
validateForms("#commentform");
</script>