    </div> <!-- end Wrapper -->
        <div class="topLink">
            <a href="#top" class="backtoTop">
                <img src="<?php bloginfo( 'template_url' ); ?>/images/new/icons/backtotop.gif"> Lên đầu
            </a>
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
                    </ul>
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
                    <img alt="FashionBeans.com: Men's Fashion Tips &amp; Complete Men's Style Guide Since 2007" class="left" src="http://static1.fashionbeans.com/resources/images/new/nav/footerlogo.gif"> 
                        <span>Copyright &copy; BeansPublishing Limited 2007 - <a href="/2013/">2013</a>
                            . All Rights Reserved.<br> FashionBeans is a trading name of BeansPublishing Limited. Company No. 7740652<br> 
                                    FashionBeans.com: Men's Fashion Tips &amp; Complete Men's Style Guide Since 2007.
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
                    });
                </script>
                <img alt="" src="http://stats.wordpress.com/g.gif?host=www.fashionbeans.com&amp;rand=0.5231645695584823&amp;v=ext&amp;j=1%3A2.2&amp;blog=5414061&amp;post=0&amp;tz=0&amp;ref=http%3A//www.fashionbeans.com/category/mens-fashion/" id="wpstats">                                
            </div>
        </div> <!-- end Footer -->
<?php wp_footer(); ?>
        
    <script>
        <?php 

        ?>
        var active_item = 'menu-item-<?php echo 3; ?>';
        jQuery('#'+active_item).addClass('current');
    </script>
    </body>
</html>