<?php

include('../includes/settings.php');

$title = 'Watch the Secret Formula Webinar that will change your life!';
$description = 'This webinar will change the way your think about making money online.';
$keywords = 'secret webinar';
$script = SCRIPT2;
$footer = 'Webinar showing how to make big money online selling big ticket items.';
$styles = '../styles.css';
$favicon = '../Assets/transparent.ico';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<link rel="canonical" href="<?php echo $canonical; ?>" />
	<link href="../styles.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="../Assets/transparent.ico" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="../Assets/js/scripts.js"></script>

    <script type="text/javascript">

    $(function(){ // document ready

      var stickyTop1 = $('.ad1').offset().top; // returns number
      var stickyTop2 = $('.ad2').offset().top; // returns number

      var el1 = $('.ad1');
      var el2 = $('.ad2');
      var stickyTop1Height = $('.ad1').height();
      var stickyTop2Height = $('.ad2').height();

    $(window).scroll(function(){ // scroll event 

      var limit1 = $('#footer').offset().top - stickyTop1Height - 20;
      var limit2 = $('#footer').offset().top - stickyTop2Height - 20;
      var windowTop = $(window).scrollTop(); // returns number

    if (stickyTop1 < windowTop) {

      $('.ad1').css({ position: 'fixed', top: 0 });

    }

    else {

      $('.ad1').css('position','static');

    }

    if (stickyTop2 < windowTop) {

      $('.ad2').css({ position: 'fixed', top: 0 });

    }

    else {

      $('.ad2').css('position','static');

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

</script>

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
    <li><a href="<?php echo URL ?>forum/">Forum</a></li> 
    <li><a href="<?php echo URL ?>blog/">Blog</a></li>
    <li><a href="<?php echo URL ?>traffic/">Traffic</a></li>
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

    <td class="header"><a href="http://www.signupandmakemoney.com/" style="background:none;">
      <img src="<?php echo URL ?>Assets/signupandmakemoney-logo-lg.jpg" border="0" alt="Signupandmakemoney Logo" 
      title="Signupandmakemoney." style="background:none;" width="300" height="67" /></a></td>

    <td class="banner_right"> 

    <?php include ('../includes/hbanner.php'); ?> 

    </td>

  </tr>

</table>

<div id="tophmenu"></div>

<div id="hmenu">

<ul>

	<li><a href="<?php echo URL ?>contact/">Contact</a></li>
	<li><a href="<?php echo URL ?>info/faq.html">FAQ</a></li>
	<li><a href="<?php echo URL ?>info/signupandmakemoney-instructions.html">Instructions</a></li>
  <li><a href="<?php echo URL ?>info/earnings-disclaimer.html">Disclaimer</a></li>
  <li><a href="<?php echo URL ?>info/privacy-policy.html">Privacy</a></li>
  <li><a href="<?php echo URL ?>sitemap.html">Sitemap</a></li>

</ul>

</div>
</div>

<div align="center">
<div id="loadingDiv"><img src="<?php echo URL ?>Assets/loading.gif" /></div>
<div class="message"></div>
<form method="POST" action="submit.php" class="webinar">
  <table border="0" class="webinarTable">
    <tr>
      <td colspan="6">
        <h1 class="webinarHeader">Fill out this form to be contacted about how to get started.</h1>
        <!-- Note: form action was: http://secretformulawebinar.net/getcd.php is was: id="mainForm" -->
      </td>
    </tr>
    <tr>
      <td width="16%" class="webinarTd">
        <input type="text" name="fname" value="Name" id="fname" onfocus="if (this.value == 'Name') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Name';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="email" value="Email" id="email" onfocus="if (this.value == 'Email') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Email';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="phone" value="Phone" id="phone" onfocus="if (this.value == 'Phone') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Phone';}">
      </td>
      <td width="16%" class="webinarTd">
        <input type="text" name="norobot" id="norobot" value="Enter Captcha" onfocus="if (this.value == 'Enter Captcha') {this.value = '';}" 
              onblur="if (this.value == '') {this.value = 'Enter Captcha';}" />
        </td>
        <td width="12%" class="webinarTd">
          <img src="../captcha.php" style="padding:10px;" />
        </td>
      <td width="8%">
        <!-- past form hidden fields...
        <input type="hidden" name="redirect" value="http://www.signupandmakemoney.com/webinar/thanks.php">
        <input type="hidden" name="group" value="1">
        <input type="hidden" name="id" value="1880">
        <input type="hidden" name="type" value="1">
        <input type="hidden" name="spage" value="htmlcode">
        -->
        <input type="submit" name="submit" id="submit" value="Submit">
      </td>
    </tr>
    <tr>
      <td width="16%"><p id="nameError" class="errors"></p></td>
      <td width="16%"><p id="emailError" class="errors"></p></td>
      <td width="16%"><p id="phoneError" class="errors"></p></td>
      <td width="16%"><p id="robotError" class="errors"></p></td>
      <td width="12%"></td>
      <td width="8%"></td>
    </tr>
  </table>
</form>
<br><br>
  <iframe src="http://secretformulawebinar.net/landingpage1.php?user=signupmoney" style="width: 1100px; height: 1350px"></iframe>

</div> 

   <br /><br />

<div id="footer"> 

<div id="footercontent">

<p align="center">

<?php 

$advert = array(); 

$advert[] = '<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank">
<img border="0" src="http://hits4pay.com/imgn/banners/728x90.png" width="728" height="90"></a>';
$advert[] = '<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense_gpt728x90a.png" border="0"></a>';
$advert[] = '<a href="http://www.sendearnings.com/?r=ref271274" target="_blank">
<img src="http://www.sendearnings.com/graphics/creative/banners/728x90/728x90_2.jpg" border="0" /></a>';
$advert[] = '<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank">
<img src="http://www.inboxdollars.com/graphics/creative/banners/728x90/728x90_1.gif" border="0" /></a>';
$advert[] = '<a href="http://www.squishycash.com/homepage?ref=gdc25" target="_blank">
<img src="http://squishycash.com/images/banners/66.gif" width="728" height="90" border="0" /></a>';
$advert[] = '<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=118577&bid=1364207" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com">pay per click</a></noscript>';
$advert[] = '<a href="https://www.surveysavvy.com/?m=2450703" target="_blank">
<img src="http://www.signupandmakemoney.com/Assets/affiliate/surveysavvy-banner.jpg" border="0" alt="Survey Savvy" /></a>';

shuffle($advert); 

echo $advert[0];

?>

 <br /><br /><br /></p>  

    <table width="100%" border="0" cellspacing="2" cellpadding="5" summary="Table for footer.">

  <tr>

    <td colspan="2" class="whitespace"><div align="center" style="padding-left:30px;"><br />
      <a href="http://www.signupandmakemoney.com/blog/feed/" target="_blank" title="Subscribe to the Signupandmakemoney RSS feed!">
        <img src="<?php echo URL ?>Assets/rss-large.jpg" alt="Signupandmakemoney RSS feed." width="100" height="100" border="0" style="padding-right:20px;" /></a>
        <a href="https://www.facebook.com/signupmoney" target="_blank" title="Like us at Facebook!">
          <img src="<?php echo URL ?>Assets/facebook-large.png" alt="Like us on Facebook." width="100" height="100" border="0" style="padding-right:20px;" /></a>
          <a href="http://twitter.com/signupmakemoney" target="_blank" title="Follow us on Twitter!">

    <img src="<?php echo URL ?>Assets/Twitter-large.png" alt="Follow us on Twitter." width="100" height="100" border="0" style="padding-right:20px;" /></a>
    <a href="<?php echo URL ?>/site/affiliates/signup.php#SignupForm" title="Become a Signupandmakemoney affiliate.">
      <img src="<?php echo URL ?>/Assets/affiliate-icon.png" alt="Become a Signupandmakemoney affiliate." width="100" height="100" border="0" /></a>
      <br /><br /><br /><div class="fb-like" data-href="http://www.signupandmakemoney.com" data-send="true" data-width="450" data-show-faces="false"></div>

          <br /><br />

      <table align="center" cellpadding="8" cellspacing="30" border="0" width="600px"><tr><td><div align="center">   

    <div class="fb-like-box" data-href="https://www.facebook.com/signupmoney" data-colorscheme="light" data-show-faces="true" data-header="true" 
    data-stream="false" data-show-border="true"></div></div></td><td style="padding-left:15px;">
    <script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/signupmakemoney/ffffff/111111"></script>
    <br /><a href="http://feeds.feedburner.com/signupandmakemoney/haHu" target="_blank">
    <img src="http://feeds.feedburner.com/~fc/signupandmakemoney/haHu?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0;" /></a>
    </td></tr><tr><td><br /><div align="center"><?php include('../includes/banner2.php'); ?></div></td>

    <td style="padding-left:15px;"><a class="addthis_button" href="http://addthis.com/bookmark.php?v=250&amp;pub=gdc25">
      <img src="http://s7.addthis.com/static/btn/v2/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" 
      style="border:0; padding-bottom:0px;margin-bottom:0px;"/></a>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=gdc25"></script>
      <br /><br /><div id="google_translate_element"></div><script>

function googleTranslateElementInit() {

  new google.translate.TranslateElement({

    pageLanguage: 'en'

  }, 'google_translate_element');

}

</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></td></tr></table><br />

    </div></td>

  </tr>

  <tr>

    <td colspan="2"><br /><br /><h3 align="center"><?php echo $footer; ?></h3>

    <br /><br /></td>

  </tr>

  <tr>

    <td width="50%"><div align="center" class="side">

    <ul>

    	<li><a href="<?php echo URL ?>info/earnings-disclaimer.html">Earnings Disclaimer</a></li>
      <li><a href="<?php echo URL ?>info/privacy-policy.html">Privacy Policy</a></li>
      <li><a href="<?php echo URL ?>info/signupandmakemoney-instructions.html">Instructions</a></li>
      <li><a href="<?php echo URL ?>sitemap.html">Sitemap</a></li>
 	    <li><a href="<?php echo URL ?>contact/">Contact</a></li>
      <li><a href="<?php echo URL ?>info/faq.html">FAQ</a></li>

    </ul>  

    </div></td>

    <td width="50%" rowspan="2"><div align="center"><img src="<?php echo URL ?>Assets/signupandmakemoney-logo-lg-transparent.gif" alt="Signupandmakemoney Logo" width="300" height="67" /></div></td>

  </tr>

  <tr>

    <td><div align="center"><br /><br /><p>Copyright &copy; 2008 - <?php echo date('Y'); ?> Signupandmakemoney, LLC</p></div></td>

  </tr>

</table>

<script type="text/javascript">

var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");

document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>

<script type="text/javascript">

try {

var pageTracker = _gat._getTracker("UA-3173227-1");

pageTracker._trackPageview();

} catch(err) {}</script>

<!-- ladesk -->

<div id='laPlaceholder'></div> 

<script type="text/javascript"> 

(function(d,t) { 

var script = d.createElement(t); script.id = 'la_x2s6df8d'; script.async = true; 

script.src = '//jazztrumpetlicks.com/liveagent/scripts/track.js'; 

var image = d.createElement('img'); script.async = true; 

image.src = '//jazztrumpetlicks.com/liveagent/scripts/pix.gif'; 

script.onload = script.onreadystatechange = function() { 

var rs = this.readyState; if (rs && (rs != 'complete') && (rs != 'loaded')) return; 

LiveAgentTracker.createButton('474cdf4a', this); 

}; 

var placeholder = document.getElementById('laPlaceholder'); 

placeholder.parentNode.insertBefore(script, placeholder); 

placeholder.parentNode.insertBefore(image, placeholder); 

placeholder.parentNode.removeChild(placeholder); 

})(document, 'script'); 

</script>

<!-- ladesk end -->

</div> <!-- closes the footercontent tag -->

</div> <!-- closes the footer tag -->

<!-- Kontera(TM);-->

<script type="text/javascript">

var dc_AdLinkColor = "blue"; 

var dc_PublisherID = 61873; 

</script>

<script type="text/javascript" src="http://kona.kontera.com/javascript/lib/KonaLibInline.js"></script>

<!-- end Kontera(TM) --> 

<!-- PAP -->

<script type="text/javascript"><!--

document.write(unescape("%3Cscript id='pap_x2s6df8d' src='" + (("https:" == document.location.protocol) ? "https://" : "http://") + 

"www.signupandmakemoney.com/site/scripts/trackjs.js' type='text/javascript'%3E%3C/script%3E"));//-->

</script>

<script type="text/javascript"><!--

PostAffTracker.setAccountId('default1');

try {

PostAffTracker.track();

} catch (err) { }

//-->

</script>

</body>

</html>

