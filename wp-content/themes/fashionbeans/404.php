<?php
/**
 * The template for displaying 404 Error pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> // Trang lỗi</div>
<h1 class="searchCategory" style="text-align: center;color: #FF0000;">
    KHÔNG TÌM THẤY TRANG BẠN YÊU CẦU!
    <h1>
    <div id="results">

    </div>
<?php get_footer(); ?>