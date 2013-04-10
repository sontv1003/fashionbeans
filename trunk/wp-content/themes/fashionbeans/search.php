<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ</a> // Tìm kiếm // <?php printf( __( 'Kết quả tìm kiếm: %s', 'twentyeleven' ), get_search_query() ); ?></div>
<h1 class="searchCategory"><?php printf( __( 'Kết quả tìm kiếm: %s', 'twentyeleven' ), '<span class="searchterms">' . get_search_query() . '</span>' ); ?></h1>
                <div id="results">
                    <div class="gsc-above-wrapper-area"></div>
			<?php 
                        $s = (!empty($_GET['s'])) ? $_GET['s'] : '';
                        query_posts(array('s' => $s,'posts_per_page'  => 10,'paged' => $paged));
                        if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
                                    <div class="gsc-webResult gsc-result">
                                        <div class="gs-webResult gs-result">
                                            <table class="gsc-table-result">
                                                <tbody>
                                                    <tr>
                                                        <td class="gsc-table-cell-thumbnail gsc-thumbnail">
                                                            <div class="gs-image-box gs-web-image-box gs-web-image-box-landscape">
                                                                <a class="gs-image" href="<?php the_permalink() ?>" target="_top"><?php echo get_the_post_thumbnail($post->ID, 'default_thumb');?></a>
                                                            </div>
                                                        </td>
                                                        <td style="padding-left: 10px;">
                                                                <div class="gs-title gsc-table-cell-thumbnail gsc-thumbnail-left">
                                                                    <a class="gs-title" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                                                </div>
                                                               <div><span></span></div>
                                                               <div class="gs-bidi-start-align gs-snippet" dir="ltr" style="height: 85px; overflow: hidden;">
                                                                   <?php the_excerpt_max_charlength(500); ?>
                                                               </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
				<?php endwhile; ?>
                    <?php $paged = (!empty($paged)) ? $paged : 1; ?>
                    <p class="pageCount"><?php echo ($paged-1) * $wp_query->post_count + 1; ?> - <?php echo $paged * $wp_query->post_count; ?> CỦA <?php echo $wp_query->found_posts?> KẾT QUẢ</p>
                    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                <?php else : ?>

                    <h1 class="entry-title"><?php _e( 'Không tìm thấy', 'twentyeleven' ); ?></h1>
                    <p><?php _e( 'Rất tiếc. Vui lòng nhập từ khóa khác', 'twentyeleven' ); ?></p>
                    <div class="search-box left">
                        <form action="<?php bloginfo('home'); ?>" method="get" id="searchform"> 
                            <input type="text" size="10" value="Nhập nội dung" name="s" class="textfield" id="navsearch" value="Nhập nội dung" onfocus="if (this.value == 'Nhập nội dung') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Nhập nội dung';}"> 
                            <input type="image" border="0" alt="Tìm kiếm" src="<?php bloginfo( 'template_url' ); ?>/images/new/nav/search2.gif" name="searchsubmit" id="navsearchbutton">
                        </form>
                    </div>
                <?php endif; ?>
            </div>
<?php get_footer(); ?>