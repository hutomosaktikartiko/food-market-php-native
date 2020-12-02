<?php 

include_once('db_connect.php');
$database = new database();

$updateItem = $_POST['update-item'];

if ($updateItem == "FOOD-CATEGORY") {
    $id = $_POST['id'];
    $category = $_POST['category'];

    $result = $database->updateCategory($id, $category);
} else if ($updateItem == "FOOD") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $categoryId = $_POST['categoryId'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $total = $_POST['total'];
    $lastImage = $_POST['lastImage'];
    $image = $_FILES['image'];

    $result = $database->updateFood($id, $categoryId, $name, $description, $price, $total, $image, $lastImage);
}
?>