<?php

include_once('db_connect.php');
$database = new database();
$total = $_POST['quantity-cart'];
$userId = $_POST['user-id'];
$foodId = $_POST['food-id'];

$result = $database->addCart($userId, $foodId, $total);
