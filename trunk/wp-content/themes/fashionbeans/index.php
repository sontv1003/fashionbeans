<?php get_header(); ?>
    <div class="featuredScroller jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
        <?php get_slide_show() ?>        
    </div>


<!-- START LAM DEP -->

<?php $cat_id = 6; ?>
    <div class="left maincolumn">
        <div class="blacktop"> 
            <span class="blackheader"><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></span>
        </div>        
        <div class="homeNewsBorder">
<?php
 $home_post1 = get_posts('numberposts=4&category='.$cat_id);
 $index = 1;
 foreach($home_post1 as $post) : setup_postdata($post);
 ?>
            <div <?php echo ($index%2==0) ? 'style="margin:10px 0 0 0;"' : ""?> class="homeNewsOutline">
                <div class="homeNews"> 
                    <a href="<?php the_permalink() ?>"> 
                        <span class="imageHolder">
                            <?php the_post_thumbnail(array(100,100)); ?>                            
                        </span> 
                        <span class="articleTitle"><?php the_title() ?></span> 
                        <span class="previewText"><?php the_excerpt_max_charlength(200); ?></span>
                    </a>
                    <div class="break"></div>                    
                </div>                
            </div>
 
<?php $index++; endforeach; ?>
            <div class="break"></div>            
        </div>        
    </div>

<!-- END LAM DEP -->

<!--  -->

<div class="blacktop left maincolumn">
    <h2>
        <a href="http://www.fashionbeans.com/category/mens-street-style/">Men's Street Style Photography</a>
    </h2>
    <ul class="streetStyleHome">
        <li>
            <a rel="nofollow" href="http://www.fashionbeans.com/2013/anonymous-362/">
                <img width="127" height="200" alt="Anonymous" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/anonymous376-150x235.jpg">
            </a>
        </li>
        <li>
            <a rel="nofollow" href="http://www.fashionbeans.com/2013/anonymous-360/">
                <img width="127" height="200" alt="Anonymous" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/anonymous374-150x235.jpg"></a></li>
                <li><a rel="nofollow" href="http://www.fashionbeans.com/2013/anonymous-364/"><img width="127" height="200" alt="Anonymous" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/anonymous378-150x235.jpg"></a></li><li><a rel="nofollow" href="http://www.fashionbeans.com/2013/ovadia-sons/"><img width="127" height="200" alt="Ovadia &amp; Sons" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/sons-150x235.jpg"></a></li><li class="nomargin"><a rel="nofollow" href="http://www.fashionbeans.com/2013/dennis-askins/"><img width="127" height="200" alt="Dennis Askins" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/dennis2-150x235.jpg"></a></li><li><a rel="nofollow" href="http://www.fashionbeans.com/2013/anonymous-363/"><img width="127" height="200" alt="Anonymous" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/anonymous377-150x235.jpg"></a></li><li><a rel="nofollow" href="http://www.fashionbeans.com/2013/anonymous-359/"><img width="127" height="200" alt="Anonymous" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/anonymous373-150x235.jpg"></a></li><li><a rel="nofollow" href="http://www.fashionbeans.com/2013/david-thielebule/"><img width="127" height="200" alt="David Thielebule" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/david9-150x235.jpg"></a></li><li><a rel="nofollow" href="http://www.fashionbeans.com/2013/alex-4/"><img width="127" height="200" alt="Alex" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/alex7-150x235.jpg"></a></li><li class="seemoreStreet nomargin"><a href="http://www.fashionbeans.com/category/mens-street-style/">Click Here To See More...</a>
        </li>
    </ul>
    <div class="break"></div>
    
</div>
<!-- -->

