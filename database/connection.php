<?php

$con = new PDO("mysql:host=localhost;dbname=releaf", "root", "");

$stmt = $con->prepare("SELECT * FROM product;");

class Product
{
    public $id;
    public $name;
    private $price;

    public function getPrice()
    {
        return sprintf('%01.2f', $this->price) . "€";
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
