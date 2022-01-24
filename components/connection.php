<?php

$con = new PDO("mysql:host=localhost;dbname=releaf", "root", "");

class Product
{
    public $id;
    public $name;
    private $price;
    private $image;

    public function getPrice()
    {
        return sprintf('%01.2f', $this->price) . "€";
    }

    public function getImage()
    {
        return "img/products/" . $this->image . ".jpg";
    }
};

$stmt = $con->prepare("SELECT * FROM product;");

if ($stmt->execute()) {
    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
    if (count($result) <= 0) {
        echo "Error: No results";
    }
}

function getProduct($id)
{
    global $con;
    $stmt = $con->prepare("SELECT * FROM product WHERE id=" . $id . ";");
    if ($stmt->execute()) {
        $product = $stmt->fetchAll(PDO::FETCH_CLASS, 'Product');
        if (count($product) <= 0) {
            echo "Error: No result";
        }
        return $product[0];
    }
}
