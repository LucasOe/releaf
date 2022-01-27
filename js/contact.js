$(document).ready(function () {
    let input = $("input");

    input.each((index, element) => {
        const input = $(element);

        //Check if input element is focused
        $(input).focus((event) => {
            input.addClass("filled");
        });

        //Check if input element is no longer focused
        $(input).focusout((event) => {
            if (input.val() !== "") {
                input.addClass("filled");
            } else {
                input.removeClass("filled");
            }
        });
    });
});
