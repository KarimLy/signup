// JavaScript for faq page

$(document).ready(function() {									
	$("a[name^='faq-']").each(function() {
		$(this).click(function() {
			if( $("#" + this.name).is(':hidden') ) {
				$("#" + this.name).toggle('slow');
			} else {
				$("#" + this.name).toggle('slow');
			}			
			return false;
		});
	});
});

// Checks the browser and adds classes to the body to reflect it.

$(document).ready(function(){
    
    var userAgent = navigator.userAgent.toLowerCase();
    $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase()); 
    
    // Is this a version of IE?
    if($.browser.msie){
        $('body').addClass('browserIE');
        
        // Add the version number
        $('body').addClass('browserIE' + $.browser.version.substring(0,1));
    }
    
    
    // Is this a version of Chrome?
    if($.browser.chrome){
    
        $('body').addClass('browserChrome');
        
        //Add the version number
        userAgent = userAgent.substring(userAgent.indexOf('chrome/') +7);
        userAgent = userAgent.substring(0,1);
        $('body').addClass('browserChrome' + userAgent);
        
        // If it is chrome then jQuery thinks it's safari so we have to tell it it isn't
        $.browser.safari = false;
    }
    
    // Is this a version of Safari?
    if($.browser.safari){
        $('body').addClass('browserSafari');
        
        // Add the version number
        userAgent = userAgent.substring(userAgent.indexOf('version/') +8);
        userAgent = userAgent.substring(0,1);
        $('body').addClass('browserSafari' + userAgent);
    }
    
    // Is this a version of Mozilla?
    if($.browser.mozilla){
        
        //Is it Firefox?
        if(navigator.userAgent.toLowerCase().indexOf('firefox') != -1){
            $('body').addClass('browserFirefox');
            
            // Add the version number
            userAgent = userAgent.substring(userAgent.indexOf('firefox/') +8);
            userAgent = userAgent.substring(0,1);
            $('body').addClass('browserFirefox' + userAgent);
        }
        // If not then it must be another Mozilla
        else{
            $('body').addClass('browserMozilla');
        }
    }
    
    // Is this a version of Opera?
    if($.browser.opera){
        $('body').addClass('browserOpera');
    }
    
    
});

// tooltip code

$(document).ready(function() {
        // Hover me at the top
        $("#hover-top").hover(function() {
            if ($(".hover", this).css("display") == "block") { return false; }
            os = $(this).offset();
            $("div.hover", this).css({top: os.top+"px", left: os.left-70+"px"}).animate({top: os.top-120+"px", opacity: "show"}, 750);
        },
        function() {
            os = $(this).offset();
            $(".hover", this).animate({top: os.top+"px", opacity: "hide"}, 500);
        });

        // Hover me to the side
        $("#hover-left").hover(function() {
            if ($(".hover", this).css("display") == "block") { return false; }
            os = $(this).offset();
            $(".hover", this).css({top: os.top-120+"px", left: os.left-30+"px"}).animate({left: os.left-70+"px", opacity: "show"}, 750);
        },
        function() {
            os = $(this).offset();
            $(".hover", this).animate({left: os.left+"px", opacity: "hide"}, 500);
        });
		
		// Hover me to the other side
        $("#hover-right").hover(function() {
            if ($(".hover", this).css("display") == "block") { return false; }
            os = $(this).offset();
            $(".hover", this).css({top: os.top-120+"px", left: os.left-30+"px"}).animate({left: os.left-70+"px", opacity: "show"}, 750);
        },
        function() {
            os = $(this).offset();
            $(".hover", this).animate({left: os.left+"px", opacity: "hide"}, 500);
        });
    });

// audio player script

var ap_instances = new Array();

function ap_stopAll(playerID) {
	for(var i = 0;i<ap_instances.length;i++) {
		try {
			if(ap_instances[i] != playerID) document.getElementById("audioplayer" + ap_instances[i].toString()).SetVariable("closePlayer", 1);
			else document.getElementById("audioplayer" + ap_instances[i].toString()).SetVariable("closePlayer", 0);
		} catch( errorObject ) {
			// stop any errors
		}
	}
}

function ap_registerPlayers() {
	var objectID;
	var objectTags = document.getElementsByTagName("object");
	for(var i=0;i<objectTags.length;i++) {
		objectID = objectTags[i].id;
		if(objectID.indexOf("audioplayer") == 0) {
			ap_instances[i] = objectID.substring(11, objectID.length);
		}
	}
}

var ap_clearID = setInterval( ap_registerPlayers, 100 );


