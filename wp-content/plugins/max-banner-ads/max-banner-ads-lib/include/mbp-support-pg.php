<script>
function openit(){
	var curr = document.getElementById('openit');
	var curr2 = document.getElementById('closeit');
	if ( curr.style.display == 'none' ) {
		curr.style.display = 'block';
	} else if ( curr.style.display == 'block' ) {
		curr.style.display = 'none';
	}
	
	curr2.style.display = 'none';
}
function closeit(){
	var curr = document.getElementById('openit');
	var curr2 = document.getElementById('closeit');
	if ( curr.style.display == 'block' ) {
		curr.style.display = 'none';
	}
	curr2.style.display = 'block';
}
</script>
<?php
global $current_user;
?>	
<!--	<table cellspacing="1" cellpadding="1" width="100%" border="0" style="border:1px solid #CCCCCC;margin-top:5px;">
	  <tr>
	    <td valign="top" style="background-color:#FFFEEB" >
		  <div style="padding:5px 2px 5px 15px " >
		   <small style="font-size:xx-small">
		   <strong>If you find this plugin useful then we'll appreciate a review post for this plugin in your blog.</strong> <div align="right"><a style="cursor:pointer" onclick="openit()" id="closeit"><strong>Read more..</strong></a></div><br> <span id="openit" style="display:none;">This will help lots of other people know about the plugin and get benefited by it. You can even earn by spreading the word for this plugin. <a href="http://www.maxblogpress.com/affiliates/" target="_blank" style="text-decoration:none">Learn More...</a> <div><br> Thanking you, <br><br> <strong>MaxBlogPress Team</strong></div>  <div id="finalclose" align="right"><a  style="cursor:pointer" onclick="closeit()" ><strong>Close</strong></a></div></span> 
		    </small>
		  </div>
	    </td>
	  </tr>
</table>
<br>-->
	<table cellspacing="3" cellpadding="5" width="100%" border="0" style="border:1px solid #C3D9FF">
	  <tr>
	    <td valign="top" style="background-color:#e8eefa" >
		   <div style="padding:5px 0px 0px 15px "><strong>Help</strong></div>
		  <div style="padding:5px 2px 5px 15px " >
			<ul>
				<li><a href="http://wiki.maxblogpress.com/Max_Banner_Ads" target="_blank"  style="text-decoration:none">How to use it?</a></li>
				<li><a href="http://wiki.maxblogpress.com/Max_Banner_Ads" target="_blank"  style="text-decoration:none">Online Documentation</a></li>
				<li><a href="http://community.maxblogpress.com" target="_blank"  style="text-decoration:none">Community</a></li>
			</ul>
		  </div>
		<div style="padding:10px 0px 0px 15px"><strong>MaxBlogPress Products</strong></div>
			<div style="padding:5px 2px 5px 15px">
<ul>
<a href="http://bringmyblogvisitorsback.com/" style="text-decoration:none" target="_blank">MaxBlogPress Bring My Blog Visitors Back</a>
		<li><a href="http://www.maxblogpress.com/subscribersmagnet/" style="text-decoration:none" target="_blank">MaxBlogPress Subscribers Magnet</a></li>
	  <li><a href="http://www.mbpninjaaffiliate.com/" target="_blank" style="text-decoration:none">MaxBlogPress Ninja Affiliate</a></li>
	  <li><a href="http://www.maxblogpress.com/wordpresswizard20/" target="_blank" style="text-decoration:none">Wordpress Wizard 2.0</a></li>
  </ul>
			</div>			
		<div style="padding:10px 0px 0px 15px"><strong>Get Connected With MaxBlogPress</strong></div>
			<div style="padding:5px 2px 5px 15px">
				<ul>
				  <li><a href="http://www.maxblogpress.com/facebook" target="_blank" style="text-decoration:none"><img src="<?php echo MBAN_FULLPATH;?>facebook_icon.jpg" width="20" height="20" />&nbsp;Facebook</a></li>
				  <li><a href="http://www.maxblogpress.com/twitter" target="_blank" style="text-decoration:none"><img src="<?php echo MBAN_FULLPATH;?>TwitterIcon.png" width="20" height="20" />&nbsp;Twitter</a></li>
				</ul>
		  </div>			
	    </td>
	  </tr>
</table>