// Drop Down Menus with Hover Intent
function dropdownMenus(){

    var config = {    
         sensitivity: 3, // number = sensitivity threshold (must be 1 or higher)    
         interval: 100,  // number = milliseconds for onMouseOver polling interval    
         over: doOpen,   // function = onMouseOver callback (REQUIRED)    
         timeout: 200,   // number = milliseconds delay before onMouseOut    
         out: doClose    // function = onMouseOut callback (REQUIRED)    
    };
    
    function doOpen() {
        $(this).addClass("hover");
        $('div.multi_menu',this).css('visibility', 'visible');
        var p = jQuery(this).position();
        $('.multi_menu',this).css('left',-p.left+15+'px');
        $('.arrow_menu',this).css('left',p.left-15+'px');
    }
 
    function doClose() {
        $(this).removeClass("hover");
        $('div.multi_menu',this).css('visibility', 'hidden');
    }

    $("ul.topnavnew li").hoverIntent(config);
    
};

//For iPad Sliding of Carousels
function touchwipe(carousel) {
	
	jQuery(carousel).touchwipe({
         wipeLeft: function(e) {
            e.preventDefault();
            jQuery(carousel).jcarousel('next');
        },
        wipeRight: function(e) {
			e.preventDefault();
            jQuery(carousel).jcarousel('prev');
        },
		preventDefaultEvents: false
    });
	
};

//MAIN ARTICLE SCROLLERS
//articleScroller() = initiates the main feature article scroller
//nexslide() = animates the slide to fade in and out so ipad scrolling doesn't lag
//articlecarousel_initCallback() = the callback that makes the direction arrows come on with hover, adds the squares navigation etc.
function articleScroller() {
	
	jQuery('.featuredScroller').jcarousel({
		scroll: 1, animation:600, visible:1, auto:4, wrap:'both',
		initCallback: articlecarousel_initCallback,
		itemVisibleInCallback: { onAfterAnimation: nexslide }
		
	});  		
	
};

function nexslide(c, o, i, s) {
	i = (i - 1) % $('.featuredScroller li').size();
				
	//The scroller navigation buttons
    jQuery('.scrollerControls a').removeClass('active').addClass('inactive');				
	jQuery('.scrollerControls a:eq(' + i + ')').removeClass('inactive').addClass('active');
				
	jQuery('div.featuredInfo').hide();			
	jQuery('div.featuredInfo:eq(' + i + ')').fadeIn(1000);				
};

