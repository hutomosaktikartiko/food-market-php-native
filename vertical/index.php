<?php
include_once('db_connect.php');
$database = new database();
    session_start();
	if(!isset($_SESSION['is_login']))
    {
      header('location:page-login.php');
    }

    $foods = $database->getFood();
    $food_total = mysqli_num_rows($foods);

    $food_category = $database->getFoodCategory();
    $food_category_total = mysqli_num_rows($food_category);

    $transactions = $database->getTransactions();
    $transaction_total = mysqli_num_rows($transactions);

    $users = $database->getUser();
    $user_total = mysqli_num_rows($users);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Admin - Food Market</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                <a href="index.php" class="logo"><span>Admin<span>to</span></span><i class="mdi mdi-layers"></i></a>
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
                            <h4 class="page-title">Dashboard</h4>
                        </li>
                    </ul>

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li>
                                <div class="dropdown pull-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-settings"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="logout.php" class="dropdown-item" id="sa-warning">Log Out</a>
                                        <!-- <button type="button" class="btn btn-light waves-effect waves-light btn-sm" id="sa-warning">Click me</button> -->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
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
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
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
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-draggable-cards.html">Draggable Cards</a></li>
                                <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                                <li><a href="ui-material-icons.html">Material Design Icons</a></li>
                                <li><a href="ui-font-awesome-icons.html">Font Awesome</a></li>
                                <li><a href="ui-dripicons.html">Dripicons</a></li>
                                <li><a href="ui-themify-icons.html">Themify Icons</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-notification.html">Notification</a></li>
                                <li><a href="ui-range-slider.html">Range Slider</a></li>
                                <li><a href="ui-components.html">Components</a>
                                <li><a href="ui-sweetalert.html">Sweet Alert</a>
                                <li><a href="ui-treeview.html">Tree view</a>
                                <li><a href="ui-widgets.html">Widgets</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-texture"></i><span class="badge badge-warning pull-right">7</span><span> Forms </span> </a>
                            <ul class="list-unstyled">
                                <li><a href="form-elements.html">General Elements</a></li>
                                <li><a href="form-advanced.html">Advanced Form</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-fileupload.html">Form Uploads</a></li>
                                <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                <li><a href="form-xeditable.html">X-editable</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-list"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-donut-variant"></i><span> Food </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="food.php">Food</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chart-chartist.html">Chartist Food</a></li>
                                <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="chart-other.html">Other Chart</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                        </li>

                        <li>
                            <a href="inbox.html" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="page-starter.html">Starter Page</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-recoverpw.html">Recover Password</a></li>
                                <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                <li><a href="page-404.html">Error 404</a></li>
                                <li><a href="page-500.html">Error 500</a></li>
                            </ul>
                        </li>

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span>Extra Pages </span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled">
                                <li><a href="extras-projects.html">Projects</a></li>
                                <li><a href="extras-tour.html">Tour</a></li>
                                <li><a href="extras-taskboard.html">Taskboard</a></li>
                                <li><a href="extras-taskdetail.html">Task Detail</a></li>
                                <li><a href="extras-profile.html">Profile</a></li>
                                <li><a href="extras-maps.html">Maps</a></li>
                                <li><a href="extras-contact.html">Contact list</a></li>
                                <li><a href="extras-pricing.html">Pricing</a></li>
                                <li><a href="extras-timeline.html">Timeline</a></li>
                                <li><a href="extras-invoice.html">Invoice</a></li>
                                <li><a href="extras-faq.html">FAQ</a></li>
                                <li><a href="extras-gallery.html">Gallery</a></li>
                                <!-- <li><a href="extras-email-template.html">Email template</a></li> -->
                                <li><a href="extras-maintenance.html">Maintenance</a></li>
                                <li><a href="extras-comingsoon.html">Coming soon</a></li>
                            </ul>
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

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">


                                <h4 class="header-title mt-0 m-b-30">Total Food</h4>

                                <div class="widget-chart-1">

                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> <?= $food_total ?> </h2>
                                        <p class="text-muted m-b-10">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">


                                <h4 class="header-title mt-0 m-b-30">Food Kategori</h4>

                                <div class="widget-chart-1">

                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> <?= $food_category_total ?> </h2>
                                        <p class="text-muted m-b-10">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">

                                <h4 class="header-title mt-0 m-b-30">Total Transaksi</h4>

                                <div class="widget-chart-1">

                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> <?= $transaction_total ?> </h2>
                                        <p class="text-muted m-b-10">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box">


                                <h4 class="header-title mt-0 m-b-30">Total Users</h4>

                                <div class="widget-chart-1">

                                    <div class="widget-detail-1">
                                        <h2 class="p-t-10 mb-0"> <?= $user_total ?> </h2>
                                        <p class="text-muted m-b-10">Revenue today</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <h4 class="header-title mt-0 m-b-30">Transaksi Terbaru</h4>

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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $number = 1;
                                                while ($transaction = mysqli_fetch_assoc($transactions)) { 
                                            ?>
                                                <tr>
                                                    <td><?= $number++; ?></td>
                                                    <td><?= $transaction['food_id'] ?></td>
                                                    <td><?= $transaction['user_id'] ?></td>
                                                    <td>01/01/2017</td>
                                                    <td><?= $transaction['status_id'] ?></td>
                                                    <td><?= $transaction['payment_id'] ?></td>
                                                    <td><?= $transaction['total'] ?></td>
                                                    <td><?= $transaction['amount'] ?></td>
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

    <script>
        //Warning Message
        $('#logout-alert').click(function () {
            swal({
                title: 'Apakah kamu yakin ingin keluar?',
                text: "Anda harus login ulang untuk mengakses halaman ini!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4fa7f3',
                cancelButtonColor: '#d57171',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                logout.php;
            })
        });
    </script>


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

    <!-- KNOB JS -->
    <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

    <!-- Dashboard init -->
    <script src="assets/pages/jquery.dashboard.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

</body>

</html>