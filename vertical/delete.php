<?php
include_once('db_connect.php');
$database = new database();

$deleteItem = $_POST['delete_item'];

if ($deleteItem == "FOOD-CATEGORY") {
    $id = $_POST['id'];
    $result = $database->deleteCategory($id);
}
else if ($deleteItem == "FOOD"){
    $id = $_POST['id'];
    $result = $database->deleteFood($id);
}

else if ($deleteItem == "TRANSACTION"){
    $id = $_POST['id'];
    $result = $database->deleteTransaction($id);
}

else if ($deleteItem == "USER"){
    $id = $_POST['id'];
    $result = $database->deleteUser($id);
}

