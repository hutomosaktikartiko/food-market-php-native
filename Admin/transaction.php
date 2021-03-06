<?php
include_once('db_connect.php');
$database = new database();

session_start();
if(!($_SESSION['is_login']))
{
    header('location:page-login.php');
}

$transactions = $database->getTransactions();
$transaction_total = mysqli_num_rows($transactions);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>FoodMarket - Transaction Management</title>

    <!-- Sweet Alert css -->
    <link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.php" class="logo"><span>Food<span>Market</span></span><i class="mdi mdi-layers"></i></a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <!-- Page title -->
                    <ul class="nav navbar-nav list-inline navbar-left">
                        <li class="list-inline-item">
                            <button class="button-menu-mobile open-left">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <h4 class="page-title">Transaction</h4>
                        </li>
                    </ul>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!-- User -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/database/<?= $_SESSION['image']; ?>" alt="user-img" title="<?= $_SESSION['name']; ?>" class="rounded-circle img-thumbnail img-responsive">
                    </div>
                    <h5><a href="#"><?= $_SESSION['name']; ?></a> </h5>

                </div>
                <!-- End User -->

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>

                        <li>
                            <a href="index.php" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                        </li>

                        <li>
                            <a href="transaction.php" class="waves-effect"><i class="mdi mdi-format-font"></i> <span> Transactions </span> </a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Food </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="food.php">Food</a></li>
                                <li><a href="food_category.php">Food Category</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="users.php" class="waves-effect"><i class="mdi mdi-account"></i><span> Users </span></a>
                        </li>

                        <li>
                            <a href="payment.php" class="waves-effect"><i class="mdi mdi-email"></i><span> Payment </span></a>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">

                                

                                <h4 class="header-title mt-0 m-b-30">Semua Transaksi</h4>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Food</th>
                                                <th>User</th>
                                                <th>Waktu</th>
                                                <th>Status</th>
                                                <th>Pembayaran</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = 1;
                                            while ($transaction = mysqli_fetch_assoc($transactions)) {
                                            ?>
                                                <tr>
                                                    <td><?= $number++; ?></td>
                                                    <td><?= $transaction['name_food'] ?></td>
                                                    <td><?= $transaction['name'] ?></td>
                                                    <td>01/01/2017</td>
                                                    <td><?= $transaction['status'] ?></td>
                                                    <td><?= $transaction['payment'] ?></td>
                                                    <td><?= $transaction['total'] ?></td>
                                                    <td><?= $transaction['amount'] ?></td>
                                                    <td>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-danger" id="deletetransaction" onclick="deleteTransaction(<?= $transaction['id_transaction'] ?>)"><i class="fa fa-remove"></i></a>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer text-right">
                2016 - 2018 © Adminto. Coderthemes.com
            </footer>

        </div>



    </div>
    <!-- END wrapper -->

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- Sweet Alert Js  -->
    <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="assets/pages/jquery.sweet-alert.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>

        function deleteTransaction(tableId) {
            var transactionId = tableId;
            swal({
                title: 'Apakah anda yakin ingin menghapus ini?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4fa7f3',
                cancelButtonColor: '#d57171',
                confirmButtonText: 'Yes, delete it!'
            }).then(function() {
                console.log(tableId);
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {id:tableId, delete_item: "TRANSACTION"},
                    
                    success: function(data) {
                        swal(
                            'Deleted!',
                            'Data berhasil dihapus.',
                            'success'
                        );
                        console.log(data);
                    },
                    error: function(xhr) {
                    }
                });


            });
        };
    </script>

</body>

</html>