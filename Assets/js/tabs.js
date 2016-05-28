// JavaScript for tabs
 $(document).ready(function() {
    $(".default").css("display", "block");
	var defid = "#" + $(".default").attr("id");
	
	$("a").each(function(i) {
	if(defid == $(this).attr("href")) {
	 $(this).attr("id", "active");
	}
	});
  
  $(".usual ul li").hover(function() {
     $(".usual ul li").children().attr("id", "");
     $(this).children().attr("id", "active");
	 var tabtocall = $(this).children().attr("href");
	 $(".usual div").fadeOut("fast");
	 $(tabtocall).fadeIn();
  });
  });