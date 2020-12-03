<?php

session_start();
if(!($_SESSION['is_login']))
{
    header('location:page-login.php');
}

include_once('db_connect.php');
$database = new database();

$payments = $database->getPayment();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>FoodMarket - Responsive Admin Dashboard Template</title>

        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" /><!-- Custom box css -->
        <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">

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
                                <h4 class="page-title">Payment Management</h4>
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
                        	<li class="text-muted menu-title">Navigation</li>

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
                                    <li><a href="food_category.php">Food Category</a></li>
                                    <li><a href="food_category.php">Food Category</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-other.html">Other Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="users.php" class="waves-effect"><i class="mdi mdi-users"></i><span> users </span></a>
                            </li>

                            <li>
                                <a href="payment.php" class="waves-effect"><i class="mdi mdi-email"></i><span class="badge badge-purple pull-right">New</span><span> Mail </span></a>
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
                                    <li><a href="extras-email-template.html">Email template</a></li>
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
                        <div class="col-xl-12">
                            <div class="card-box">
                                <!--  Modal content for the above example -->
                                <div class="modal fade bs-add-payment-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Tambah Metode Pembayaran</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <form role="form" method="post" class="form-add-payment">
                                                        <div class="form-group">
                                                            <label for="add-payment">Payment</label>
                                                            <input type="hidden" name="add-item" value="PAYMENT" />
                                                            <input type="text" class="form-control" name="payment" id="add-payment" aria-describedby="emailHelp" placeholder="Metode Pembayaran">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-account-name">Nama Akun</label>
                                                            <input id="add-account-name" class="form-control" name="account_name" placeholder="Nama akun">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-account-number">Nomor Akun</label>
                                                            <input type="number" class="form-control" name="account_number" id="add-account-number" placeholder="Nomor akun pembayaran">
                                                        </div>
                                                        <div class="form-group text-right m-b-0">
                                                            <button class="btn btn-primary waves-effect waves-light" onclick="addPayment()" type="submit">
                                                                Tambah
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5" data-dismiss="modal" aria-hidden="true">
                                                                Batal
                                                            </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->



                                <h4 class="header-title mt-0 m-b-15">Data Metode Pembayaran</h4>
                                <button type="button" class="btn btn-primary waves-effect w-md waves-light m-b-15" data-toggle="modal" data-target=".bs-add-payment-modal-lg">Tambah Data</button>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Metode Pembayaran</th>
                                                <th>Nama Akun</th>
                                                <th>Nomor Akun</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = 1;
                                            while ($payment = mysqli_fetch_assoc($payments)) {
                                            ?>
                                                <tr>
                                                    <td><?= $number++; ?></td>
                                                    <td><?= $payment['payment'] ?></td>
                                                    <td><?= $payment['account_name'] ?></td>
                                                    <td><?= $payment['account_number'] ?></td>
                                                    <td>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-danger" id="deletepayment" onclick="deletePayment(<?= $payment['id_payment'] ?>)"><i class="fa fa-remove"></i></a>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-warning" id="updatepayment" data-toggle="modal" data-target="#bs-update-payment-modal-lg<?= $payment['id_payment'] ?>"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>

                                                <!--  Modal content for the above example -->
                                                <div class="modal fade " id="bs-update-payment-modal-lg<?= $payment['id_payment'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Update metode pembayaran</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" class="form-update-payment">
                                                                        <?php
                                                                        $id = $payment['id_payment'];
                                                                        $paymentEdit = $database->getPaymentById($id);
                                                                        while ($selectedPayment = mysqli_fetch_array($paymentEdit)) {
                                                                        ?>
                                                                            <div class="form-group">
                                                                                <label for="update-payment">Metode Pembayaran</label>
                                                                                <input type="hidden" name="update-item" value="PAYMENT" />
                                                                                <input type="hidden" name="id_payment" value="<?php echo $selectedPayment['id_payment'] ?>" />
                                                                                <input type="text" class="form-control" name="payment" id="update-payment" aria-describedby="emailHelp"  value="<?= $selectedPayment['payment'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="update-account-name">Nama Akun</label>
                                                                                <input id="update-account-name" class="form-control" name="account_name" value="<?= $selectedPayment['account_name'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="update-account-number">Nomor Akun/</label>
                                                                                <input type="number" class="form-control" name="account_number" id="update-account-number" value="<?= $selectedPayment['account_number'] ?>">
                                                                            </div>
                                                                            <div class="form-group text-right m-b-0">
                                                                                <button class="btn btn-primary waves-effect waves-light" type="submit" onclick="updatePayment()">
                                                                                    Update
                                                                                </button>
                                                                                <button type="reset" class="btn btn-secondary waves-effect waves-light m-l-5" data-dismiss="modal" aria-hidden="true">
                                                                                    Batal
                                                                                </button>
                                                                            </div>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div><!-- end col-->


                    </div>
                    <!-- end row -->
                    </div> <!-- container -->

                </div> <!-- content -->

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
        

        function updatePayment() {
            var data = $('.form-update-payment').serialize();
            console.log(data);
            $.ajax({
                type: "POST",
                url: "update.php",
                data: data,

                success: function(data) {
                    swal(
                        'Sukses!',
                        'Berhasil mengubah Data.',
                        'success'
                    );
                },
                error: function(xhr) {
                    swal(
                        'Failed',
                        'Gagal mengubah data!',
                        'error'
                    )
                }
            });

        };

        function addPayment() {
            var data = $('.form-add-payment').serialize();
            console.log(data);
            $.ajax({
                type: "POST",
                url: "input.php",
                data: data,

                success: function(data) {
                    swal(
                        'Sukses!',
                        'Berhasil menambah Data.',
                        'success'
                    );
                },
                error: function(xhr) {
                    swal(
                        'Failed',
                        'Gagal menghapus data!',
                        'error'
                    )
                }
            });

        };

        function deletePayment(paymentId) {
            swal({
                title: 'Apakah anda yakin ingin menghapus ini?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4fa7f3',
                cancelButtonColor: '#d57171',
                confirmButtonText: 'Yes, delete it!'
            }).then(function() {
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {id:paymentId, delete_item: "PAYMENT"},
                    
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