<p class="ad1">

<?php

$advert = array(); 

$advert[] = '<a href="'.HITS4PAY.'" target="_blank">
<img border="0" src="http://hits4pay.com/imgn/banners/160x600.png" width="160" height="600"></a>';
$advert[] = '<a href="'.CLIXSENSE.'" target="_blank">
<img src="http://csstatic.com/banners/clixsense_gpt120x600a.png" border="0"></a>';
$advert[] = '<a href="'.SENDEARNINGS.'" target="_blank">
<img src="http://www.sendearnings.com/graphics/creative/banners/160x600/160x600_2.jpg" border="0" /></a>';
$advert[] = '<a href="'.INBOXDOLLARS.'" target="_blank">
<img src="http://www.inboxdollars.com/graphics/creative/banners/160x600/160x600_1.gif" border="0" /></a>';
$advert[] = '<a href="'.UNIQUEREWARDS.'" target="_blank">
<img src="http://www.uniquerewards.com/banners/ur_120x600_2.gif" border="0" width="120" height="600" alt="UniqueRewards - online rewards program"></a>';
$advert[] = '<a href="'.SQUISHYCASH.'" target="_blank">
<img src="http://squishycash.com/images/banners/65.png" width="126" height="600" border="0" /></a>';

shuffle($advert); 

echo $advert[0];

?>

<br /><br /><br />

</p>