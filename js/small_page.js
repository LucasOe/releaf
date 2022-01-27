$(document).ready(function () {
    //to make page fullscreen without scrollbar
    const footerHeight = $("footer").height();
    const headerHeight = $("#nav").height();
    var subtract = footerHeight + headerHeight;
    $("main").css("min-height", "calc( 100vh - " + subtract + "px)");
});
