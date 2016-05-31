<?php
	
	// production
	define('URL', 'http://www.signupandmakemoney.com/');

	// testing
	//define('URL', 'http://signupandmakemoney/');

	define('STYLE1', 'styles.css');
	define('STYLE2', '../styles.css');
	define('FAV1', 'Assets/transparent.ico');
	define('FAV2', '../Assets/transparent.ico');
	define('SCRIPT1', 'Assets/js/scripts.js');
	define('SCRIPT2', '../Assets/js/scripts.js');

	define('R', '25');
	define('M', '50');
	define('L', '25');

	$page = $_SERVER['PHP_SELF'];
	$cpage = ltrim($page, '/');
	$canonical = URL . $cpage;	

	if ($canonical == URL . 'index.php') 
		$canonical = URL;	

	if ($canonical == URL . 'info/index.html')
		$canonical = URL . 'info/';		

	if ($canonical == URL . 'contact/index.html')
		$canonical = URL . 'contact/';	

	if ($canonical == URL . 'affiliate-tips/index.html')

		$canonical = URL . 'affiliate-tips/';		

	if ($canonical == URL . 'affiliate-tips/advertising/index.html')
		$canonical = URL . 'affiliate-tips/advertising/';	

	if ($canonical == URL . 'affiliate-tips/build-website/index.html')
		$canonical = URL . 'affiliate-tips/build-website/';

	if ($canonical == URL . 'affiliate-tips/business-tips/index.html')
		$canonical = URL . 'affiliate-tips/business-tips/';	

	if ($canonical == URL .'more-income/index.html')
		$canonical = URL . 'more-income/';		

	if ($canonical == URL . 'get-paid-to-sites/index.html')
		$canonical = URL . 'get-paid-to-sites/';		

	if ($canonical == URL . 'google-search/index.html')
		$canonical = URL . 'google-search/';		

	if ($canonical == URL . 'proofs/index.html')
		$canonical = URL . 'proofs/';

	if ($canonical == URL . 'traffic/index.html')
		$canonical = URL . 'traffic/';

	if ($canonical == URL . 'webinar/index.php')
		$canonical = URL . 'webinar/';

	

?>