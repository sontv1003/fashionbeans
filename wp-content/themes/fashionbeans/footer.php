    </div> <!-- end Wrapper -->
        <div class="topLink">
        </div>
        
        <div id="footer">
            <div class="companyInfo">
                <?php get_sidebar( 'footer' ); ?>
                <div class="footerIcons right">
                    <span>Kết nối cùng WELOOK</span>
                    <ul>
                        <li style="margin-left:0;">
                            <a title="FashionBeans Official Facebook Page" target="_blank" href="http://www.facebook.com/fashionbeansOfficial" class="fbFooter">FashionBeans Official Facebook Page</a>
                        </li>
                        <li>
                            <a title="FashionBeans Official Twitter" target="_blank" href="http://www.twitter.com/fashionbeans/" class="twitterFooter">FashionBeans Official Twitter</a>
                        </li>
                        <li>
                            <a title="FashionBeans Google +1 Page" target="_blank" href="http://www.google.com/+fashionbeans" class="googleFooter">FashionBeans Google +1 Page</a>
                        </li>
                        <li>
                            <a title="FashionBeans Tumblr" target="_blank" href="http://tumblr.fashionbeans.com/" class="tumblrFooter">FashionBeans Tumblr</a>
                        </li>
                        <li>
                            <a title="FashionBeans RSS Feed" rel="nofollow" target="_blank" href="http://out.fashionbeans.com/rss/" class="rssFooter">FashionBeans RSS Feed</a>
                        </li>
                    </ul><?php echo do_shortcode('[wysija_form id="2"]') ?>
                    <div class="break"></div> 
                    <span>Nhận tin từ Welook</span>
                    <p>Đăng ký để nhận các tin tức cập nhật mới nhất từ Welook</p>
                    <form id="footerNewsletter" method="get" action="/newsletter/">
                        <input type="text" onblur="if(this.value==''){this.value='Nhập vào Email'}" onclick="if(this.value=='Nhập vào Email'){this.value=''}" size="10" value="Nhập vào Email" name="email" class="left" id="footerEmail"> 
                        <input type="submit" value="Đăng ký" class="left" id="footerSignup">
                    </form>
                    <div class="break"></div>                            
                </div>
                <div class="copyrightNotice left"> 
                    <img alt="Welook.vn" class="left" src="<?php bloginfo('template_url'); ?>/images/footerlogo.jpg"> 
                    <span class="left">Copyright &copy; BeansPublishing Limited 2007 - <a href="/2013/">2013</a>
                        . All Rights Reserved.<br> Wellok is a trading name of BeansPublishing Limited.<br> 
                        Welook.vn: Men's Fashion Tips &amp; Complete Men's Style Guide Since 2007.
                    </span>
                </div>
                <div class="break"></div>
                <script src="<?php bloginfo('template_url'); ?>/js/features.min.js" language="javascript" type="text/javascript"></script>
                <script src="<?php bloginfo('template_url'); ?>/js/logic1.js" language="javascript" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function(){
                        dropdownMenus();
                        tooltips();
                        articleScroller();
                        scroller("#mostPopular",popularpost_callback,1,"both",1,popSlide);
                        scroller("#fbtv-homepage",buttons_callback,3,"circular",3);
                        touchwipe(".featuredScroller");
                        touchwipe("#mostPopular");
                        touchwipe("#fbtv-homepage");
                        //validateForms("#commentform");
                    });
                </script>                                
            </div>
        </div> <!-- end Footer -->
<?php wp_footer(); ?>
        
    <script>
            console.debug('s=.<?=$cat_id?>');
            //$cat_id = get_category_top_parent_id();
        var active_item = 'menu-item-<?php echo $cat_id; ?>';
        jQuery('#'+active_item).addClass('current');
    </script>
    </body>
</html>