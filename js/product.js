var $num = $("#num");

var getVal = () => {
    return parseInt($num.val());
};

function handleMinus() {
    var currentVal = getVal();
    if (currentVal > 0) $num.val(currentVal - 1);
}

function handlePlus() {
    var currentVal = getVal();
    if (currentVal < 99) $num.val(currentVal + 1);
}

function isInArray(arr, id) {
    var index = -1;
    arr.forEach((element, i) => {
        if (element.id == id) index = i;
    });
    return index;
}

function addToCart(id) {
    var currentVal = getVal();

    var products = JSON.parse(localStorage.getItem("products")) ?? [];
    var index = isInArray(products, id);

    if (index >= 0) products[index].amount += currentVal;
    else products.push({ id: id, amount: currentVal });

    localStorage.setItem("products", JSON.stringify(products));
}
