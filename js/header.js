$(document).ready(function () {
    var $window = $(window);
    $window.scroll(function () {
        var windowTop = $window.scrollTop();

        var heroVal = windowTop / 4;
        var leafTransl = windowTop / 2.5;
        var leafRot = windowTop / 20;
        var blurAmount =  5 + windowTop/50;

        $(".hero").css("transform", "translateY(" + heroVal + "px)");
        $(".headerLeaf")
            .eq(0)
            .css(
                "transform",
                "translateY(" + leafTransl + "px) rotate(" + leafRot + "deg)"
            );
        $(".headerLeaf")
            .eq(1)
            .css(
                "transform",
                "translateY(" +
                    leafTransl +
                    "px) rotate(" +
                    -leafRot +
                    "deg) skew(" +
                    -leafRot / 2 +
                    "deg)"
            );
        $(".headerLeaf")
            .eq(2)
            .css(
                "transform",
                "translateY(" +
                    leafTransl +
                    "px) rotate(" +
                    -leafRot +
                    "deg) skew(" +
                    -leafRot / 2 +
                    "deg)"
            );
    });
});