<!-- COMMENT VIEW -->
<div class="rhsMostPopular right">
    <div style="position: relative; display: block;" class="jcarousel-container jcarousel-container-horizontal">
        <div style="position: relative;" class="jcarousel-clip jcarousel-clip-horizontal">
            <ul style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 600px;" class="jcarousel-list jcarousel-list-horizontal" id="mostPopular">
                <li jcarouselindex="1" style="float: left; list-style: none; width: 300px;" class="popularLists jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal">
                    <div class="blacktop left">
                        <h2>Xem nhiều nhất</h2>
                        <ul class="rhsNews">
                            <li>
                                <a href="http://www.fashionbeans.com/2013/mens-hair-trends-for-ss13/">
                                    <img width="120" height="60" alt="hairss13" class="attachment-120,60x120,60 wp-post-image" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/hairss13-150x75.jpg">
                                    <span>Men's Hair Trends For Spring/Summer 2013</span>
                                </a>
                            </li>
                            <li><a href="http://www.fashionbeans.com/2013/picking-a-new-hairstyle/">
                                    <img width="120" height="60" alt="hairmain2" class="attachment-120,60x120,60 wp-post-image" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/hairmain2-150x75.jpg"><span>Picking A New Men's Hairstyle</span>
                                </a>
                            </li>
                            <li><a href="http://www.fashionbeans.com/2013/how-to-look-good-on-campus/"><img width="120" height="60" alt="campus" class="attachment-120,60x120,60 wp-post-image" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/campus-150x75.jpg"><span>How To Look Good: On Campus</span></a></li><li><a href="http://www.fashionbeans.com/2013/five-ss13-menswear-staples/"><img width="120" height="60" alt="staples" class="attachment-120,60x120,60 wp-post-image" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/staples-150x75.jpg"><span>Five SS13 Menswear Staples </span></a></li><li><a href="http://www.fashionbeans.com/2013/mens-ss13-fashion-trend-stripes/"><img width="120" height="60" alt="stripesmain" class="attachment-120,60x120,60 wp-post-image" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/stripesmain-150x75.jpg"><span>Men's SS13 Fashion Trend: Stripes</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li jcarouselindex="2" style="float: left; list-style: none; width: 300px;" class="popularLists jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal">
                    <div class="blacktop left">
                        <h2>Comment nhiều nhất</h2>
                        <ul class="rhsNews">
                            <li>
                                <a href="http://www.fashionbeans.com/2013/mens-hair-trends-for-ss13/">
                                    <img alt="Men’s Hair Trends For Spring/Summer 2013" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/hairss13-150x75(1).jpg">
                                    <span>Men’s Hair Trends For Spring/Summer 2013</span>
                                </a>
                            </li>
                            <li><a href="http://www.fashionbeans.com/2013/mens-fashion-basics-vintage-shopping/"><img alt="Men’s Fashion Basics &ndash; Part 87 &ndash; Vintage Shopping" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/vintagemain3-150x75.jpg"><span>Men’s Fashion Basics &ndash; Part 87 &ndash; Vintage Shopping</span></a></li><li><a href="http://www.fashionbeans.com/2013/the-ultimate-streamlined-capsule-wardrobe/"><img alt="The Ultimate Streamlined Capsule Wardrobe" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/capsule-150x75.gif"><span>The Ultimate Streamlined Capsule Wardrobe</span></a></li><li><a href="http://www.fashionbeans.com/2013/mens-fashion-trend-tailored-shorts-suits/"><img alt="Men’s SS13 Fashion Trend: Tailored Shorts &amp; Shorts Suits" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/tailoredshorts-150x75.jpg"><span>Men’s SS13 Fashion Trend: Tailored Shorts &amp; Shorts Suits</span></a></li><li><a href="http://www.fashionbeans.com/2013/how-to-tell-if-youre-a-menswear-addict/"><img alt="How To Tell If You’re A Menswear Addict" src="./Men's Fashion Tips and Men's Style Guide  FashionBeans_files/menswearaddict-150x75.jpg"><span>How To Tell If You’re A Menswear Addict</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="popularControls"> 
        <span class="pop-prev">Previous</span>
        <a class="active" href="http://www.fashionbeans.com/#">1</a> 
        <a class="inactive" href="http://www.fashionbeans.com/#">2</a> 
        <span class="pop-next">Next</span>
    </div>
