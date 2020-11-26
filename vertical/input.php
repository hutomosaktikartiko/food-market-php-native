<?php
include_once('db_connect.php');
$database = new database();
$addItem = $_POST['add-item'];

if ($addItem == "FOOD-CATEGORY") {
    $category = $_POST['category'];

    $result = $database->addCategory($category);
} else {
    $categoryId = $_POST['categoryId'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $total = $_POST['total'];

    $result = $database->addFood($categoryId, $name, $description, $price, $total);
}

