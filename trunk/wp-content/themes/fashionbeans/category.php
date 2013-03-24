<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header();
?>
<div class="breadcrumb">
    
    <?php 
    $category = get_the_category();
    ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> //&nbsp;<h1><?php echo $category[0]->cat_name; ?></h1>
</div>

    <?php

include TEMPLATEPATH . '/template_default.php';


get_footer(); 

?>