</div>
<div class="break"></div>


    <div class="cpmAdapt right">
        
    </div>
    <div class="break"></div>
  
    <div class="left maincolumn twentyTop">
        <div class="blacktop"><h2>The Latest Fashion &amp; Style Articles</h2></div>
        <div class="home-twoColumn left">
            <a href="http://www.fashionbeans.com/2013/five-independent-brands-you-should-know/">
                <img width="325" height="160" alt="Five Independent Menswear Brands You Should Know" src="http://static3.fashionbeans.com/wp-content/uploads/2013/03/PRIVATEMAIN2-500x251.jpg">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/collections/">Fashion Clothing Collections</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/five-independent-brands-you-should-know/">Five Independent Menswear Brands You Should Know</a>
            </h3> 
            <span class="previewText">We showcase five of our favourite independent menswear brands. These five labels are producing high quality, unique clothing for men that will help your style stand out effortlessly from crowd. Broaden...</span>
        </div>
        <div class="home-twoColumn farRight left">
            <a href="http://www.fashionbeans.com/2013/the-ultimate-streamlined-capsule-wardrobe/">
                <img width="325" height="160" alt="The Ultimate Streamlined Capsule Wardrobe" src="http://static3.fashionbeans.com/wp-content/uploads/2013/03/capsule-500x251.gif">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/mens-style/">Men's Style</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/the-ultimate-streamlined-capsule-wardrobe/">The Ultimate Streamlined Capsule Wardrobe</a>
            </h3>
            <span class="previewText">We bring you the definitive list of items that should be in every man's capsule wardrobe. This streamlined collection of basics, formal wear and casual wear will ensure that you always look great, no...</span>
        </div>
        <div class="home-twoColumn left">
            <a href="http://www.fashionbeans.com/2013/how-to-tell-if-youre-a-menswear-addict/">
                <img width="325" height="160" alt="How To Tell If You’re A Menswear Addict" src="http://static3.fashionbeans.com/wp-content/uploads/2013/03/menswearaddict-500x251.jpg"></a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/mens-style/">Men's Style</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/how-to-tell-if-youre-a-menswear-addict/">How To Tell If You’re A Menswear Addict</a></h3> <span class="previewText">We breakdown five tell tale signs that you are addicted to men's fashion and style. If any of these characteristics have started to infiltrate your behaviour then you have a problem. A very stylish problem...</span></div><div class="home-twoColumn farRight left"><a href="http://www.fashionbeans.com/2013/ss13-colour-trend-orange/">
                        <img width="325" height="160" alt="Men’s SS13 Colour Trend: Orange" src="http://static2.fashionbeans.com/wp-content/uploads/2013/03/ORANGEMAIN3-500x251.jpg">
                    </a>
                    <a class="the-category" href="http://www.fashionbeans.com/category/mens-fashion-trends/">Men's Fashion Trends</a><h3><a href="http://www.fashionbeans.com/2013/ss13-colour-trend-orange/">Men’s SS13 Colour Trend: Orange</a>
                    </h3> 
                    <span class="previewText">The colour orange is set to become a major colour trend for men this spring/summer 2013. Seen on both the high fashion runways and in recent high street collections, we show you how to wear orange in...</span>
                </div>
        <div class="home-twoColumn left">
            <a href="http://www.fashionbeans.com/2013/how-to-look-good-on-campus/">
                <img width="325" height="160" alt="How To Look Good: On Campus" src="http://static2.fashionbeans.com/wp-content/uploads/2013/03/campus-500x251.jpg"></a> <a class="the-category" href="http://www.fashionbeans.com/category/mens-fashion-guides/">Men's Fashion Guides</a><h3><a href="http://www.fashionbeans.com/2013/how-to-look-good-on-campus/">How To Look Good: On Campus</a></h3> <span class="previewText">A guide to looking well dressed on your university or college campus. Students are often some of the worst dressed men on the planet but our guide will have you looking your stylish best on a shoe-string...</span></div><div class="home-twoColumn farRight left"><a href="http://www.fashionbeans.com/2013/topman-lux/"><img width="325" height="160" alt="Topman Lux Collection" src="http://static4.fashionbeans.com/wp-content/uploads/2013/01/luxheader-500x251.jpg"></a> <a class="the-category" href="http://www.fashionbeans.com/category/collections/">Fashion Clothing Collections</a><h3><a href="http://www.fashionbeans.com/2013/topman-lux/">Topman Lux Collection</a></h3> <span class="previewText">Topman have recently launched the Lux collection &ndash; an assortment of high-end menswear intended to create clean, elegant and sophisticated evening looks with a signature Topman edge. Blending the finest...</span>
        </div>
    </div>
   <div class="sidebar right twentyTop">
       <div class="blacktop">           
           <span class="blackHeaderBox"><h2>Quảng cáo</h2></span>
       </div>
       <ul class="sponsorsRHS">
           <li><a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/uo125ad">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/new/ads/125uosalestatic.gif">
               </a>
           </li>
           <li class="nomargin">
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/pockets">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/new/ads/125pocketsfeb.jpg">
               </a>
           </li>
           <li>
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/gagliardiads">
                   <img class="adpicture" src="http://static4.fashionbeans.com/resources/images/new/ads/125gagss13.jpg">
               </a>
           </li>
           <li class="nomargin">
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/mywardrobeads">
                   <img src="http://static3.fashionbeans.com/resources/images/ads/125mywardrobesale12.jpg">
               </a>
           </li>
           <li>
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/nivenjoshuaads">
                   <img src="http://static3.fashionbeans.com/resources/images/new/ads/125nivenjan13.jpg">
               </a>
           </li>
           <li class="nomargin">
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/jacksgroomingad">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/ads/125jacksgrooming.jpg">
               </a>
           </li>
           <li>
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/northskull">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/new/ads/125northskull.jpg">
               </a>
           </li>
           <li class="nomargin"><a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/einhornads">
                   <img alt="Stephen Einhorn Custom Mens Jewellery" class="adpicture" src="http://static2.fashionbeans.com/resources/images/new/ads/125seapril13.jpg">
               </a>
           </li>
           <li>
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/mossads">
                   <img src="http://static3.fashionbeans.com/resources/images/new/ads/125mossfeb.jpg">
               </a>
           </li>
           <li class="nomargin">
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/stampedeads">
                   <img src="http://static3.fashionbeans.com/resources/images/new/ads/125stampede.jpg">
               </a>
           </li>
           <li>
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/myprotein">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/ads/125myproteinjuly.jpg">
               </a>
           </li>
           <li class="nomargin">
               <a rel="nofollow" target="_blank" href="http://out.fashionbeans.com/americanapparelhoodies">
                   <img class="adpicture" src="http://static1.fashionbeans.com/resources/images/new/ads/125aahoodies.jpg">
               </a>
           </li>
       </ul>
   </div> 
    <!-- LÀM ĐẸP -->
    <div class="left maincolumn twentyTop">
        <div class="blacktop">
            <h2>Mới nhất: In Men's Grooming &amp; Hair</h2>
        </div>
        <div class="home-twoColumn left">
            <a href="http://www.fashionbeans.com/2013/mens-grooming-the-benefits-of-using-a-face-scrub/">
                <img width="325" height="160" alt="Men’s Grooming: The Benefits Of Using A Face Scrub" src="http://static4.fashionbeans.com/wp-content/uploads/2013/03/scrub-500x251.jpg">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/male-grooming/">Men's Grooming Tips &amp; Male Grooming</a>
            <h3><a href="http://www.fashionbeans.com/2013/mens-grooming-the-benefits-of-using-a-face-scrub/">Men’s Grooming: The Benefits Of Using A Face Scrub</a></h3> 
            <span class="previewText">We breakdown the benefits that an exfoliating face scrub can provide your skin. Used 2 - 3 times a week a face scrub can help remove dirt &amp; grime, prevent spots, improve your shave, ensure flake-free...</span>
        </div>
        <div class="home-twoColumn farRight left">
            <a href="http://www.fashionbeans.com/2013/picking-a-new-hairstyle/">
                <img width="325" height="160" alt="Picking A New Men’s Hairstyle" src="http://static4.fashionbeans.com/wp-content/uploads/2013/03/hairmain2-500x251.jpg">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/mens-hairstyles/">Men's Hair Styles</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/picking-a-new-hairstyle/">Picking A New Men’s Hairstyle</a>
            </h3> 
            <span class="previewText">Picking a new men's hairstyle can be a daunting task as you need to consider multiple factors such as your job, budget, lifestyle, personal style and hair type. We break it down into easy to follow steps...</span>
        </div>
        <div class="home-twoColumn left">
            <a href="http://www.fashionbeans.com/2013/mens-hair-trends-for-ss13/">
                <img width="325" height="160" alt="Men’s Hair Trends For Spring/Summer 2013" src="http://static1.fashionbeans.com/wp-content/uploads/2013/02/hairss13-500x251.jpg">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/mens-hairstyles/">Men's Hair Styles</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/mens-hair-trends-for-ss13/">Men’s Hair Trends For Spring/Summer 2013</a>
            </h3>
            <span class="previewText">We breakdown the 2 key men's hairstyles for spring/summer 2013. The slick side parting and longer, textured haircuts are the key men's hair trends for the season - see how to get the look, what to ask...</span>
        </div>
        <div class="home-twoColumn farRight left">
            <a href="http://www.fashionbeans.com/2013/mens-grooming-maintaining-stubble/">
                <img width="325" height="160" alt="Men’s Grooming: Maintaining Stubble" src="http://static4.fashionbeans.com/wp-content/uploads/2013/01/stubble-500x251.jpg">
            </a> 
            <a class="the-category" href="http://www.fashionbeans.com/category/male-grooming/">Men's Grooming Tips &amp; Male Grooming</a>
            <h3>
                <a href="http://www.fashionbeans.com/2013/mens-grooming-maintaining-stubble/">Men’s Grooming: Maintaining Stubble</a>
            </h3> 
            <span class="previewText">Gone are the days when clean shaven was the only way to look well groomed. Some of the most stylish &amp; sophisticated men on the planet are adopting a more rugged approach to facial hair, &amp; from bar to...</span>
        </div>
    </div>
    
