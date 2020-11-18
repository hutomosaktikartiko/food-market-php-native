<?php
include_once('db_connect.php');
$database = new database();

$id = $_POST['id'];
echo $id;

$result = $database->deleteTransaction($id);
