<?php
include_once('db_connect.php');
$database = new database();

$categpryId = $_POST['categoryId'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$total = $_POST['total'];

$result = $database->addFood($categpryId, $name, $description, $price, $total);
