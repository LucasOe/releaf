$(document).ready(function () {
    var $window = $(window);
    var $mainMenuBar = $("#nav");
    var $mainMenuBarAnchor = $("#mainMenuBarAnchor");

    // Run this on load events.
    $window.ready(function () {
        sticky();
        mobileMenu();
    });
    // Run this on scroll events.
    $window.scroll(function () {
        sticky();
    });

    // Make navbar sticky
    function sticky() {
        var windowTop = $window.scrollTop();
        var divTop = $mainMenuBarAnchor.offset().top;
        var animationSpeed = 5; // the bigger, the slower

        // Clamp number between two values
        const clamp = (num, min, max) => Math.min(Math.max(num, min), max);

        if (windowTop > divTop) {
            // Make the div sticky.
            $mainMenuBar.addClass("sticky");
            if ($window.width() > 700) {
                $("#nav > .logo").css(
                    "margin-top",
                    clamp((windowTop - divTop) / 2, 0, 30)
                );
                $(".navigation").css(
                    "margin-top",
                    clamp((windowTop - divTop) / 2, 0, 30)
                );
                $("#nav > .icons").css(
                    "margin-top",
                    clamp((windowTop - divTop) / 2, 0, 30)
                );
            }
        } else {
            // Unstick the div.
            $mainMenuBar.removeClass("sticky");
        }

        // Animate logo and navigation bar
        var percentage = clamp(
            100 - (windowTop - divTop) / animationSpeed,
            40,
            100
        );

        animationAmount = percentage;
        logoAnimation = 1 + percentage / 100;

        $("#nav > .wave.bottom").css(
            "transform",
            "scaleY(" + animationAmount + "%)"
        );
        $("#nav > .logo").css("transform", "scale(" + logoAnimation + ")");
    }

    //Open or close hamburger menu
    function mobileMenu() {
        $("#hamburger").click((e) => {
            $("#nav").toggleClass("open");
        });
        
        $window.on('resize', function(){
            if ($window.width() > 700) {
                $("#nav").removeClass("open");
             }
        });
    }
});
