<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<link rel="stylesheet" media="all" type="text/css" href="css/main.css"/>
		<link rel="Shortcut Icon" href="images/favicon.ico" type="image/x-icon"/>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<script type="text/javascript" src="js/jquery.js"></script>	
		<script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.core.js"></script>
		<script src="http://dev.jquery.com/view/tags/ui/latest/ui/effects.scale.js"></script>	
		<script type="text/javascript" src="js/cycle.js"></script>
		<meta name="robots" content="index, follow"/>
		<meta name="author" content="Joe Geraghty"/>
    	
		<title>Kate Carmack Photography | Galleries | <?php echo ucfirst($location); ?> </title>
		<script type="text/javascript">
		  // When the document loads do everything inside here ...
			 $(document).ready(function(){
				 var numImg=0
				 loadImages(numImg);
				 $(".image1").removeClass("hide").addClass("centerpic");
				 $("img.images1").removeClass("hide").removeClass("black").addClass("keep");
					});
		
			loadImages = function(start){
			var viewControlId="blackImg";
				var viewControlHtml = [];
				var largeId="largepic";
				var largeHtml = [];
				var eventDiv;
				
				 $("img.black").click(function() { //start function when any link is clicked
							//alert("testing");
					var filterPic = $(this).attr("title");
					$(".keep").addClass("black");
					$(this).removeClass("black").fadeIn("fast");
					$(this).addClass("keep");
					//alert(filterPic);
					//$(".centerpic").removeClass("centerpic").addClass("hide");
					//$("." + filterPic).removeClass("hide").addClass("centerpic");
					//$(".centerpic").hide().removeClass("centerpic");
					//$("." + filterPic).addClass("centerpic").show("scale", {}, 1000);
					$(".centerpic").fadeOut("slow",  function(){
							$(".centerpic").removeClass("centerpic");
							$("." + filterPic).addClass("centerpic").fadeIn("slow");
							});
				});
				 $("div.blackdiv").mouseover(function() { //start function when any link is hovered over
					var filterPic = $(this).attr("title");
					//alert(filterPic);
					$(".black").addClass("hide");
					$("." + filterPic).removeClass("hide");
				});
				$("div.blackdiv").mouseout(function() { //start function when any link is hovered over
					$(".black").addClass("hide");
				});
			}
		
		</script>

</head>

<body>
<div id="container">
	<div id="header">
	<a href="index.html"><img class="smalllogo" src="images/SMALLLOGO.png" alt="Kate Carmack Photography"/></a>
	</div>
	
	<div id="menusub">
    	<ul class="menusub">
        	 <li><a href="about.html"><img src="images/about.png" alt="About"/></a></li>
             <li class="galleryDropdown"><a href="#"><img src="images/galleries.png" alt="Galleries"/></a>
                <ul class="gallery">
                    <li><a href="galleries.php?gallery=portraits">Portraits</a></li>
                    <li><a href="galleries.php?gallery=outdoors">Outdoors</a></li>
                    <li><a href="galleries.php?gallery=engagements">Engagements</a></li>
                    <li><a href="galleries.php?gallery=weddings">Weddings</a></li>
                    <li class="bottomLI"><a href="galleries.php?gallery=travel">Travel</a></li>
                </ul>
            </li>
            <li class="rightsub"><a href="photoblog/"><img src="images/blog.png" alt="Blog"/></a></li>
            <li><a href="contact.html"><img src="images/contact.png" alt="Contact"/></a></li>
        </ul>
    
    </div>

	<div id="content">
	
	<div id="blackImg">
    <?php
	foreach($thumbs as $pics){
		echo $pics;
	}
	?>
	
	</div>
	<div id="largepic">
    <?php
	foreach($bigpics as $pics){
		echo $pics;
	}
	?>
	</div>
	
	<div id="clear">
	</div>
    
    </div>
    
    <div id="bottomframe">
    </div>

</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6586758-2");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>