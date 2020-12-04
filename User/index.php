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
    <title>FoodMarket | Website Jual-Beli E-Book Koding</title>
</head>

<body>
    <div class="header bg-light">
        <div class="row align-items-center m-auto pt-3">
            <div class="judul col-md-3 col-sm-3 col-4 pl-5 pt-2">
                <h4>TOM-EBOOK</h4>
            </div>
            <div class="col-md-5 col-sm-5 col-7 my-1 px-0">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Apa yang sedang anda cari ?">
                        <div class="input-group-prepend">
                            <a href="pencarian.html" class="input-group-text text-decoration-none"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-12 pr-5 pl-5">
                <a href="keranjang.html" class="text-decoration-none text-secondary keranjang"><i class="mx-2 fas fa-shopping-cart"></i></a>
                <i class="pembatas mx-3"></i>
                <a href="login.html" class="awal btn btn-outline-primary">Login</a>
                <a href="daftar.html" class="awal btn btn-primary daftar">Daftar</a>
            </div>
        </div>
    </div>
    <nav class="navbarUtama navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand navbar-brand2" href="home.html">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="front-end.html">Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="back-end.html">Back End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ui-ux.html">Ui & Ux</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="motivasi.html">Motivasi</a>
                    </li>
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
                        <img src="img/gambarMudah.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Baca dimanapun dan kapanpun</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gambarKomputasi.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Simpan Koleksi Anda dikomputasi Awan</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/gambarKoleksi.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Akses koleksi anda kapanpun</h2>
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
        <h4 class="text-primary">Promo Terbaru</h4>
        <div class="card-columns row">
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/vuejs.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Framework Dengan Kekuatan Super Vue Js</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <small class="text-muted font-weight-bold d"><del>Rp 80.000</del></small>
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="mb-3 col-lg-4 col-md-4 col-5" style="max-width: 540px;">
                <div class="text-center">
                    <img src="img/paperless.png" alt="" srcset="">
                    <div class="card-body">
                        <h3 class="card-title">Paperless</h3>
                        <p class="card-text">Ikut selamatkan lingkungan dengan membaca secara paperless</p>
                    </div>
                </div>
            </div>
            <div class="border"></div>
            <div class="mb-3 col-lg-4 col-md-4 col-5 pt-4" style="max-width: 540px;">
                <div class="text-center">
                    <img src="img/teratur.png" alt="" srcset="" width="">
                    <div class="card-body">
                        <h3 class="card-title">Teratur</h3>
                        <p class="card-text">Simpan koleksi anda secara rapi di komputasi awan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-primary">Motivasi</h4>
        <div class="card-columns row">
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
            <div class="card col-lg-2 col-md-4 col-6">
                <a href="info.html" class="text-decoration-none">
                    <img src="img/motivasi.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dikala Anda Stuck</h5>
                    </div>
                    <div class="card-footer text-center font-weight-bold">
                        <p class="text-muted">Rp 100.000</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-primary">Web Development</h4>
        <div class="card-columns web-developer row">
            <div class="card bg-white text-white  col-lg-3 col-md-6 col-6">
                <img src="img/html.webp" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">HTML</h2>
                </div>
            </div>
            <div class="card bg-white text-dark  col-lg-3 col-md-6 col-6">
                <img src="img/css.PNG" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">CSS</h2>
                </div>
            </div>
            <div class="card bg-white text-dark  col-lg-3 col-md-6 col-6">
                <img src="img/js.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">JAVASCRIPT</h2>
                </div>
            </div>
            <div class="card bg-white text-dark  col-lg-3 col-md-6 col-6">
                <img src="img/php.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">PHP</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h4 class="text-primary">Framework Terpopuler</h4>
        <div class="card-columns web-developer row">
            <div class="card bg-white text-white col-lg-3 col-md-6 col-6">
                <img src="img/laravel.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">LARAVEL</h2>
                </div>
            </div>
            <div class="card bg-white text-dark col-lg-3  col-md-6 col-6">
                <img src="img/react.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">REACT JS</h2>
                </div>
            </div>
            <div class="card bg-white text-dark col-lg-3  col-md col-6">
                <img src="img/vue.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">VUE JS</h2>
                </div>
            </div>
            <div class="card bg-white text-dark col-lg-3  col-md-6 col-6">
                <img src="img/flutter.png" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h2 class="card-title text-center">FLUTTER</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h5 class="text-primary">Rasakan Sensasi Belanja Dengan Sangat Cepat Di Tom-Ebook</h5>
        <small>Tom-Ebook merpakan salah satu perusahaan yang bergerak di bidang e-commerce di indonesia yang menual bebagai jenis E-book yang berkaitan dengan Koding. Kenapa E-book ? Karena secara tidak sengaja kita telah berkontribusi dalam penyelamatan lingkungan yang mana kita telah mengurangi penggunaan kertas dan tentu harga E-book lebih murah di banding buku. Di sini (Tom-Ebook) tersedia berbagai jenis metode pembayaran untuk memastikan kegiatan belanja anda dapat dilakukan dengan senyaman mungkin. Data pribadi dan seluruh transaksi yang pernah dan akan di lakukan akan di lindungi oleh kebijakan privasi Tom-Ebook. Tom-Ebook menjadi solusi untuk belanja online dengan mudah dan nyaman.</small>
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