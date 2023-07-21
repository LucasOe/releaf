function resetPos() {
    $(".slider ul li").removeClass();
}

//clicks
var timeoutId;

$(".prev").on("click", function () {
    if (timeoutId) return;

    $(".slider ul li").addClass("transition right");

    timeoutId = setTimeout(function () {
        next();
        resetPos();
    }, 500);
});

$(".next").on("click", function () {
    if (timeoutId) return;

    $(".slider ul li").addClass("transition left");

    timeoutId = setTimeout(function () {
        prev();
        resetPos();
    }, 500);
});

///////////////////////////////////////////////////////////////
function init() {
    $(".slider ul li").each(function () {
        var curPos = $(this).index();
        $(this).css("order", curPos + 1);
    });
}

function prev() {
    var slider = $(".slider");
    var sliderLength = slider.find("ul li").length;
    $(".slider ul li").each(function () {
        var curPos = parseInt($(this).css("order"));
        var sliderLength = slider.find("ul li").length;
        if (curPos > 1) {
            $(this).css("order", curPos - 1);
        } else {
            curPos = sliderLength;
            $(this).css("order", curPos);
        }
    });
    timeoutId = null;
}

function next() {
    var slider = $(".slider");
    var sliderLength = slider.find("ul li").length;
    $(".slider ul li").each(function () {
        var curPos = parseInt($(this).css("order"));
        var sliderLength = slider.find("ul li").length;
        if (curPos < sliderLength) {
            $(this).css("order", curPos + 1);
        } else {
            curPos = 1;
            $(this).css("order", curPos);
        }
    });
    timeoutId = null;
}

$(document).ready(function () {
    init();
});
