<?php

if (!(isset($_GET['urutkan']))) {
    $sort = "terbaru";
} else {
    $sort = $_GET['urutkan'];
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

    <title>FoodMarket - Makanan Berat <?= $sort ?></title>
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
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="front-end.html">Front End</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link " href="makanan_ringan.php">Makanan Ringan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navbar-brand2" href="makanan_berat.php">Makanan Berat</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="motivasi.html">Motivasi</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Makanan Berat</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12 border-right">
                <div class="dropdown my-3">
                    <h5><small>Urutkan Berdasarkan</small></h5>
                    <?php

                    include_once('db_connect.php');
                    $database = new database();

                    if ($sort == "termurah") {
                        $foods = $database->getFoodByCategory('Makanan Berat', 'price', 'ASC');
                        echo '<button class="btn btn-secondary dropdown-toggle bg-light text-dark" href="makanan_berat.php?urutkan=termurah" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Makanan Termurah
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="makanan_berat.php?urutkan=terbaru">Makanan Tebaru</a>
                        <a class="dropdown-item" href="makanan_berat.php?urutkan=termahal">Makanan Termahal</a>
                    </div>';
                    } else if ($sort == "termahal") {
                        $foods = $database->getFoodByCategory('Makanan Berat', 'price', 'DESC');
                        echo '<button class="btn btn-secondary dropdown-toggle bg-light text-dark" href="makanan_berat.php?urutkan=termahal" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Makanan Termahal
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                
                                <a class="dropdown-item" href="makanan_berat.php?urutkan=terbaru">Makanan Terbaru</a>
                                <a class="dropdown-item" href="makanan_berat.php?urutkan=termurah">Makanan Termurah</a>
                            </div>';
                    } else {
                        $foods = $database->getFoodByCategory('Makanan Berat', 'updated_at', 'DESC');
                        echo '<button class="btn btn-secondary dropdown-toggle bg-light text-dark" href="makanan_berat.php?urutkan=terbaru" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Makanan Terbaru
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="makanan_berat.php?urutkan=termurah">Makanan Termurah</a>
                                <a class="dropdown-item" href="makanan_berat.php?urutkan=termahal">Makanan Termahal</a>
                            </div>';
                    }

                    ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-12">
                <div class="card-columns row">
                    <?php

                    $number = 1;

                    while ($food = mysqli_fetch_assoc($foods)) {
                    ?>
                        <div class="card col-lg-3 col-md-4 col-6">
                            <a href="food_detail.php" class="text-decoration-none">
                                <img src="../admin/assets/images/database/<?= $food['picture_path'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $food['name_food'] ?></h5>
                                </div>
                                <div class="card-footer text-center font-weight-bold">
                                    <p class="text-muted">Rp <?= $food['price'] ?></p>
                                </div>
                            </a>
                        </div>
                    <?php } ?>

                </div>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-circle-left    "></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-circle-right    "></i></a>
                        </li>
                    </ul>
                </nav> -->
            </div>
        </div>
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