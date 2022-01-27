<?php
include "connection.php";

$data = $_POST["data"];
foreach ($data as $key => $id) {
    $product = getProduct($id);
    echo "<h1>" . $product->name . "</h1>";
}
