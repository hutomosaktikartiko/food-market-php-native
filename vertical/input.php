<?php
include_once('db_connect.php');
$database = new database();

$categoryId = $_POST['categoryId'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$total = $_POST['total'];

$result = $database->addFood($categoryId, $name, $description, $price, $total);
