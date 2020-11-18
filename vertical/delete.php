<?php
include_once('db_connect.php');
$database = new database();

$id = $_POST['id'];
$delete = $_POST['delete'];

if ($delete == "FOOD") {
    $result = $database->deleteFood($id);
}
else {
    $result = $database->deleteTransaction($id);
}

