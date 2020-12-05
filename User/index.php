<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/solid.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="font/assistant/Assistant-Regular.ttf">
    <script src="https://kit.fontawesome.com/b852b50a57.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>FoodMarket | Solusi Belanja Kebutuhan Makanan Menjadi Lebih Mudah</title>
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
                            <a href="pencarian.html" class="input-group-text text-decoration-none"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-12 pr-5 pl-5">
                <a href="keranjang.html" class="text-decoration-none text-secondary keranjang"><i class="mx-2 fas fa-shopping-cart"></i></a>
                <i class="pembatas mx-3"></i>
                <a href="account.html"><i class="text-decoration-none text-secondary mx-2 fas fa-user-circle"></i></a>
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="front-end.html">Front End</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="back-end.html">Makanan Ringan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ui-ux.html">Makanan Berat</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="motivasi.html">Motivasi</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators ">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active bg-primary"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="bg-primary"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2" class="bg-primary"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Solusi Belanja Kebutuhan Makanan Menjadi Lebih Mudah</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Belanja Dimana aja dan Kapan aja</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Belanja Menjadi Lebih Mudah</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-primary">Discount Hari Ini</h4>
        <div class="card-columns row">
            <?php

            include_once('db_connect.php');
            $database = new database();

            $foods_discount = $database->getDiscountFood();
            $number = 1;

            while($food_discount = mysqli_fetch_assoc($foods_discount)) {
                $discount = ($food_discount['discount'] / 100) * $food_discount['price'];
            ?>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="../admin/assets/images/database/<?= $food_discount['picture_path'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $food_discount['name_food'] ?></h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp <?= $food_discount['price'] ?></del></small>
                        <p class="text-muted">Rp <?= $discount ?></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="mb-3 col-lg-4 col-md-4 col-5" style="max-width: 540px;">
                <div class="text-center">
                    <img src="img/info1.png" alt="" srcset="" width="200">
                    <div class="card-body">
                        <h3 class="card-title">Kapan Aja</h3>
                        <!-- <p class="card-text">Belnaja Kapan Aja</p> -->
                    </div>
                </div>
            </div>
            <div class="border"></div>
            <div class="mb-3 col-lg-4 col-md-4 col-5 pt-4" style="max-width: 540px;">
                <div class="text-center">
                    <img src="img/info2.png" alt="" srcset="" width="180">
                    <div class="card-body">
                        <h3 class="card-title">Dimana AJa</h3>
                        <!-- <p class="card-text">Belanja Dimana Aja</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
    <h4 class="text-primary">Makanan Terbaru</h4>
        <div class="card-columns row">
            <?php

            include_once('db_connect.php');
            $database = new database();

            $foods = $database->getNewFood();
            $number = 1;

            while($food = mysqli_fetch_assoc($foods)) {
            ?>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="../admin/assets/images/database/<?= $food['picture_path'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $food['name_food'] ?></h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <!-- <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small> -->
                        <p class="text-muted">Rp <?= $food['price'] ?></p>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-primary">Kategori Makanan</h4>
        <div class="card-columns web-developer row justify-content-md-center mt-2">
            <?php
                $foods_category = $database->getFoodCategory();
                
                while($food_category = mysqli_fetch_assoc($foods_category)) {
            ?>
            <div class="card bg-white text-white  col-lg-2 col-md-6 col-6">
                <img src="img/html.webp" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h4 class="card-title text-center"><?= $food_category['name_category'] ?></h2>
                </div>
            </div>
                <?php } ?>
            
        </div>
    </div>
    <div class="container mt-5">
        <h5 class="text-primary">Rasakan Sensasi Belanja Dengan Sangat Cepat Di FoodMarket</h5>
        <small>FoodMarket merupakan salah satu perusahaan yang bergerak di bidang e-commerce di indonesia yang menjual bebagai jenis Makanan. KDi sini (FoodMarket) tersedia berbagai jenis metode pembayaran untuk memastikan kegiatan belanja anda dapat dilakukan dengan senyaman mungkin. Data pribadi dan seluruh transaksi yang pernah dan akan di lakukan akan di lindungi oleh kebijakan privasi FoodMarket. FoodMarket menjadi solusi untuk belanja online dengan mudah dan nyaman.</small>
    </div>
    <div class="footer bg-light mt-5">
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="col=md-3 col-4">
                    <h5><b>FoodMarket</b></h5>
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
                    <a href="#" class="text-decoration-none"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-decoration-none"><i class="fab fa-facebook"></i></i></a>
                    <a href="#" class="text-decoration-none"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="pb-3">
            <p class="text-center">&copy;2020 All Right Reserved. PT. Tomo Digital</p>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>