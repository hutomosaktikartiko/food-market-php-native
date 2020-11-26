<?php
include_once('db_connect.php');
$database = new database();

$deleteItem = $_POST['delete_item'];

if ($deleteItem == "FOOD-CATEGORY") {
    $id = $_POST['id'];
    $result = $database->deleteCategory($id);
}
else {
    $id = $_POST['id'];
    $delete = $_POST['delete'];
    $result = $database->deleteTransaction($id);
}

