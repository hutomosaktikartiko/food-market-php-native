<?php
include_once('db_connect.php');
$database = new database();

$categorys = $database->getFoodCategory();

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!-- Sweet Alert css -->
    <link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/chartist/dist/chartist.min.css">

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
                            <h4 class="page-title">Food Category</h4>
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
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                        <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                    </div>
                    <h5><a href="#">Mat Helme</a> </h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="mdi mdi-settings"></i>
                            </a>
                        </li>

                        <li class="list-inline-item">
                            <a href="#" class="text-custom">
                                <i class="mdi mdi-power"></i>
                            </a>
                        </li>
                    </ul>
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
                                <div class="modal fade bs-add-food-category-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Tambah Food Category</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-md-12">
                                                    <form role="form" method="post" class="form-add-food-category">
                                                        <div class="form-group">
                                                            <label for="category">Category</label>
                                                            <input type="hidden" name="add-item" value="FOOD-CATEGORY" />
                                                            <input type="text" class="form-control" name="category" id="category" aria-describedby="emailHelp" placeholder="Nama categori">
                                                        </div>
                                                        <div class="form-group text-right m-b-0">
                                                            <button class="btn btn-primary waves-effect waves-light" onclick="addFoodCategory()" type="submit">
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



                                <h4 class="header-title mt-0 m-b-15">Data Food</h4>
                                <button type="button" class="btn btn-primary waves-effect w-md waves-light m-b-15" data-toggle="modal" data-target=".bs-add-food-category-modal-lg">Tambah Data</button>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama Categori</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = 1;
                                            while ($category = mysqli_fetch_assoc($categorys)) {
                                            ?>
                                                <tr>
                                                    <td><?= $number++; ?></td>
                                                    <td><?= $category['name_category'] ?></td>
                                                    <td>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-danger" id="deletefoodcategory" onclick="deleteFoodCategory(<?= $category['id_food_category'] ?>)"><i class="fa fa-remove"></i></a>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-warning" id="updatetransaction" data-toggle="modal" data-target="#bs-update-food-modal-lg<?= $category['id_food_category'] ?>"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>

                                                <!--  Modal content for the above example -->
                                                <div class="modal fade " id="bs-update-food-modal-lg<?= $category['id_food_category'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Update Food Category</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" class="form-update-food-category">
                                                                        <?php
                                                                        $id = $category['id_food_category'];
                                                                        $categorysEdit = $database->getFoodCategoryById($id);
                                                                        while ($categoryEdit = mysqli_fetch_array($categorysEdit)) {
                                                                        ?>
                                                                            <div class="form-group">
                                                                                <label for="judul">Categori</label>

                                                                                <input type="hidden" name="update-item" value="FOOD-CATEGORY" />
                                                                                <input type="hidden" name="id" value="<?php echo $categoryEdit['id_food_category'] ?>" />
                                                                                <input type="text" class="form-control" name="category" id="judul" aria-describedby="emailHelp" placeholder="Nama categori" value="<?= $categoryEdit['name_category'] ?>">
                                                                            </div>


                                                                            <div class="form-group text-right m-b-0">
                                                                                <button class="btn btn-primary waves-effect waves-light" onclick="updateFoodCategory()" type="submit">
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

    <!--Chartist Chart-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/pages/jquery.chartist.init.js"></script>

    <!-- Sweet Alert Js  -->
    <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="assets/pages/jquery.sweet-alert.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        function deleteFoodCategory(foodId) {
            swal({
                title: 'Apakah anda yakin ingin menghapus ini?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4fa7f3',
                cancelButtonColor: '#d57171',
                confirmButtonText: 'Yes, delete it!'
            }).then(function() {
                console.log(foodId);
                $.ajax({
                    type: "POST",
                    url: "delete.php",
                    data: {
                        id: foodId,
                        delete_item: "FOOD-CATEGORY"
                    },


                    success: function(data) {
                        swal(
                            'Deleted!',
                            'Data berhasil dihapus.',
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
            });

        };

        function addFoodCategory() {
            var data = $('.form-add-food-category').serialize();
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

        function updateFoodCategory() {
            var data = $('.form-update-food-category').serialize();
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
    </script>

</body>

</html>