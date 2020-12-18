<?php

session_start();
if (!($_SESSION['user_login'])) {
    header('location:login.php');
}

include_once('db_connect.php');
$database = new database();

$result = $database->getFoodById($_GET['food-id']);

$food = $result->fetch_assoc();

if(isset($_POST['submit-add-cart'])) {
    $userId = $_SESSION['user-id'];
    $foodId = $food['id_food'];
    $total = $_POST['total-cart'];

    $result = $database->addCart($userId, $foodId, $total);
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font/assistant/Assistant-Regular.ttf">
    <script src="https://kit.fontawesome.com/b852b50a57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>FoodMarket - Food Detail</title>
</head>

<body>
    <div class="header bg-light">
        <div class="row align-items-center m-auto pt-3">
            <div class="judul col-md-3 col-sm-3 col-4 pl-5 pt-2">
                <h4>FoodMarket</h4>
            </div>
            <div class="col-md-5 col-sm-5 col-7 my-1 px-0">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Makanan Cepat Saji...">
                        <div class="input-group-prepend">
                            <a href="search.php" class="input-group-text text-decoration-none"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-12 pr-5 pl-5">
                <a href="cart.php" class="text-decoration-none text-secondary keranjang"><i class="mx-2 fas fa-shopping-cart"></i></a>
                <i class="pembatas mx-3"></i>
                <a href="account.php"><i class="text-decoration-none text-secondary mx-2 fas fa-user-circle"></i></a>
            </div>
        </div>
    </div>
    <nav class="navbarUtama navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand navbar-brand2" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="makanan_ringan.php">Makanan Ringan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makanan_berat.php">Makanan Berat</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#"><?= $food['name_category'] ?></a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $food['name_food'] ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-4">
                <img src="../admin/assets/images/database/<?= $food['picture_path'] ?>" alt="" srcset="" width="100%">
            </div>
            <div class="col-lg-7 mt-2">
                <h2><?= $food['name_food'] ?></h2>
                <small>Jumlah <?= $food['total'] ?></small>
                <h3 class="text-danger my-3">Rp <?= $food['price'] ?></h3>
                <div class=" col-4">
                    <form method="post" class="form-add-cart" role="form">
                        <div class="form-group">
                            <label for="jumlahPembelian">Masukkan Jumlah Pembelian</label>
                            <input type="number" name="total-cart" min="0" max="<?= $food['total'] ?>" class="form-control" id="jumlahPembelian" placeholder="" required>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary mt-3" type="submit" name="submit-add-cart">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <nav>
            <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Ulasan</a>
            </div>
        </nav>
        <div class="tab-content mt-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?= $food['description'] ?>
                <br><br>
            </div>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <h5 class="mt-3">Foto dari Pembeli</h5>

            </div>
        </div>
        <hr class="mb-3">
    </div>
    <div class="footer bg-light mt-5">
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="col=md-3 col-4">
                    <h5><b>TOM E-BOOK</b></h5>
                    <p>Tentang Kami</p>
                    <p>Blog</p>
                    <p>Keuangan</p>
                </div>
                <div class="col-md-3 col-4">
                    <h5><b>BANTUAN</b></h5>
                    <p>Kontak Kami</p>
                    <p>Syarat & Ketentuan</p>
                    <p>Kebijakan</p>
                </div>
                <div class="col-md-3 col-4 text-decoration-none">
                    <h5><b>IKUTI KAMI</b></h5>
                    <a href="https://www.instagram.com/" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.instagram.com/" class="text-decoration-none"><i class="fab fa-facebook"></i></i></a>
                    <a href="https://www.instagram.com/" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="pb-3">
            <p class="text-center">&copy;2018-2019 All Right Reserved. PT. Tomo Digital</p>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>