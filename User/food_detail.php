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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="front-end.html">Front End</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="makanan_ringan.php">Makanan Ringan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="makanan_berat.php">Makanan Berat</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="motivasi.html">Motivasi</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                <li class="breadcrumb-item"><a href="front-end.html">Front End</a></li>
                <li class="breadcrumb-item active" aria-current="page">Framework Dengan Kekuatan Super VUE.JS</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-4">
                <img src="img/vuejs.png" alt="" srcset="" width="100%">
            </div>
            <div class="col-lg-7 mt-2">
                <h2>Framework Dengan Kekuatan Super VUE.JS</h2>
                <div class="ulasan my-3">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>10 ulasan
                </div>
                <small>Jumlah > 100</small>
                <h3 class="text-danger my-3">Rp 80.000</h3>
                <form>
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="jumlahPembelian">Masukkan Jumlah Pembelian</label>
                            <input type="number" class="form-control" id="jumlahPembelian" placeholder="">
                            <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModal">Tambahkan</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Notifikasi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Berhasil di tambahkan Ke Keranjang
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="cart.php" class="btn btn-primary">Lihat Keranjang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <nav>
            <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Detail</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Ulasan</a>
            </div>
        </nav>
        <div class="tab-content mt-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, eius eaque quis laudantium voluptatibus, nemo quasi molestiae id pariatur aperiam animi necessitatibus incidunt earum voluptatem iusto tempore quaerat, magni sint.
                <br><br>
                <a href="#"><i>#javascript</i></a><a href="#"><i>&nbsp;#vuejs</i></a><a href="#"><i>&nbsp;#webdevelopment</i></a>
            </div>
            <div class="tab-pane fade mt-2" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <table>
                    <tr>
                        <td>Judul</td>
                        <td>:</td>
                        <td>Framework Dengan Kekuatan Super VUE.JS</td>
                    </tr>
                    <tr>
                        <td>Tanggal Rilis</td>
                        <td>:</td>
                        <td>10 Januari 2019</td>
                    </tr>
                    <tr>
                        <td>Jumlah Halaman</td>
                        <td>:</td>
                        <td>560 Halaman</td>
                    </tr>
                    <tr>
                        <td>Penerbit</td>
                        <td>:</td>
                        <td>Dicoding</td>
                    </tr>
                    <tr>
                        <td>Penulis</td>
                        <td>:</td>
                        <td>Sakti, S.kom</td>
                    </tr>
                    <tr>
                        <td>Bahasa</td>
                        <td>:</td>
                        <td>Indonesia</td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                <h5 class="mt-3">Foto dari Pembeli</h5>
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                    <div class="col-lg-2 col-md-3 col-4 my-3">
                        <img src="img/ulasan1.jpg" alt="" srcset="" width="100%">
                    </div>
                </div>
                <div class="kualitas border border-light my-2">
                    <h5 class="text-center mt-3 ">Kualitas Produk</h5>
                    <div class="row justify-content-center text-center">
                        <div class="col-6">
                            <h1>5.0<small>/10</small></h1>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="border border-light">
                    <div class="komen p-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        <p>Oleh <b>Jaka</b> 01 Feb</p>
                        <p>Kualitas E-Book nya bagus</p>
                        <img src="img/ulasan1.jpg" alt="" width="10%">
                    </div>
                </div>
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