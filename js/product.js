var $num = $("#num");

function handleMinus() {
    var currentVal = parseInt($num.val());
    if (currentVal > 0) $num.val(currentVal - 1);
}

function handlePlus() {
    var currentVal = parseInt($num.val());
    if (currentVal < 99) $num.val(currentVal + 1);
}

function addToCart(id) {
    var products = JSON.parse(localStorage.getItem("products")) ?? [];
    products.push(id);
    localStorage.setItem("products", JSON.stringify(products));
}
