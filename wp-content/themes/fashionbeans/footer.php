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
                            <a title="Welook Facebook Page" target="_blank" href="http://#" class="fbFooter">Welook Official Facebook Page</a>
                        </li>
                        <li>
                            <a title="Welook Twitter" target="_blank" href="http://#" class="twitterFooter">Welook Official Twitter</a>
                        </li>
                        <li>
                            <a title="Welook Google +1 Page" target="_blank" href="http://#" class="googleFooter">Welook Google +1 Page</a>
                        </li>
                        <li>
                            <a title="Welook Tumblr" target="_blank" href="http://#" class="tumblrFooter">Welook Tumblr</a>
                        </li>
                        <li>
                            <a title="Welook RSS Feed" rel="nofollow" target="_blank" href="http://#" class="rssFooter">Welook RSS Feed</a>
                        </li>
                    </ul>
                    <div class="break"></div> 
                    <span>Nhận tin từ Welook</span>
                    <p>Đăng ký để nhận các tin tức cập nhật mới nhất từ Welook</p>
                    <?php echo do_shortcode('[wysija_form id="2"]') ?>
                    <!--
                    <form id="footerNewsletter" method="get" action="/newsletter/">
                        <input type="text" onblur="if(this.value==''){this.value='Nhập vào Email'}" onclick="if(this.value=='Nhập vào Email'){this.value=''}" size="10" value="Nhập vào Email" name="email" class="left" id="footerEmail"> 
                        <input type="submit" value="Đăng ký" class="left" id="footerSignup">
                    </form>
                    -->
                    <div class="break"></div>
                </div>
                <div class="copyrightNotice left"> 
                    <img alt="Welook.vn" class="left" src="<?php bloginfo('template_url'); ?>/images/footerlogo.jpg"> 
                    <span class="left">Welook được ra đời năm <a href="#">2013</a>
                        Chuyên tin tức, hình ảnh, xu hướng thời trang<br>Địa chỉ: Hà Nội<br> 
                        Website được xây dựng bởi <a href="http://www.geckomedia.vn" target="_blank">GECKO MEDIA</a>
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
    </body>
</html>