function articlecarousel_initCallback(carousel) {
	
	//Set direction as zero
	var direction = '';
	
	$('.featuredScroller').mouseenter(function(){
		direction = 'out';
		next_prev(direction);
	});
	
	$('.featuredScroller').mouseleave(function(){
		direction = 'in'
		next_prev(direction);
	});
		
	function next_prev(){
		if(direction == 'out')
		{
			$('.featuredScroller .jcarousel-next-horizontal').css({'top':'135px', 'display':'none'}).fadeIn(300);
			$('.featuredScroller .jcarousel-prev-horizontal').css({'top':'135px','display':'none'}).fadeIn(300);
		} else {
			$('.featuredScroller .jcarousel-next-horizontal').fadeOut(300);
			$('.featuredScroller .jcarousel-prev-horizontal').fadeOut(300);
		}		
	}

    jQuery('.scrollerControls a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });
			
	// Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
    	carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
	
};

//ARTICLES SCROLLER
function scroller(theClass, theCallback, scrollAmount, wrapStyle, visibleSlides, afterAnimation) {
		
	jQuery(theClass).jcarousel({
		scroll: scrollAmount,
		wrap: wrapStyle,		
		animation: 600, 
		visible: visibleSlides,				
        initCallback: theCallback,								
        buttonNextHTML: null,
		buttonPrevHTML: null,			
		itemVisibleInCallback: { onAfterAnimation: afterAnimation }				
	}); 	
	
};

//After animation callback for the popular posts scroller
function popSlide(c, o, i, s) {
	i = (i - 1) % $('.popularLists li').size();
    jQuery('.popularControls a').removeClass('active').addClass('inactive');
    jQuery('.popularControls a:eq(' + i + ')').removeClass('inactive').addClass('active');
}

//Trending Articles Scroller Initial Callback Functions
function popularpost_callback(carousel) {
	  
	jQuery('.popularControls a').bind('click', function() {
		carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
		return false;
	});
			
	jQuery('.pop-next').bind('click', function() {
		carousel.next();
		return false;
	});

    jQuery('.pop-prev').bind('click', function() {
		carousel.prev();
		return false;
	});	
	  
};
 
//FBTV Homepage Scroller Callback Functions
function buttons_callback(carousel) {
			
	jQuery('.arrow-next').bind('click', function() {
		carousel.next();
		return false;
	});

    jQuery('.arrow-prev').bind('click', function() {
		carousel.prev();
		return false;
	});	
	  
};

//LOOKBOOK SCROLLER CALLBACK FUNCTIONS
function lookbooks_callback(carousel) {
	
	jQuery('#lookbook-next').bind('click', function() {
            carousel.next();
            return false;
        });
    
        jQuery('#lookbook-prev').bind('click', function() {
            carousel.prev();
            return false;
        });
		
};

//COLOURBOX - Load Larger Lookbook Images In A Lightbox On Same Page
function enlargeLookbook(enlargetype, itemwidth, itemheight) {

if (enlargetype == "iframe") {
jQuery(".iframe").colorbox({iframe:true, width:itemwidth, height:itemheight});
}
else if (enlargetype == "hairstyles") {
jQuery(".enlarge").colorbox({width:"600px"});	
}
else {
jQuery(".enlarge").colorbox({rel:"enlarge", width:itemwidth, height:itemheight});
}

};

function filters() {

	jQuery(".openFilters").click(function () {
		if (jQuery(".filterOptions").is(":hidden")) {		
			jQuery(".filterOptions").slideDown(600);
			jQuery(".openFilters").css("background-position", "0 -33px");
		} else {
			jQuery(".filterOptions").slideUp(600);
			jQuery(".openFilters").css("background-position", "0 8px");
		}
	});
	
	jQuery(".closeFilters").click(function () {
			jQuery(".filterOptions").slideUp(600);
			jQuery(".openFilters").css("background-position", "0 8px");		
	});

}

//TOOLTIPS - SITE NAV BAR, SOCIAL STUFF & ARTICLE LOOKBOOKS
function tooltips() {
	
	jQuery("area[alt]").qtip(
	{
		content: {
			attr: "alt" // Use the ALT attribute of the area map for the content
		},
		style: {
			classes: "ui-tooltip-lookbooks ui-tooltip-shadow" //Style For The Tooltip
		},
		position:{
			at:"right top",my:"left center",viewport:$(window),effect:false,adjust:{x:-20, y:100} //Set and slightly adjust position of tooltip
		}
	});
	
	
	jQuery('.sitelinks a[title]').qtip(
	{ 
		content: {
			attr: "title" // Use the ALT attribute of the area map for the content
		},
		style: {
			classes: "ui-tooltip-sitebar ui-tooltip-shadow", width: "200px",
			tip: {				
					mimic: 'top center',
					width:12,
					height:5,
					offset:30				
				}
		},
		position:{
			at:"left bottom",my:"top left",viewport:$(window),effect:false,adjust:{x:20, y:-4} //Set and slightly adjust position of tooltip
		}		
	});
	
	
	jQuery('.streetStyle li img').each(function() {
		var thumb = jQuery(this).attr('src'), full, content;

		// Create the fullsize image with a link
		content = jQuery('<a />', { 
			href: jQuery(this).parent().attr('href'),			
		})
		.append( jQuery('<img />', { src: thumb }) );
		
		// Create the tooltip
		jQuery(this).qtip({
			content: {
				text: content,
				title: {
					text: jQuery(this).attr('alt') // Use the image ALT text for the title
				}
			},
			position: {
				my: 'center',
				at: 'center',
				viewport: $(window)
			},
			hide: {
				fixed: true
			},
			style: {
				classes: "ui-tooltip-sitebar ui-tooltip-shadow"
			}
		});
	});
	
	
}; 

//STREET STYLE PAGES - SWITCH MAIN IMAGE WHEN CLIcK THUMBNAILS
function streetGallery() {
	
	jQuery(".gallery-thumb").click(function(){
			jQuery("#image").attr("src",jQuery(this).attr("href")).width(jQuery(".zoomImage").width()).css({"left":0,"top":0});
			jQuery("#handle").css("left",0);
			return false;
	});	
	
};


//READ MORE TEXT - FOR PAGES SUCH AS FBTV DESCRIPTIONS
function moreText() {

if ( $(".lookbookCPM").height() < 500 ) {
	$(".videoContent").css('width', '100%');
}

	// The height of the content block when it's not expanded
	var adjustheight = 125;
	// The "more" link text
	var moreText = "Show More Description";
	// The "less" link text
	var lessText = "Show Less Description";
	
	//Test if the more block is taller than the adjust height first - otherwise no point
	if ($(".more-block").height() > adjustheight) {
		
		// Sets the .more-block div to the specified height and hides any content that overflows
		$(".more-less .more-block").css('height', adjustheight).css('overflow', 'hidden');
		
		// The section added to the bottom of the "more-less" div
		$(".more-less").append('<a href="#" class="adjust"></a>');
		
		$("a.adjust").text(moreText);
		
		$(".adjust").toggle(function() {
				$(this).parents("div:first").find(".more-block").css('height', 'auto').css('overflow', 'visible');
				// Hide the [...] when expanded
				$(this).parents("div:first").find("p.continued").css('display', 'none');
				$(this).text(lessText);
			}, function() {
				$(this).parents("div:first").find(".more-block").css('height', adjustheight).css('overflow', 'hidden');
				$(this).parents("div:first").find("p.continued").css('display', 'block');
				$(this).text(moreText);
		});
	
	}; //End initial more-block height test

};


//JQUERY VALIDATE - VALIDATE FORMS AND INPUTS ON THE SITE
function validateForms(validationClass) {
	
	jQuery(validationClass).validate();
	
};