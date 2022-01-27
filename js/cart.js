$(document).ready(function () {
    var products = JSON.parse(localStorage.getItem("products"));

    $.ajax({
        type: "POST",
        url: "components/cart.php",
        data: { data: products },
        success: function (data) {
            $("#cart").html(data);
        },
    });
});
