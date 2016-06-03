<?php
	
	// production
	define('URL', 'http://www.signupandmakemoney.com/');

	// testing
	// define('URL', 'http://signupandmakemoney/');

	define('STYLE1', 'styles.css');
	define('STYLE2', '../styles.css');
	define('FAV1', 'Assets/transparent.ico');
	define('FAV2', '../Assets/transparent.ico');
	define('SCRIPT1', 'Assets/js/scripts.js');
	define('SCRIPT2', '../Assets/js/scripts.js');

	define('R', '25');
	define('M', '50');
	define('L', '25');

	// referral links used in multiple places 
	define('PANTHERA', 'http://stats.pantherainteractive.com/signup/4202');
	define('CLIXSENSE', 'http://www.clixsense.com/?2251204');
	define('EASYHITS4YU', 'http://www.easyhits4u.com/?ref=gdc25');
	define('SURVEYSAVVY', 'http://www.surveysavvy.com/?m=2450703');
	define('BIDVERTISER', 'http://www.bidvertiser.com/bdv/bidvertiser/bdv_ref.dbm?Ref_Option=adv&Ref_PID=118577');
	define('INBOXDOLLARS', 'http://www.inboxdollars.com/?r=ref12218393&s=7');
	define('UNIQUEREWARDS', 'http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440');
	define('SENDEARNINGS', 'http://www.sendearnings.com/?r=ref6734948&s=7');
	define('SQUISHYCASH', 'http://www.squishycash.com/homepage?ref=gdc25');
	define('HITS4PAY', 'http://hits4pay.com/members/index.cgi?gdc25');


	// setup canonical...
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