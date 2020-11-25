<?php 

include_once('db_connect.php');
$database = new database();

$id = $_POST['id'];
$name = $_POST['name'];
$categoryId = $_POST['categoryId'];
$description = $_POST['description'];
$price = $_POST['price'];
$total = $_POST['total'];

$result = $database->updateFood($id, $categoryId, $name, $description, $total, $price);
echo($result);
?>