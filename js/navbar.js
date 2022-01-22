$(document).ready(function () {
    var $window = $(window);
    var $mainMenuBar = $("#nav");
    var $mainMenuBarAnchor = $("#mainMenuBarAnchor");

    // Run this on scroll events.
    $window.scroll(function () {
        var windowTop = $window.scrollTop();
        var divTop = $mainMenuBarAnchor.offset().top;
        var animationSpeed = 5; // the bigger, the slower

        if (windowTop > divTop) {
            // Make the div sticky.
            $mainMenuBar.addClass("sticky");
        } else {
            // Unstick the div.
            $mainMenuBar.removeClass("sticky");
        }

        // Clamp number between two values
        const clamp = (num, min, max) => Math.min(Math.max(num, min), max);
        animationAmount = clamp(
            100 - (windowTop - divTop) / animationSpeed,
            0,
            100
        );

        $("#nav > .wave.bottom").css(
            "transform",
            "scaleY(" + animationAmount + "%)"
        );
    });
});
