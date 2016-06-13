
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

    $(function() {
        $('a[href*="#"]:not([href="#myCarousel"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

});