var $cart = $("#cart");

$(document).ready(function () {
    var products = JSON.parse(localStorage.getItem("products"));
    products.forEach((id) => {
        console.log(id);
        var productNode = document.createElement("p");
        productNode.innerHTML = id;
        cart.appendChild(productNode);
    });
});
