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
	global $page, $paged,$cat_id;

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
                <ul class="sitelinks left">
                    <li><a class="activeSite" href="/" name="top">FashionBeans</a></li>
                    <li><a href="/forums/" oldtitle="Discuss everything to do with men's fashion, style &amp; grooming." title="" aria-describedby="ui-tooltip-0">Forums</a></li>
                    <li><a href="/menswear/" oldtitle="Shop the latest designer menswear from all your favourite retailers." title="" aria-describedby="ui-tooltip-1">Menswear</a></li>
                    <li><a href="/category/offers-and-vouchers/" oldtitle="The Latest fashion discount codes, money off vouchers &amp; offers." title="">Voucher Codes</a></li>
                    <li><a rel="nofollow" href="/category/site-announcements/competitions/" oldtitle="Win Great Prizes From Your Favourite Fashion Brands!" title="" aria-describedby="ui-tooltip-3">Competitions</a></li>
                </ul>
                <ul class="right socialIcons">
                    <li style="width:83px;" class="facebookLike">
                        <iframe scrolling="no" frameborder="0" allowtransparency="true" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FfashionbeansOfficial&amp;send=false&amp;layout=button_count&amp;width=250&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21&amp;appId=117510971682164"></iframe></li>
                    <li class="twitterFollow"><iframe scrolling="no" frameborder="0" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=fashionbeans&amp;show_screen_name=false&amp;show_count=true" allowtransparency="true"></iframe></li>
                    <li class="googlePlus">
                        <div style="height: 20px; width: 90px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline;" id="___plusone_0">
                            <iframe width="100%" scrolling="no" frameborder="0" hspace="0" marginheight="0" marginwidth="0" style="position: static; top: 0px; width: 90px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" id="I0_1363778451542" name="I0_1363778451542" src="https://plusone.google.com/_/+1/fastbutton?bsv&amp;size=medium&amp;hl=en-US&amp;origin=http%3A%2F%2Fwww.fashionbeans.com&amp;url=http%3A%2F%2Fwww.fashionbeans.com%2F&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.FfgfQYnUabs.O%2Fm%3D__features__%2Fam%3DQQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAItRSTMakUxJfA2zOhhv3GzzbB_WLnlDNg#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Conload&amp;id=I0_1363778451542&amp;parent=http%3A%2F%2Fwww.fashionbeans.com&amp;rpctoken=15684379" allowtransparency="true" data-gapiattached="true" title="+1"></iframe>
                        </div>
                    </li>
                </ul>
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
                <div class="nav_outline" >
                <div id="mainNav" class="navigationSimplified">
                    <?php
                        menu_bar();
                    ?>
                    <!--
                    <ul class="topnavnew">
                        <li class="mensfashion">
                            <a class="topnav" rel="nofollow" href="/category/mens-fashion/">Men's Fashion</a>
                            <div class="multi_menu">
                                <div class="menuBack">
                                    <h3>Men's Fashion Categories &amp; Trending Articles</h3>
                                    <div class="multiLinks left">
                                        <a rel="nofollow" href="/category/mens-fashion/?seeall=true">All Latest Fashion Articles</a> 
                                        <a href="/category/mens-fashion-basics/">Men's Fashion Basics</a> 
                                        <a href="/category/mens-fashion-trends/">Men's Fashion Trends</a> 
                                        <a href="/category/mens-fashion-guides/">Men's Fashion Guides</a> 
                                        <a href="/category/collections/">Men's Fashion Collections</a> 
                                        <a href="/category/mens-style-icons/">Men's Style Icons</a>
                                    </div>
                                    <div class="featuredPicks left">
                                        <ul>
                                            <li>
                                                <a href="http://www.fashionbeans.com/2012/mens-a-essential-tweed-blazer/">
                                                    <img width="230" alt="Men’s Autumn/Winter Essential: Tweed Blazer" src="http://static3.fashionbeans.com/wp-content/uploads/2012/11/tweedblazermain-300x200.jpg">Men’s Autumn/Winter Essential: Tweed Blazer
                                                </a>
                                            </li>
                                            <li>
                                                <a href="http://www.fashionbeans.com/2013/mens-ss13-fashion-trend-neon-fluorescent-colours/">
                                                    <img width="230" alt="Men’s SS13 Fashion Trend: Neon &amp; Fluorescent Colours" src="http://static4.fashionbeans.com/wp-content/uploads/2013/01/neon-300x200.jpg">Men’s SS13 Fashion Trend: Neon &amp; Fluorescent Colours
                                                </a>
                                            </li>
                                            <li class="nomargin">
                                                <a href="http://www.fashionbeans.com/2012/5-common-winter-fashion-mistakes/">
                                                    <img width="230" alt="5 Common Winter Fashion Mistakes" src="http://static1.fashionbeans.com/wp-content/uploads/2012/12/wintermistakes-300x200.jpg">5 Common Winter Fashion Mistakes
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="break"></div>
                                    
                                </div>
                                
                            </div>
                        </li>
                        <li class="mensstyle">
                            <a href="/category/mens-style/" class="topnav">Men's Style</a>
                        </li>
                        <li class="grooming">
                            <a href="/category/male-grooming/" class="topnav">Men's Grooming Tips &amp; Male Grooming</a>
                            <div class="multi_menu grooming_menu" style="visibility: hidden;">
                                <div class="menuBack">
                                    <h3>Men's Grooming &amp; Hairstyles</h3>
                                    <div class="multiLinks left"> 
                                        <a href="/category/male-grooming/">Men's Grooming Tips</a>
                                        <a href="/category/mens-hairstyles/">Men's Hairstyles Advice</a>
                                        <a href="/category/mens-hairstyles-gallery/">Men's Hairstyles Galleries</a>
                                        <a href="/2011/top-10-men%e2%80%99s-grooming-products/">Top 10 Grooming Products</a>
                                        <a href="/2011/6-of-the-best-mens-hair-products/">Top 6 Men's Hair Products</a>
                                    </div>
                                    <div class="hairGalleries left">
                                        <ul>
                                            <li>
                                                <a title="Men's Short Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-short-hairstyles-gallery/"><img alt="Men's Short Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/short.jpg">Short Hair Gallery</a>
                                            </li>
                                            <li>
                                                <a title="Men's Mid-length Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-medium-length-hairstyles-gallery/">
                                                    <img alt="Men's Mid-length Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/mid.jpg">Mid-length Hair Gallery
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Men's Long Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-long-hairstyles-gallery/">
                                                    <img alt="Men's Long Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/long.jpg">Long Hair Gallery
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Men's Curly Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-curly-hairstyles-gallery/">
                                                    <img alt="Men's Curly Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/curly.jpg">Curly Hair Gallery
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Men's Black &amp; Afro Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-black-afro-hairstyles-gallery/">
                                                    <img alt="Men's Black &amp; Afro Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/black.jpg">Black &amp; Afro Hair Gallery
                                                </a>
                                            </li>
                                            <li class="nomargin">
                                                <a title="Men's Celebrity Hairstyles Gallery" href="/category/mens-hairstyles-gallery/mens-celebrity-hairstyles-gallery/">
                                                    <img alt="Men's Celebrity Hairstyles Gallery" src="http://static1.fashionbeans.com/resources/images/new/nav/galleries/celeb.jpg">Celebrity Hair Gallery
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="break"></div>                                    
                                </div>

                                        </div>
                                    </li>
                                    <li class="fitness">
                                        <a href="/category/mens-fitness-muscle-building/" class="topnav">Men's Fitness</a>
                                    </li>
                                    <li class="streetstylenav">
                                        <a href="/category/mens-street-style/" class="topnav">Street Style Fashion Photography</a>
                                    </li>
                                    <li class="navlookbooks">
                                        <a href="/category/mens-look-books/" class="topnav">Men's Fashion Look Books</a>
                                    </li>
                                    <li class="fbtvnav">
                                        <a href="/category/fbtv/" class="topnav">FBTV</a>
                                    </li>
                                    <li class="fashionnews">
                                        <a href="/category/mens-fashion-news/" class="topnav">Men's Fashion &amp; Style News</a>
                                    </li>
                                </ul>
                    -->
                                <div class="search-box right">
                                    <form action="<?php bloginfo('home'); ?>" method="get" id="searchform"> 
                                        <input type="text" size="10" value="Nhập nội dung" name="s" class="textfield" id="navsearch" value="Nhập nội dung" onfocus="if (this.value == 'Nhập nội dung') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Nhập nội dung';}"> 
                                        <input type="image" border="0" alt="Tìm kiếm" src="<?php bloginfo( 'template_url' ); ?>/images/new/nav/search2.gif" name="searchsubmit" id="navsearchbutton">
                                    </form>
                                </div>
                    <div class="break"></div>
                </div> <!-- end mainNav -->
                </div>
            </div> <!-- end navigation-->