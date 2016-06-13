
jQuery("document").ready(function(){

    var $ = jQuery.noConflict();

    var hght = $(window).height();
    var newAttr;
    var oldAttr;

    $(document).scroll(function(evt){
        var currentPos = $(this).scrollTop();
        if(currentPos > 0){
            oldAttr = $(".nav-logo").attr("src");
            newAttr = oldAttr.replace("logo.png", "logo-mini.png");
            $(".nav-logo").attr('src', newAttr);
            $(".nav-logo").addClass("nav-mini-logo");
        } else if (currentPos < 1){
            oldAttr = $(".nav-logo").attr("src");
            newAttr = oldAttr.replace("logo-mini.png", "logo.png");
            $(".nav-logo").attr('src', newAttr);
            $(".nav-logo").removeClass("nav-mini-logo");
        }
    });

});