// banner ads 

var smallbannerads = new Array()

smallbannerads[0]='<a href="http://www.kerclink.com/AffTrack.htm?MID=110765" target="_blank"><img src="http://www.kerclink.com/Marketing/kbanner_250x250.jpg" alt="Get Paid To Have Fun At KERclink.com !" width="250" height="250" hspace="0" vspace="0" border="0" /></a>'
smallbannerads[1]='<a href="http://www.mb01.com/lnk.asp?o=1766&c=26461&a=21519" target="_blank" style="background:none;"><img src="http://www.mb01.com/getimage.asp?m=1854&o=1766&i=26461.dat" alt="Fusion Cash - Get a $5.00 sign up bonus!" title="Join Fushion Cash and get a $5.00 sign up bonus." width="125" height="125" border="0" /></a>'
smallbannerads[2]='<a href="http://www.clixsense.com/?2251204" target="_blank" style="background:none;"><img src="http://www.clixsense.com/Ad/clixsense4.gif" alt="Clixsense - Advertise for as little as $5.00" title="Join Clixsense for free." width="180" height="150" border="0" /></a>'
smallbannerads[3]='<a href="http://www.mb01.com/lnk.asp?o=1744&c=25889&a=21519" target="_blank" style="background:none;"><img src="http://www.mb01.com/getimage.asp?m=1817&o=1744&i=25889.dat" alt="Your Free Surveys - Get paid for your opinions!" title="Join YourFreeSurveys and get a $4.00 sign up bonus." width="125" height="125" border="0" /></a>'
smallbannerads[4]='<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/125x125.gif" width="124" height="125" border="0"></a>'
smallbannerads[5]='<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_125x125_2.gif" border="0" width="125" height="125" alt="UniqueRewards"></a>'
smallbannerads[6]='<a href="http://partners.pantheranetwork.com/z/48375/CD8189/" target="_blank"><img src="http://partners.pantheranetwork.com/42/8189/48375/" alt="Join Cash Crate today and get a $1.00 sign up bonus." border="0" /></a>'
smallbannerads[7]='<a href="http://partners.pantheranetwork.com/z/10072/CD8189/" target="_blank"><img src="http://partners.pantheranetwork.com/42/8189/10072/" alt="Join the Panthera Network affiliate program for high payouts today." border="0" /></a>'
smallbannerads[8]='<a href="http://www.mb01.com/lnk.asp?o=4729&c=55204&a=21519" target="_blank"><img src="http://www.mb01.com/getimage.asp?m=2762&o=4729&i=55204.dat" width="300" height="250" border="0"></a>'
smallbannerads[9]='<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/300x250.png" width="300" height="250"></a>'
smallbannerads[10]='<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/250x250/250x250_2.gif" border="0" /></a>'
smallbannerads[11]='<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/300x250/300x250_2.jpg" border="0" /></a>'
smallbannerads[12]='<a href="http://affiliate.irotracker.com/rd/r.php?sid=94&pub=301699&bid=372&c1=&c2=&c3=" target="_blank"><img src="http://ads.irotracker.com/rd/b.php?bid=372&sid=94&pub=301699" border="0" width="120" height="90" alt="Clip and Go Coupons"></a>'

var smallchoosead=Math.floor(Math.random()*(smallbannerads.length))  

var bottombannerads = new Array()

bottombannerads[0]='<a href="http://hits4pay.com/members/index.cgi?gdc25" target="_blank"><img border="0" src="http://hits4pay.com/imgn/banners/468x60.png" width="468" height="60"></a>'
bottombannerads[1]='<a href="http://www.inboxdollars.com/?r=ref12218393" target="_blank"><img src="http://www.inboxdollars.com/graphics/creative/banners/468x60/468x60_2.gif" border="0" /></a>'
bottombannerads[2]='<a href="http://www.sendearnings.com/?r=ref271274" target="_blank"><img src="http://www.sendearnings.com/graphics/creative/banners/468x60/468x60_1.jpg" border="0" /></a>'
bottombannerads[3]='<a href="http://www.gomezpeerzone.com/application-apply/?Referrer=gdc25" target="_blank"><img src="http://www.gomezpeerzone.com/wp-content/uploads/2011/11/468x60-static.gif" width="468" height="60" border="0"></a>'
bottombannerads[4]='<a href="http://www.clixsense.com/?2251204" target="_blank"><img src="http://csstatic.com/banners/clixsense468x60g.png" border="0" /></a>'
bottombannerads[5]='<a href="http://www.uniquerewards.com/cgi-bin/main.cgi?cmd=newref&refid=9440" target="_blank"><img src="http://www.uniquerewards.com/banners/ur_468x60_2.gif" border="0" width="468" height="60" alt="UniqueRewards - online rewards program"></a>'
bottombannerads[6]='<a href="https://www.surveysavvy.com/?m=2450703" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/affiliate/surveysavvy-banner468.jpg" border="0" width="468" height="60" alt="Survey Savvy" /></a>'
bottombannerads[7]='<a href="http://www.signupandmakemoney.com/webinar/" target="_blank"><img src="http://www.signupandmakemoney.com/Assets/pws.jpg" border="0" width="468" height="60" alt="Secret Money Formular Webinar" /></a>'

