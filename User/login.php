
<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['user-login']))
{
    header('location:index.php');
}

if(isset($_COOKIE['email']))
{
  $database->relogin($_COOKIE['email']);
  header('location:index.php');
}

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


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
        <link rel="stylesheet" href="fontawesome/css/brands.css">
        <link rel="stylesheet" href="fontawesome/css/solid.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="font/assistant/Assistant-Regular.ttf">
        <script src="https://kit.fontawesome.com/b852b50a57.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>FoodMarket - Masuk</title>
    </head>
    <body class="bg-light">
        <div class="pembungkus">
            <form action="" method="post">
                <img src="img/logo.png" alt="" srcset="" width="50%" class="align-items-center">
                <h3 class="text-center my-3">Silahkan Login</h3>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="remember-checkbox">
                    <label class="form-check-label" for="remember-checkbox" value="remember-me" name="remember">Ingat saya</label>
                </div>
                <button class="btn btn-primary btn-lg btn-block mb-2" type="submit" name="login">Submit</button>
                <a href="register.php" class="text-dark"><p>Belum punya akun ?</p></a>
            </form>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>