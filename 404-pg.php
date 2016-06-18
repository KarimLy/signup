<?php

include('includes/settings.php');

$title = '404 page for Signupandmakemoney.com.';
$description = 'Page does not exist at Signupandmakemoney.com - 404 error.';
$keywords = '404 page, 404 error, page does not exist';
$styles = STYLE1;
$favicon = FAV1;
$script = SCRIPT1;
$footer = 'The page you were looking for does not exist.';

include('includes/header.php');

?>

<h1>Page does not exist 404 error!</h1>

<p>Sorry, but the page you are tyring to view does not exist.</p>

<p><script type="text/javascript">
  var GOOG_FIXURL_LANG = 'en';
  var GOOG_FIXURL_SITE = 'http://www.signupandmakemoney.com/';
  </script>
    <script type="text/javascript" 
    src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
</p>

  <p align="center">
    <img src="http://www.signupandmakemoney.com/Assets/404-error.JPG" width="795" height="328" border="0" alt="404 error picture." title="Don't cry, try the navigation bar and maybe you'll find the page you're looking for." />
  </p>

<?php

  include('includes/footer.php');

?>