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

function handleMinus(index) {
    var currentVal = parseInt($("#" + index).val());
    if (currentVal > 0) {
        $("#" + index).val(currentVal - 1);
        updateAmount(index, currentVal - 1);
    }
}

function handlePlus(index) {
    var currentVal = parseInt($("#" + index).val());
    if (currentVal < 99) {
        $("#" + index).val(currentVal + 1);
        updateAmount(index, currentVal + 1);
    }
}

function handleRemove(index) {
    var products = JSON.parse(localStorage.getItem("products"));
    products.splice(index, 1);
    localStorage.setItem("products", JSON.stringify(products));
}

function updateAmount(index, amount) {
    var products = JSON.parse(localStorage.getItem("products"));
    products[index].amount = amount;
    localStorage.setItem("products", JSON.stringify(products));
}
