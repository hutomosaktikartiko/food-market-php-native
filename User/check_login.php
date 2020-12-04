<?php

include_once('db_connect.php');
$database = new database();

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($email,$password,$remember))
    {
      header('location:index.php');
    } else {
        
    }
}

?>