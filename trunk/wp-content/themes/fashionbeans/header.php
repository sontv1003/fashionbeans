<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged,$cat_id, $wpdb;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/sv1.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerylatest.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
    <body <?php body_class(); ?>>
        <!-- Site bar -->
        <div id="siteBar">
            <div class="infoBar">
                <div class="sitelinks left">
                    
                </div>
                <!--
                <ul class="sitelinks left">
                    <li><a class="activeSite" href="/" name="top">FashionBeans</a></li>
                    <li><a href="/forums/" oldtitle="Discuss everything to do with men's fashion, style &amp; grooming." title="" aria-describedby="ui-tooltip-0">Forums</a></li>
                    <li><a href="/menswear/" oldtitle="Shop the latest designer menswear from all your favourite retailers." title="" aria-describedby="ui-tooltip-1">Menswear</a></li>
                    <li><a href="/category/offers-and-vouchers/" oldtitle="The Latest fashion discount codes, money off vouchers &amp; offers." title="">Voucher Codes</a></li>
                    <li><a rel="nofollow" href="/category/site-announcements/competitions/" oldtitle="Win Great Prizes From Your Favourite Fashion Brands!" title="" aria-describedby="ui-tooltip-3">Competitions</a></li>
                </ul>
                -->
                
<!--                <ul class="right socialIcons">
                    <li style="width:83px;" class="facebookLike">
                        <iframe scrolling="no" frameborder="0" allowtransparency="true" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FfashionbeansOfficial&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;appId=117510971682164"></iframe></li>
                    <li class="twitterFollow"><iframe scrolling="no" frameborder="0" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=fashionbeans&amp;show_screen_name=false&amp;show_count=true" allowtransparency="true"></iframe></li>
                    <li class="googlePlus">
                        <div style="height: 20px; width: 90px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline;" id="___plusone_0">
                            <iframe width="100%" scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1363778451542" name="I0_1363778451542" src="https://plusone.google.com/_/+1/fastbutton?bsv&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fwww.fashionbeans.com&amp;url=http%3A%2F%2Fwww.fashionbeans.com%2F&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.FfgfQYnUabs.O%2Fm%3D__features__%2Fam%3DQQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMakUxJfA2zOhhv3GzzbB_WLnlDNg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Conload&amp;id=I0_1363778451542&amp;parent=http%3A%2F%2Fwww.fashionbeans.com&amp;rpctoken=15684379" allowtransparency="true" data-gapiattached="true" title="+1"></iframe>
                        </div>
                    </li>
                </ul>-->
            </div>
        </div><!-- End site bar -->
        
        <div style="padding-bottom:0px;z-index:10;" id="wrapper">
            <div class="center">
                <a title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="logoLink left" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
                <div class="navBanner right">
                </div>
                <div class="clear"></div>
            </div><!-- end center -->
            <div class="break"></div>
            <div class="navigation">
                <div class="nav_outline">
                    <div id="mainNav" class="navigationSimplified">
                        <?php
                            menu_bar();
                        ?>
                        <div class="search-box right">
                            <form action="<?php bloginfo('home'); ?>" method="get" id="searchform"> 
                                <input type="text" size="10" value="Nhập nội dung" name="s" class="textfield" id="navsearch" value="Nhập nội dung" onfocus="if (this.value == 'Nhập nội dung') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Nhập nội dung';}"> 
                                <input type="image" border="0" alt="Tìm kiếm" src="<?php bloginfo( 'template_url' ); ?>/images/new/nav/search2.gif" name="searchsubmit" id="navsearchbutton">
                            </form>
                        </div>
                        <div class="break"></div>
                    </div> <!-- end mainNav -->
                </div>
            <?php
                global $post;
                if(is_single()) {
                    $cat = get_the_category($post->ID);
                    $active_class = ($menu_item->object_id == $cat[0]->cat_ID) ? ' class="current"' : '';
                } else if(is_category() && is_category($menu_item->object_id))
                    $active_class = ' class="current"';
                else 
                    $active_class = '';
                if(1==1):
            ?>
                <div class="secondaryMenu"> <!-- Sub menu -->
                    <strong>See More:</strong> 
                        <a href="/category/mens-fashion-basics/">Fashion Basics</a>
                        <a href="/category/mens-fashion-trends/" class="underline bold">Fashion Trends</a> 
                        <a href="/category/mens-fashion-guides/">Fashion Guides</a> 
                        <a href="/category/collections/">Fashion Collections</a>
                        <a href="/category/mens-fashion/?seeall=true" rel="nofollow">All Articles</a>
                        <div class="break"></div>
                </div><!-- end sub menu -->
            <?php endif; ?>
            </div> <!-- end navigation-->