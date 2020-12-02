<?php
include_once('db_connect.php');
$database = new database();
$addItem = $_POST['add-item'];

var_dump($addItem); die();

if ($addItem == "FOOD-CATEGORY") {
    $category = $_POST['category'];

    $result = $database->addCategory($category);
} else if ($addItem == "FOOD") {
    $categoryId = $_POST['categoryId'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $total = $_POST['total'];

    $result = $database->addFood($categoryId, $name, $description, $price, $total, $_FILES['image']);
}

