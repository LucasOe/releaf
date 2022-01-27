$(document).ready(function () {
    let translateX = 670;
    $("a.next").click(e =>{
        translateX = translateX - 670;
        $('.registration-wrapper').css("transform", "translateX(" + translateX + "px)");
    });
});
