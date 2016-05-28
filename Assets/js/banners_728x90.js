var bannerads = new Array() 

bannerads[0]='<a href=\"http://www.mb01.com/lnk.asp?o=1804&c=26966&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=1897&o=1804&i=26966.dat\" alt=\"Great American Photo Contest!\" title=\"Great American Photo Contest.\" width=\"728\" height=\"90\" border=\"0\" /></a>'

bannerads[1]='<a href=\"http://www.mb01.com/lnk.asp?o=1698&c=25039&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=1761&o=1698&i=25039.dat\" alt=\"Survey 4 Profit - Earn cash and prizes just for sharing your opinion.\" title=\"Survey4Profit - Earn cash and prizes for sharing your opinions.\" width=\"728\" height=\"90\" border=\"0\" /></a>' 

bannerads[2]='<a href=\"http://www.mb01.com/lnk.asp?o=1508&c=22072&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=1407&o=1508&i=22072.dat\" alt=\"wealthymen.com - meet men who make over $100k\" title=\"Meet men who make over $100k at wealthymen.com.\" width=\"728\" height=\"90\" border=\"0\" /></a>'

bannerads[3]='<a href=\"http://www.mb01.com/lnk.asp?o=1793&c=26768&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=1761&o=1793&i=26768.dat\" alt=\"Get paid to review products - Vindale Research\" title=\"Vindale Research - Get paid to review products.\" width=\"728\" height=\"90\" border=\"0\" /></a>'

bannerads[4]='<a href=\"http://www.mb01.com/lnk.asp?o=1392&c=19777&a=21519\" target=\"_blank\"><img src=\"http://www.mb01.com/getimage.asp?m=1373&o=1392&i=19777.dat\" alt=\"Opinion World Business - May we borrow your mind?\" title=\"Opinion World Business.\" width=\"728\" height=\"90\" border=\"0\" /></a>'

bannerads[5]='<a href=\"http://aff.ironoffers.com/z/645/CD1699/\" target=\"_blank\"><img src=\"http://aff.ironoffers.com/42/1699/645/\" alt=\"You could win $3,500 - click to enter\" title=\"You could win $3,500.\" width=\"728\" height=\"90\" border=\"0\" /></a>'

var choosead=Math.floor(Math.random()*(bannerads.length)) 
document.write("<p>" + bannerads[choosead] + "</p>") 

