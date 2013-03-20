<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="breadcrumb">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php the_title() ?></h1>
</div>
<div id="singleOutline" class="left">
    <div class="mainArticle">
        <h1 class="articles"><?php the_title(); ?></h1>
        <div class="articleBody">
            <?php the_content() ?>
        </div>
    </div>
    <div class="break"></div>
</div>
<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>

<div class="break"></div>
    
<?php get_footer(); ?>