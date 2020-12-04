
<?php
include_once('db_connect.php');
$database = new database();
if (isset($_POST['register_user'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $image = $_FILES['image'];
    if ($database->register($name, $email, $password, $address, $phone_number, $image)) {
        header('location:login.php');
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
        <link rel="stylesheet" href="css/daftar.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="font/assistant/Assistant-Regular.ttf">
        <script src="https://kit.fontawesome.com/b852b50a57.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Daftar Tom-Ebook</title>
    </head>
    <body class="bg-light">
        <div class="pembungkus">
            <form action="" method="post" enctype="multipart/form-data">
                <img src="img/logo.png" alt="" srcset="" width="50%" class="align-items-center">
                <h3 class="my-3">Daftar Akun</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input-name">Nama</label>
                        <input type="text" class="form-control" name="name" id="input-name" placeholder="Masukkan Nama">
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="input-handphone">No Handphone</label>
                        <input type="number" class="form-control" name="phone_number" id="input-handphone" placeholder="Nomor handphone">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-address">Alamat</label>
                    <input type="text" class="form-control" name="address" id="input-address" placeholder="Alamat lengkap anda">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="input-email">Email</label>
                        <input type="email" class="form-control" name="email" id="input-email" placeholder="user@email.com">
                    </div>
                    <div class="form-group col-6">
                        <label for="input-password">Password</label>
                        <input type="password" class="form-control" id="input-password" name="password" placeholder="Minimal 6 karakter">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="input-image">Foto profil</label>
                        <input type="file" class="form-control" id="input-image" name="image">
                    </div>
                </div>
                <button class="btn btn-primary" name="register_user" type="submit">Buat Akun</button>
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