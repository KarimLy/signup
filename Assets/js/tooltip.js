$(document).ready(function() {
        // Hover me at the top
        $("#hover-top").hover(function() {
            if ($(".hover", this).css("display") == "block") { return false; }
            os = $(this).offset();
            $("div.hover", this).css({top: os.top+"px", left: os.left-125+"px"}).animate({top: os.top-120+"px", opacity: "show"}, 750);
        },
        function() {
            os = $(this).offset();
            $(".hover", this).animate({top: os.top+"px", opacity: "hide"}, 500);
        });

        // Hover me to the side
        $("#hover-left").hover(function() {
            if ($(".hover", this).css("display") == "block") { return false; }
            os = $(this).offset();
            $(".hover", this).css({top: os.top-120+"px", left: os.left-200+"px"}).animate({left: os.left-135+"px", opacity: "show"}, 750);
        },
        function() {
            os = $(this).offset();
            $(".hover", this).animate({left: os.left+"px", opacity: "hide"}, 500);
        });
    });