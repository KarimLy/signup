<?php
	define('URL', 'http://www.signupandmakemoney.com/');
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
	
	if ($canonical == 'http://www.signupandmakemoney.com/index.php')
		$canonical = URL;	
	if ($canonical == 'http://signupandmakemoney.com/index.php') 
		$canonical = URL;	
	if ($canonical == 'http://www.signupandmakemoney.com/info/index.html')
		$canonical = URL . 'info/';		
	if ($canonical == 'http://www.signupandmakemoney.com/contact/index.html')
		$canonical = URL . 'contact/';	
	if ($canonical == 'http://www.signupandmakemoney.com/affiliate-tips/index.html')
		$canonical = URL . 'affiliate-tips/';		
	if ($canonical == 'http://www.signupandmakemoney.com/affiliate-tips/advertising/index.html')
		$canonical = URL . 'affiliate-tips/advertising/';	
	if ($canonical == 'http://www.signupandmakemoney.com/affiliate-tips/build-website/index.html')
		$canonical = URL . 'affiliate-tips/build-website/';	
	if ($canonical == 'http://www.signupandmakemoney.com/affiliate-tips/business-opportunity/index.html')
		$canonical = URL . 'affiliate-tips/business-opportunity/';	
	if ($canonical == 'http://www.signupandmakemoney.com/affiliate-tips/business-tips/index.html')
		$canonical = URL . 'affiliate-tips/business-tips/';	
	if ($canonical == 'http://www.signupandmakemoney.com/more-income/index.html')
		$canonical = URL . 'more-income/';		
	if ($canonical == 'http://www.signupandmakemoney.com/get-paid-to-sites/index.html')
		$canonical = URL . 'get-paid-to-sites/';		
	if ($canonical == 'http://www.signupandmakemoney.com/google-search/index.html')
		$canonical = URL . 'google-search/';		
	if ($canonical == 'http://www.signupandmakemoney.com/proofs/index.html')
		$canonical = URL . 'proofs/';
	if ($canonical == 'http://www.signupandmakemoney.com/traffic/index.html')
		$canonical = URL . 'traffic/';
	
?>
