<?php

session_start();
if(!($_SESSION['is_login']))
{
    header('location:page-login.php');
}

include_once('db_connect.php');
$database = new database();
$addItem = $_POST['add-item'];

if ($addItem == "FOOD-CATEGORY") {
    $category = $_POST['category'];

    $result = $database->addCategory($category);
} else if ($addItem == "PAYMENT") {
    $payment = $_POST['payment'];
    $account_name = $_POST['account_name'];
    $account_number = $_POST['account_number'];

    $result = $database->addPayment($payment, $account_number, $account_name);
}

