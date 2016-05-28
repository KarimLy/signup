var bannerads = new Array() 

bannerads[0]='<a href=\"http://www.mb01.com/lnk.asp?o=368&c=4573&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=119&o=368&i=4573.dat\" alt=\"Free money at Fushion Cash!\" title=\"Join Fushion Cash and get a $5.00 sign up bonus.\" width=\"120\" height=\"600\" border=\"0\" /></a>' 

bannerads[1]='<a href=\"http://www.mb01.com/lnk.asp?o=2284&c=33127&a=21519\" target=\"_blank\"><IMG SRC=\"http://www.mb01.com/getimage.asp?m=2385&o=2284&i=33127.dat\" alt=\"Scratchtocash.com\" title=\"Join Scratch to Cash and get a $5.00 sign up bonus.\" width=125 height=604 border=0></a>'

bannerads[2]='<a href=\"http://www.mb01.com/lnk.asp?o=1914&c=28531&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=45&o=1914&i=28531.dat\" alt=\"Free $750 Stimulus Check. Do you want it?\" title=\"Get a free $750 stimilus check.\" width=\"120\" height=\"600\" border=\"0\" /></a>'

bannerads[3]='<a href=\"http://perfectpaycheck.directtrack.com/z/8157/CD3456/\" target=\"_blank\"><img src=\"http://perfectpaycheck.directtrack.com/42/3456/8157/\" alt=\"Perfect Paycheck - free affiliate network.\" title=\"Join Perfect Paycheck for free and earn extra money online.\" border=\"0\"></a>'

var choosead=Math.floor(Math.random()*(bannerads.length)) 
document.write("<p>" + bannerads[choosead] + "</p>") 

