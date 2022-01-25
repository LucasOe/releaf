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

class Category
{
    public $id;
    public $name;
    private $image;

    public function getImage()
    {
        return "img/products/" . $this->image . ".jpg";
    }
}


function getProducts($category, $searchTerm)
{
    global $con;

    $categoriesAmount = count(getCategories());

    if ($searchTerm != null) {
        $searchTerm = "%" . $searchTerm . "%";
        $stmt = $con->prepare("SELECT * FROM product WHERE name LIKE :search");
        $stmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
    } elseif ($category != null and $category > 0 and $category < $categoriesAmount) {
        $stmt = $con->prepare("SELECT * FROM product WHERE category = :category;");
        $stmt->bindParam(":category", $category);
    } else {
        $stmt = $con->prepare("SELECT * FROM product;");
    }

    if ($stmt->execute()) {
        $products = $stmt->fetchAll(PDO::FETCH_CLASS, "Product");
        if (count($products) <= 0) {
            echo "Error: No results";
        }
        return $products;
    }
}

getProducts(0, "Tee");

function getProduct($id)
{
    global $con;

    $stmt = $con->prepare("SELECT * FROM product WHERE id = :id");
    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {
        $product = $stmt->fetchAll(PDO::FETCH_CLASS, "Product");
        if (count($product) <= 0) {
            echo "Error: No result";
        }
        return $product[0];
    }
}

function getCategories()
{
    global $con;

    $stmt = $con->prepare("SELECT * FROM category;");

    if ($stmt->execute()) {
        $categories = $stmt->fetchAll(PDO::FETCH_CLASS, "Category");
        if (count($categories) <= 0) {
            echo "Error: No results";
        }
        return $categories;
    }
}

function isSelected($id)
{
    $category = $_GET["category"] ?? null;
    if ($category == $id) {
        return " class=\"selected\"";
    }
    if ($id == 0 and $category == null) {
        return " class=\"selected\"";
    }
    return "";
}
