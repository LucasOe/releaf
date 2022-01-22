<?php

$con = new PDO("mysql:host=localhost;dbname=releaf", "root", "");

$stmt = $con->prepare("SELECT * FROM product;");

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

if ($stmt->execute()) {
    $result = $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_UNIQUE, 'Product');
    if (count($result) <= 0) {
        echo "Error: No results";
    }
}

// Close connection
$con = null;