var bottomchoosead=Math.floor(Math.random()*(bottombannerads.length)) 

// open in a new window script

function globalnpnproof(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/npn-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function globalnpnexplained(){window.open("http://www.signupandmakemoney.com/blog/2009/06/the-global-npn-5x5-smart-spill-matrix-explained/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function gdi(){window.open("http://www.signupandmakemoney.com/blog/2009/02/with-gdi-you-only-need-to-refer-10-to-break-even/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function roboform(){window.open("http://www.signupandmakemoney.com/blog/2009/06/roboform-affiliate-program-payment-proof/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function gdiproof(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/global-domains-international-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function advertyze(){window.open("http://www.signupandmakemoney.com/blog/2009/11/get-sign-up-bonus-by-placing-advertyze-affiliate-link-on-site/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function buyrealvisitors(){window.open("http://www.signupandmakemoney.com/blog/2009/04/buy-real-visitors-is-a-free-affiliate-program-and-pays-500-for-joining/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ebiz(){window.open("http://www.signupandmakemoney.com/blog/2009/05/ebiz-income-club-is-giving-away-free-money-for-signing-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cashburners(){window.open("http://www.signupandmakemoney.com/blog/2009/05/become-a-free-affiliate-with-cash-burners-and-get-a-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function highprofits(){window.open("http://www.signupandmakemoney.com/blog/2009/05/high-profits-affiliate-program-pays-a-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cheapvisitors(){window.open("http://www.signupandmakemoney.com/blog/2009/06/the-cheap-visitors-affiliate-program-pays-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function crocmint(){window.open("http://www.signupandmakemoney.com/blog/2009/07/the-crocmint-free-affiliate-program-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function idevaffiliate(){window.open("http://www.signupandmakemoney.com/blog/2009/07/idevaffiliate-program-pays-a-25-00-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function signupandmakemoney(){window.open("http://www.signupandmakemoney.com/blog/2009/08/sign-up-and-make-money-affiliate-program-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function learningthings(){window.open("http://www.signupandmakemoney.com/blog/2009/06/become-an-affiliate-with-learning-things-and-get-a-20000-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ecigarette(){window.open("http://www.signupandmakemoney.com/blog/2009/06/affiliate-sign-up-bonus-e-cigarette-direct-save-lives/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function panthera(){window.open("http://www.signupandmakemoney.com/blog/2009/03/the-panthera-network-offers-15000-sign-up-bonus-for-2009/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function freeandpowerful(){window.open("http://www.signupandmakemoney.com/blog/2010/01/free-and-powerful-3-steps-to-a-50-00-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function monsterbux(){window.open("http://www.signupandmakemoney.com/blog/2009/07/monster-bux-paid-to-click-community-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function tenbux(){window.open("http://www.signupandmakemoney.com/blog/2009/02/10bux-pays-you-a-5-cent-sign-up-bonus-for-free/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function points2shop(){window.open("http://www.signupandmakemoney.com/blog/2009/10/earn-cash-back-sign-up-bonus-amazon-points2shop/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cashcrate(){window.open("http://www.signupandmakemoney.com/blog/2009/04/cash-crate-gives-sign-up-bonus-after-filling-out-profile/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function clixsense(){window.open("http://www.signupandmakemoney.com/blog/2009/01/clixsense-as-an-advertising-option-online/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surveysavvy(){window.open("http://www.signupandmakemoney.com/blog/2009/03/survey-savvy-pays-you-to-take-surveys-and-refer-friends/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function snapdollars(){window.open("http://www.signupandmakemoney.com/blog/2009/02/snap-dollars-is-free-to-join-and-pays-you-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function easyhits4u(){window.open("http://www.signupandmakemoney.com/blog/2009/01/easyhits4u-is-a-great-traffic-exchange/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function bidvertiser(){window.open("http://www.signupandmakemoney.com/blog/2009/08/proof-of-payment-from-bidvertiser-pay-per-click/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function clickersjamboree(){window.open("http://www.signupandmakemoney.com/blog/2009/04/clickers-jamboree-offers-a-sign-up-bonus-and-free-hits/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function aimhightraffic(){window.open("http://www.signupandmakemoney.com/blog/2009/03/get-1000-from-aim-high-traffic-when-you-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function dynamitesafelist(){window.open("http://www.signupandmakemoney.com/blog/2009/08/explosive-e-mail-advertising-sign-up-bonus-dynamite-safelist/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function extremesafelist(){window.open("http://www.signupandmakemoney.com/blog/2009/05/extreme-safelist-pays-a-1000-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function globalpandatraffic(){window.open("http://www.signupandmakemoney.com/blog/2009/11/golden-panda-traffic-exchange-sign-up-bonus-free-hits/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function lucky7(){window.open("http://www.signupandmakemoney.com/blog/2009/06/lucky-7s-free-text-ads-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function mylistfrog(){window.open("http://www.signupandmakemoney.com/blog/2009/08/my-list-frog-includes-list-building-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function mysoloadtrader(){window.open("http://www.signupandmakemoney.com/blog/2009/08/my-solo-ad-trader-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function infernoadz(){window.open("http://www.signupandmakemoney.com/blog/2009/08/text-ad-exchange-sign-up-bonus-inferno-adz/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function adflasher(){window.open("http://www.signupandmakemoney.com/blog/2009/09/adflasher-net-offers-sign-up-bonus-but-looks-fishy/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function bingo(){window.open("http://www.signupandmakemoney.com/blog/2009/11/enjoy-bingo-then-youll-like-these-free-deposit-bonuses/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function fusioncash(){window.open("http://www.signupandmakemoney.com/blog/2009/03/get-paid-to-sign-up-with-fusion-cash/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function microworkers(){window.open("http://www.signupandmakemoney.com/blog/2009/10/get-paid-to-do-various-tasks-at-microworkers/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cash4offers(){window.open("http://www.signupandmakemoney.com/blog/2009/01/cash4offers-pays-you-a-300-sign-up-bonus-for-joining/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function pandaresearch(){window.open("http://www.signupandmakemoney.com/blog/2009/02/panda-research-pays-you-500-to-sign-up-with-them/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function fatcatrewards(){window.open("http://www.signupandmakemoney.com/blog/2009/05/fat-cat-rewards-offers-a-1000-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function easymoneyptc(){window.open("http://www.signupandmakemoney.com/blog/2009/11/easy-money-ptc-sign-up-bonus-free-advertising/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cashpirate(){window.open("http://www.signupandmakemoney.com/blog/2009/12/complete-free-offers-for-free-cash-at-cash-pirate/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function uniquerewards(){window.open("http://www.signupandmakemoney.com/blog/2010/01/unique-rewards-5-00-bonus-plus-only-20-00-cash-out/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function cash4free(){window.open("http://www.signupandmakemoney.com/blog/2010/02/cash4free-gives-sign-up-bonus-complete-2-offers-to-get-it/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function sharebuilder(){window.open("http://www.signupandmakemoney.com/blog/2009/11/sharebuilder-ing-direct-offering-free-investing-credits/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function emailpaysu(){window.open("http://www.signupandmakemoney.com/blog/2009/01/make-money-with-e-mailpaysu/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function peoplestring(){window.open("http://www.signupandmakemoney.com/blog/2009/11/peoplestring-latest-social-network-fad-or-here-to-last/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function taketheinternetback(){window.open("http://www.signupandmakemoney.com/blog/2009/03/take-the-internet-back-pays-a-free-1000-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function paid2youtube(){window.open("http://www.signupandmakemoney.com/blog/2009/09/get-paid-to-watch-videos-plus-a-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function clicksvista(){window.open("http://www.signupandmakemoney.com/blog/2009/11/clicks-vista-quids-corner-pay-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function marvelemail(){window.open("http://www.signupandmakemoney.com/blog/2009/11/marvel-e-mail-sign-up-bonus-free-advertising/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function paid4clix(){window.open("http://www.signupandmakemoney.com/blog/2010/04/get-paid-to-click-with-paid-4-clix-plus-free-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surfbounty(){window.open("http://www.signupandmakemoney.com/blog/2009/03/surf-bounty-pays-you-500-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surveyhead(){window.open("http://www.signupandmakemoney.com/blog/2009/01/surveyhead-is-a-free-survey-company-that-pays-you-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function awsurveys(){window.open("http://www.signupandmakemoney.com/blog/2009/03/aw-surveys-my-experience-and-opinion-of-them/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function getresponse(){window.open("http://www.signupandmakemoney.com/blog/2009/03/the-difference-between-get-response-and-aweber/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function bloggerwordpress(){window.open("http://www.signupandmakemoney.com/blog/2009/06/blogger-and-wordpress-are-the-best-recommended-blogging-software/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function taxbenefits(){window.open("http://www.signupandmakemoney.com/blog/2009/03/tax-benefits-of-a-home-based-business/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function maxbounty(){window.open("http://www.signupandmakemoney.com/blog/2009/03/max-bounty-is-a-good-affiliate-marketing-network-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function perfectpaycheck(){window.open("http://www.signupandmakemoney.com/blog/2009/03/proof-of-payment-received-from-the-perfect-paycheck-affiliate-network/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ironoffers(){window.open("http://www.signupandmakemoney.com/blog/2009/08/iron-offers-affiliate-network-payment-proof/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function tmiwireless(){window.open("http://www.signupandmakemoney.com/blog/2009/06/tmi-wireless-great-free-cell-phone-affiliate-company-payment-proof/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function chitika(){window.open("http://www.signupandmakemoney.com/blog/2010/02/chitika-proof-of-payment-and-its-free-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function prepaidlegalapplication(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/Pre-Paid-Legal-Member-Application.pdf","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function memoryjogger(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/Memory-Jogger.pdf","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function prepaidlegalproof(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/pre-paid-legal-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function prepaidlegal(){window.open("http://www.signupandmakemoney.com/blog/2009/01/pre-paid-legal-business-opportunity/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function tencorecommitments(){window.open("http://www.signupandmakemoney.com/Assets/business-opportunity/10-Core-Commitments.pdf","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function maxbountyproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/max-bounty-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function perfectpaycheckproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/perfect-paycheck-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function commissionjunctionproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/commission-junction-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function bidvertiserproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/bidvertiser-proof-of-payment.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function ironoffersproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/iron-offers-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function roboformproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/roboform-proof-of-payment.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function tmiwirelessproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/tmi-wireless-proof-of-payment-commission-check.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function perfectpaycheckproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/perfect-paycheck-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function valuedopinionsproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/valued-opinions-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function buxtoproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/bux.to-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function dealsncashproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/dealsncash-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function hits4payproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/hits4pay-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function inboxdollarsproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/inboxdollars-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function obopayproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/obopay-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function revolutionproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/revolution-money-exchange-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function sendearningsproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/sendearnings-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function yourfreesurveysproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/yourfreesurveys-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function nocturnalemailproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/nocturnalemail-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function spiderweb(){window.open("http://www.signupandmakemoney.com/blog/2009/01/using-the-spider-web-marketing-system-to-help-build-your-gdi-business/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function realitynetworkers(){window.open("http://www.signupandmakemoney.com/blog/2009/03/why-you-should-at-least-sign-up-for-the-free-trial-with-reality-networkers/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function wordlinx(){window.open("http://www.signupandmakemoney.com/blog/2009/06/why-wordlinx-is-a-trusted-paid-to-click-site/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function easyadbucks(){window.open("http://www.signupandmakemoney.com/blog/2009/04/is-easy-ad-bucks-really-so-easy/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function buxto(){window.open("http://www.signupandmakemoney.com/blog/2009/01/my-experience-with-buxto/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function gapbuster(){window.open("http://www.signupandmakemoney.com/blog/2009/04/gap-buster-is-a-free-mystery-shopping-company/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function marketforce(){window.open("http://www.signupandmakemoney.com/blog/2009/02/my-most-popular-secret-shopping-company-is-market-force/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ez2x2(){window.open("http://www.signupandmakemoney.com/blog/2009/05/the-ez2x2-business-opportunity-explained/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function winnetwork(){window.open("http://www.signupandmakemoney.com/blog/2009/04/the-win-network-is-a-free-business-opportunity-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function screenblaze(){window.open("http://www.signupandmakemoney.com/blog/2009/02/turn-your-screen-saver-into-free-traffic/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function gomez(){window.open("http://www.signupandmakemoney.com/blog/2009/02/get-paid-to-leave-your-computer-on/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function gomezproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/gomez-peer-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function opinionsquare(){window.open("http://www.signupandmakemoney.com/blog/2009/03/opinion-square-is-a-free-survey-site-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surveyscout(){window.open("http://www.signupandmakemoney.com/blog/2009/03/why-survey-scout-is-worth-paying-the-one-time-fee-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surveysavvy(){window.open("http://www.signupandmakemoney.com/blog/2009/03/survey-savvy-pays-you-to-take-surveys-and-refer-friends/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function valuedopinions(){window.open("http://www.signupandmakemoney.com/blog/2009/06/proof-of-payment-for-valued-opinions/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function dealsncash(){window.open("http://www.signupandmakemoney.com/blog/2009/08/deals-n-cash-proof-of-payment/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function hits4pay(){window.open("http://www.signupandmakemoney.com/blog/2009/06/why-hits4pay-makes-cents-get-paid-to-click-on-ads-and-a-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function inboxdollars(){window.open("http://www.signupandmakemoney.com/blog/2009/01/inboxdollars-is-free-to-join-and-pays-you-to-sign-up/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function nocturnalemail(){window.open("http://www.signupandmakemoney.com/blog/2009/10/sign-up-bonus-plus-proof-of-payment-nocturnalemail/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function sendearnings(){window.open("http://www.signupandmakemoney.com/blog/2009/01/make-money-with-sendearnings/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function americanconsumeropinionproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/american-consumer-opinion-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function ithinkproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/i-think-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function myviewproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/myview-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function myview(){window.open("http://www.signupandmakemoney.com/blog/2009/01/myview-is-a-free-survey-company-that-pays/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function surveyspotproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/survey-spot-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function your2centsproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/your-2-cents-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function your2cents(){window.open("http://www.signupandmakemoney.com/blog/2009/02/your2cents-is-a-recommended-free-survey-company-to-join/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function chitikaproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/chitika-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function pantheraproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/panthera-interactive-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function bareassociatesproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/bare-associates-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function cmrsproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/certified-field-associate-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function gapbustersproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/gapbusters-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function gfkproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/gfk-mystery-shopping-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function intellishopproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/intelli-shop-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function jcandassociatesproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/jcandassociates-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function kinesisproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/kinesis-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function msiproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/msi-services-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function realitycheckproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/reality-check-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function secondtononeproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/second-to-none-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function servicecheckproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/service-check-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function serviceevaluationproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/service-evaluation-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function konteraproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/kontera-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function marketforceproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/shopncheck-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function totalresearchproof(){window.open("http://www.signupandmakemoney.com/Assets/secret-shopping/total-research-solutions-payment-proof.gif","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function wbadvertising(){window.open("http://www.signupandmakemoney.com/blog/2009/03/wb-advertising-changes-sign-up-bonus-of-25-cents-to-25-points/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function goldrushadz(){window.open("http://www.signupandmakemoney.com/blog/2009/06/get-limited-time-sign-up-bonus-gold-rush-adz-traffic-ad-exchange/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ilovehits(){window.open("http://www.signupandmakemoney.com/blog/2009/02/i-love-hits-is-a-free-traffic-exchange-that-provides-effective-advertising//#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function poadteam(){window.open("http://www.signupandmakemoney.com/blog/2009/02/poad-team-is-not-a-normal-traffic-exchange/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function microturks(){window.open("http://www.signupandmakemoney.com/blog/2010/05/complete-tasks-get-paid-by-micro-turks-free/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function ics(){window.open("http://www.signupandmakemoney.com/blog/2011/02/instant-cash-sweepstakes-ics-pays-a-sign-up-bonus/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function onlycashsurveys(){window.open("http://www.signupandmakemoney.com/blog/2011/03/no-points-for-surveys-cash-only-please/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function marketingsystem(){window.open("http://www.signupandmakemoney.com/blog/2011/09/124-marketing-system-stay-in-to-get-paid/#comments","mywindow","menubar=1,resizable=yes,scrollbars=yes,width=1000,height=550,top=60,left=100");}
function uniquerewardsproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/unique-rewards-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function ecigarettedirect(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/ecigarettedirect-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function clixsenseproof(){window.open("http://www.signupandmakemoney.com/Assets/affiliate/clixsense-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function squishycashproof(){window.open("http://www.signupandmakemoney.com/Assets/signup-bonus/squishy-cash-payment-proof.png","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}
function surveysavvyproof(){window.open("http://www.signupandmakemoney.com/Assets/survey/survey-savvy-payment-proof.jpg","mywindow","menubar=1,resizable=1,width=750,height=550,top=60,left=100");}