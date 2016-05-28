<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<link rel="canonical" href="<?php echo $canonical; ?>" />
	<link href="<?php echo $styles ?>" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="<?php echo $favicon ?>" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $script ?>"></script>
   <?php if ($canonical != 'http://www.signupandmakemoney.com/traffic/') {
  
  echo ' <script type="text/javascript">
    	// sticky

$(function(){ // document ready
 
  var stickyTop1 = $(".ad1").offset().top; // returns number
  var stickyTop2 = $(".ad2").offset().top; // returns number
  
  var el1 = $(".ad1");
  var el2 = $(".ad2");
  var stickyTop1Height = $(".ad1").height();
  var stickyTop2Height = $(".ad2").height();

 
  $(window).scroll(function(){ // scroll event 

var limit1 = $("#footer").offset().top - stickyTop1Height - 20;
var limit2 = $("#footer").offset().top - stickyTop2Height - 20;
 
    var windowTop = $(window).scrollTop(); // returns number
 
    if (stickyTop1 < windowTop) {
      $(".ad1").css({ position: "fixed", top: 0 });
    }
    else {
      $(".ad1").css("position","static");
    }
    if (stickyTop2 < windowTop) {
      $(".ad2").css({ position: "fixed", top: 0 });
    }
    else {
      $(".ad2").css("position","static");
    }
    if (limit1 < windowTop) {
          var diff = limit1 - windowTop + -20;
          el1.css({top: diff});
          }
    if (limit2 < windowTop) {
          var diff = limit2 - windowTop + -20;
          el2.css({top: diff});
          }
 
  });
 
});
    </script>'; } ?>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=218261441523608";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="top">
<table style="margin: 0 auto;"><tr><td width="630px">
<div class="navtop">
  <ul> 
    <li><a href="<?php echo URL ?>">Bonuses</a></li> 
    <li><a href="<?php echo URL ?>site/affiliates/login.php">Affiliates</a></li> 
    <li><a href="<?php echo URL ?>blog/">Blog</a></li>
    <li class="currentp"><a href="<?php echo URL ?>traffic/">Traffic</a></li>
    <li><a href="<?php echo URL ?>affiliate-tips/">Tips</a></li>
  </ul> </div></td><td width="330px">
  <div class="search">
	<form action="http://www.signupandmakemoney.com/google-search/" id="cse-search-box">
    <input type="hidden" name="cx" value="partner-pub-0372492470050030:5vvp50-qsag" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="30" />
    <!-- input type="submit" name="sa" value="Search" / -->
</form>
<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&amp;lang=en"></script>
</div>	
</td>
</tr>
</table>
</div>
<div id="wrapper">
<table width="100%" border="0" cellspacing="2" cellpadding="2" summary="table for header">
  <tr>
    <td class="header"><a href="http://www.signupandmakemoney.com/" style="background:none;"><img src="<?php echo URL ?>Assets/signupandmakemoney-logo-lg.jpg" border="0" alt="Signupandmakemoney Logo" title="Signupandmakemoney." width="300" height="67" /></a></td>
    <td class="banner_right">
    
    <?php include ('hbanner.php'); ?>  
    
    </td>
  </tr>
</table>
<div id="tophmenu"></div>
<div id="hmenu">
<ul>
	<li><a href="<?php echo URL ?>traffic/traffic-exchanges.html" title="Traffic Exchanges.">Exchanges</a></li>
    <li><a href="<?php echo URL ?>traffic/advertising-resources.html" title="Traffic Resources.">Resources</a></li>
    <li><a href="<?php echo URL ?>traffic/pay-per-click-sites.html" title="Pay Per Click Sites.">PPC</a></li>
    <li><a href="<?php echo URL ?>traffic/downline-builders.html">Downline Builders</a></li>
    <li><a href="<?php echo URL ?>traffic/search-engine-optimization.html" title="Search Engine Optimization.">SEO</a></li>
</ul>
</div>
<div id="content">
<script type="text/javascript"><!--
ch_client = "signupandmakemoney";
ch_type = "mpu";
ch_width = 728;
ch_height = 90;
ch_color_bg = "ffffff";
ch_color_border = "ffffff";
ch_color_title = "26a";
ch_color_site_link = "26a";
ch_color_text = "555";
ch_non_contextual = 4;
ch_vertical ="premium";
ch_sid = "Chitika Premium";
var ch_queries = new Array( );
var ch_selected=Math.floor((Math.random()*ch_queries.length));
if ( ch_selected < ch_queries.length ) {
ch_query = ch_queries[ch_selected];
}
//--></script>
<script  src="http://scripts.chitika.net/eminimalls/amm.js" type="text/javascript">
</script>
