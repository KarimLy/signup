<?php

$ra = array(); 

$ra[] = '<a href="'.HITS4PAY.'" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>';
$ra[] = '<a href="'.INBOXDOLLARS.'" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>';
$ra[] = '<a href="'.SENDEARNINGS.'" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>';
$ra[] = '<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/468x60-static.gif" width="468" height="60" border="0"></a>';
$ra[] = '<a href="'.CLIXSENSE.'" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>';
$ra[] = '<a href="'.UNIQUEREWARDS.'" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>';
$ra[] = '<a href="'.SURVEYSAVVY.'" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/affiliate/surveysavvy-banner468.jpg" border="0" alt="Survey Savvy"></a>';
$ra[] = '<a href="http://www.signupandmakemoney.com/webinar/" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/pws.jpg" border="0" alt="Secret Money Webinar"></a>';

shuffle($ra); 
echo $ra[0];

?>

