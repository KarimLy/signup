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
	define('EASYHITS4U', 'http://www.easyhits4u.com/?ref=gdc25');
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

	 function get1stDirectory($canonical) {
      $urlParts = explode('/', str_ireplace(array('http://', 'https://'), '', $canonical));
      return $urlParts[1];
  	}

  	$section = get1stDirectory($canonical);

  	if ($section == '' || $section == 'bonus') {

    function format($num) {
      return number_format((float)$num, 2, '.', '');
    }

    // bonus defaults..
    $getPaidTotals = 0.00; 
    $clickTotals = 0.00; 
    $advertisingTotals = 0.00; 
    $affiliateTotals = 0.00; 
    $bankTotals = 0.00; 
    $gamingTotals = 0.00; 
    $fastTotals = 0.00; 
    $shoppingTotals = 0.00; 
    $investmentTotals = 0.00;
    $socialTotals = 0.00; 
    $surveyTotals = 0.00; 
    $buxTotals = 0.00;

    // affiliate bonuses
    $signupandmakemoney = format(2.00);
    $domainIt = format(50.00);
    $crocmint = format(50.00);
    $panthera = format(150.00);
    $ultraWebsiteHosting = format(5.00);
    $cashBurners = format(50.00);
    $idevdirect = format(25.00);
    $songsurgeon = format(100.00);
    $guitar1 = format(100.00);
    $highprofits = format(20.00);
    $advertyze = format(1.00);

    $affiliateTotals = format(array_sum(array($signupandmakemoney, $domainIt, $crocmint, $panthera, $ultraWebsiteHosting, $cashBurners, $idevdirect,
                                       $songsurgeon, $guitar1, $highprofits, $advertyze)));

    // bank bonuses - none currently...
    $bankTotals = format($bankTotals);

    // bux bonuses
    $beanybux = format(0.25);
    $buxify = format(5.00);
    $tenbux = format(0.05);
    $buxjunction = format(5.00);

    $buxTotals = format(floatval(array_sum(array($beanybux, $buxify, $tenbux, $buxjunction))));

    // shopping bonuses
    $ebates = format(10.00);

    $shoppingTotals = format(array_sum(array($ebates)));

    // fast bonuses
    $signupandmakemoneyFast = format(0.05);
    $clixsense = format(0.05);
    $easyhits4u = format(0.05);
    $surveySavvy = format(0.05);
    $mammothList = format(1.00);

    $fastTotals = format(array_sum(array($signupandmakemoneyFast, $clixsense, $easyhits4u, $surveySavvy, $mammothList)));

    // advertising bonuses
    $bidvertiser = format(20.00);
    $bannersGoMLM = format(15.00);
    $freeSafelistMailer = format(10.00);
    $mySoloTrader = format(5.00);
    $bannersGoMLM = format(15.00);

    $advertisingTotals = format(array_sum(array($bidvertiser, $bannersGoMLM, $freeSafelistMailer, $mySoloTrader)));

    // gaming bonuses
    $scratch2cash = 200.00;

    $gamingTotals = format(array_sum(array($scratch2cash)));

    // get paid to bonuses
    $inboxDollars = format(5.00);
    $sendEarnings = format(5.00);
    $uniqueRewards = format(5.00);
    $cashCrate = format(1.00);
    $squishyCash = format(3.00);
    $treasureTrooper = format(1.00);
    $getPaidToTry = format(25.00);
    $sunshineRewards = format(5.00);

    $getPaidTotals = format(array_sum(array($inboxDollars, $sendEarnings, $uniqueRewards, $cashCrate, $squishyCash, $treasureTrooper, $getPaidToTry, 
                                            $sunshineRewards)));

    // investment bonuses - none
    $investmentTotals = format($investmentTotals);

    // social bonuses - none
    $socialTotals = format($socialTotals);

    // survey bonuses
    $yourFreeSurveys = format(4.00);
    $paidViewPoint = format(1.00);

    $surveyTotals = format(array_sum(array($yourFreeSurveys, $paidViewPoint)));

    // paid to click bonuses
    $hits4pay = format(5.00);
    $dealsnCash = format(5.00);
    $quidsCorner = format(0.25);
    $upPaid = format(0.10);
    $cashMoneyEmail = format(10.00);
    $emailPaysU = format(10.00);
    $paid2YouTube = format(0.05);
    $clickVista = format(0.25);

    $clickTotals = format(array_sum(array($hits4pay, $dealsnCash, $quidsCorner, $upPaid, $cashMoneyEmail, $emailPaysU, $paid2YouTube, $clickVista)));

    // add them all up...
    $combinedTotals = format(array_sum(array($getPaidTotals, $clickTotals, $advertisingTotals, $affiliateTotals, $bankTotals, $gamingTotals, $fastTotals,
                                    $shoppingTotals, $investmentTotals, $socialTotals, $socialTotals, $surveyTotals, $buxTotals)));

  }

?>