<!-- CATEGORY TIN TỨC -->  

<?php $cat_id = 9;?>    
    <div class="sidebar right twentyTop">
        <div class="blacktop">
            <h2><a href="<?php echo get_category_link($cat_id) ?>"><?php echo get_cat_name($cat_id) ?></a></h2>
        </div>
        
<?php
    $home_news = get_posts('numberposts=5&category='.$cat_id);
    $index = 0;
    foreach($home_news as $post) : setup_postdata($post);
?>
        <?php if($index > 0) { ?>
        <div class="homeNewsOutline fitnessHome">
        <?php } else { ?>
        <div style="margin:15px 0 0 0;width:300px;" class="homeNewsOutline">
        <?php } ?>
            <div class="homeNews">
                <a href="<?php the_permalink() ?>">
                    <span class="imageHolder">
                         <?php the_post_thumbnail(array(100,100)); ?> 
                    </span> 
                    <span class="articleTitle fitnessTitle"><?php the_title() ?></span>
                    <span class="previewText"><?php the_excerpt_max_charlength(100); ?></span>
                </a>
                <div class="break"></div>                
            </div>            
        </div>
<?php $index++; endforeach; ?>
    </div>

    <div class="break"></div>
    
<!-- END CATEGORY TIN TỨC -->    
    
<?php get_footer();?>