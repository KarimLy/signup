</div> <!-- end content tag -->
</div> <!-- end wrapper tag -->

<div id="footer"> 
<div id="footercontent">
<p align="center">

<?php 

$advert = array(); 

$advert[] = '<a href="'.HITS4PAY.'" target="_blank">
<img border="0" src="http://hits4pay.com/imgn/banners/728x90.png" width="728" height="90"></a>';
$advert[] = '<a href="'.CLIXSENSE.'" target="_blank">
<img src="http://csstatic.com/banners/clixsense_gpt728x90a.png" border="0"></a>';
$advert[] = '<a href="'.SENDEARNINGS.'" target="_blank">
<img src="http://www.sendearnings.com/graphics/creative/banners/728x90/728x90_2.jpg" border="0" /></a>';
$advert[] = '<a href="'.INBOXDOLLARS.'" target="_blank">
<img src="http://www.inboxdollars.com/graphics/creative/banners/728x90/728x90_1.gif" border="0" /></a>';
$advert[] = '<a href="'.SQUISHYCASH.'" target="_blank">
<img src="http://squishycash.com/images/banners/66.gif" width="728" height="90" border="0" /></a>';
$advert[] = '<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=118577&bid=1364207" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com">pay per click</a></noscript>';
$advert[] = '<a href="'.SURVEYSAVVY.'" target="_blank">
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

    <div class="fb-like-box" data-href="https://www.facebook.com/signupmoney" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div></div></td>
    <td style="padding-left:15px;"><script type="text/javascript" language="JavaScript" src="http://twittercounter.com/embed/signupmakemoney/ffffff/111111"></script>
      <br /><a href="http://feeds.feedburner.com/signupandmakemoney/haHu" target="_blank">
      <img src="http://feeds.feedburner.com/~fc/signupandmakemoney/haHu?bg=99CCFF&amp;fg=444444&amp;anim=0" height="26" width="88" style="border:0;" /></a></td></tr>
      <tr><td><br /><div align="center"><?php include ('banner2.php'); ?></div></td>

    <td style="padding-left:15px;"><a class="addthis_button" href="http://addthis.com/bookmark.php?v=250&amp;pub=gdc25">
      <img src="http://s7.addthis.com/static/btn/v2/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0; padding-bottom:0px;margin-bottom:0px;"/></a>
      <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=gdc25"></script><br /><br /><div id="google_translate_element"></div><script>

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
      <li><a href="<?php echo URL ?>info/sitemap.html">Sitemap</a></li>
   	  <li><a href="<?php echo URL ?>contact/">Contact</a></li>
      <li><a href="<?php echo URL ?>info/faq.html">FAQ</a></li>

    </ul>  

    </div></td>
    <td width="50%" rowspan="2">
      <div align="center"><img src="<?php echo URL ?>Assets/signupandmakemoney-logo-lg-transparent.gif" alt="Signupandmakemoney Logo" width="300" height="67" /></div></td>
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

</div> <!-- end footercontent tag -->
</div> <!-- end footer tag -->

<!-- Kontera(TM);-->
<script type="text/javascript">
var dc_AdLinkColor = "blue"; 
var dc_PublisherID = 61873; 
</script>
<script type="text/javascript" src="http://kona.kontera.com/javascript/lib/KonaLibInline.js"></script>
<!-- end Kontera(TM) --> 

</body>
</html>

