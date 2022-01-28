<?php

$dsn = "mysql:host=localhost;";
$user = "root";
$password = "";

// Try to connect to database
try {
    $con = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    echo 'Verbindung fehlgeschlagen: ' . $e->getMessage();
    exit;
}

// Initialize Database if it doesn't exist
if (file_exists("db/init.sql")) {
    $init = file_get_contents("db/init.sql");
    $query = $con->exec($init);
}
$con->query("USE releaf;");

class Product
{
    public $id;
    public $name;
    private $price;
    private $image;
    public $caregory;
    public $rating;
    public $description;

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

    public function __construct($var = null)
    {
        if ($var != null)
            $this->name = $var;
    }

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
        $stmt = $con->prepare("SELECT * FROM product WHERE name LIKE :search ORDER BY name ASC;");
        $stmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
    } elseif ($category != null and $category > 0 and $category < $categoriesAmount) {
        $stmt = $con->prepare("SELECT * FROM product WHERE category = :category ORDER BY name ASC;");
        $stmt->bindParam(":category", $category);
    } else {
        $stmt = $con->prepare("SELECT * FROM product ORDER BY name ASC;");
    }

    if ($stmt->execute()) {
        $products = $stmt->fetchAll(PDO::FETCH_CLASS, "Product");
        if (count($products) <= 0) {
            echo "Error: No results";
        }
        return $products;
    }
}

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

function getCategory($id)
{
    global $con;

    if ($id == 0) return new Category("Gesamtes Sortiment");

    $stmt = $con->prepare("SELECT * FROM category WHERE id = :id");
    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {
        $category = $stmt->fetchAll(PDO::FETCH_CLASS, "Category");
        if (count($category) <= 0) {
            echo "Error: No results";
        }
        return $category[0];
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
