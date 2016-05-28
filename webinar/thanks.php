<?php
include('../includes/settings.php');
$title = 'Thank You from Signupandmakemoney.com';
$description = 'Greg London would like to thank you for taking the next step.';
$keywords = 'signupandmakemoney';
$styles = STYLE2;
$favicon = FAV2;
$script = SCRIPT2;
$footer = 'Thank you very much for your business and contact with us.';
include('../includes/headerf.php');
?>

<h1>You will be contacted soon</h1>
<p align="center"><img src="../Assets/thank-you.gif" alt="Thankyou with pretty colors." title="Thankyou so much for your questions and/or comments." width="500" height="335" /></p>

<!-- PAP4 affiliate script -->
<script type="text/javascript">
document.write(unescape("%3Cscript id=%27pap_x2s6df8d%27 src=%27" + (("https:" == document.location.protocol) ? "https://" : "http://") + "www.signupandmakemoney.com/site/scripts/trackjs.js%27 type=%27text/javascript%27%3E%3C/script%3E")); 
 </script> <script type="text/javascript">
PostAffTracker.setAccountId('default1');
var action = PostAffTracker.createAction('pws');
action.setOrderID('ORD_12347XYZ');
action.setProductID('ORD_12347XYZ');

PostAffTracker.register();
</script>

<?php
	include('../includes/footer.php');
?>
