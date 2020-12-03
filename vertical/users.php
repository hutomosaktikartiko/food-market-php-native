
<?php

session_start();
if(!($_SESSION['is_login']))
{
    header('location:page-login.php');
}

include_once('db_connect.php');
$database = new database();

$users = $database->getUser();

if (isset($_POST['submit-update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $lastImage = $_POST['lastImage'];
    $image = $_FILES['image'];
    $result = $database->updateUser($id, $name, $email, $address, $phone_number, $image, $lastImage);
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>FoodMarket - Users Management</title>

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
                                <h4 class="page-title">Users Management</h4>
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
                                <h4 class="header-title mt-0 m-b-15">Data Users</h4>
                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>No Hp</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = 1;
                                            while ($user = mysqli_fetch_assoc($users)) {
                                            ?>
                                                <tr>
                                                    <td><?= $number++; ?></td>
                                                    <td><?= $user['name'] ?></td>
                                                    <td><?= $user['email'] ?></td>
                                                    <td><?= $user['phone_number'] ?></td>
                                                    <td><?= $user['address'] ?></td>
                                                    <td class="w-25">
                                                        <div class="card m-b-20">
                                                            <img class="card-img-top img-fluid img-thumbnail" src="assets/images/database/<?php echo $user['picture_path'] ?>" alt="Card image cap">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a type="button" class="btn btn-light waves-effect waves-li==ght btn-danger" id="deleteuser" onclick="deleteFood(<?= $user['id'] ?>)"><i class="fa fa-remove"></i></a>
                                                        <a type="button" class="btn btn-light waves-effect waves-light btn-warning" id="updateuser" data-toggle="modal" data-target="#bs-update-user-modal-lg<?= $user['id'] ?>"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>

                                                <!--  Modal content for the above example -->
                                                <div class="modal fade " id="bs-update-user-modal-lg<?= $user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Update User</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="col-md-12">
                                                                    <form role="form" method="post" class="form-update-food" enctype="multipart/form-data">
                                                                        <?php
                                                                        $id = $user['id'];
                                                                        $userEdit = $database->getUserById($id);
                                                                        while ($selectedUser = mysqli_fetch_array($userEdit)) {
                                                                        ?>
                                                                            <div class="form-group">
                                                                                <label for="judul">Nama</label>
                                                                                <input type="hidden" name="update-item" value="USER" />
                                                                                <input type="hidden" name="id" value="<?php echo $selectedUser['id'] ?>" />
                                                                                <input type="hidden" name="lastImage" value="<?php echo $selectedUser['picture_path'] ?>" />
                                                                                <input type="text" class="form-control" name="name" id="judul" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="<?= $selectedUser['name'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="email">Email</label>
                                                                                <input id="email" class="form-control" name="email"  value="<?= $selectedUser['email'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="address">Alamat</label>
                                                                                <input type="text" class="form-control" name="address" id="address" value="<?= $selectedUser['address'] ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="phone-number">Nomor Handphone</label>
                                                                                <input type="number" class="form-control" name="phone_number" id="phone-number" placeholder="Nomor handphone aktif" value="<?= $selectedUser['phone_number'] ?>">
                                                                            </div>
                                                                            <div class="card m-b-20">
                                                                                <img class="card-img-top img-fluid" src="assets/images/database/<?= $selectedUser['picture_path'] ?>" alt="Card image cap">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="new-image">Foto baru</label>
                                                                                <input type="file" class="form-control" name="image" id="new-image" placeholder="Foto baru" require>
                                                                            </div>
                                                                            <div class="form-group text-right m-b-0">
                                                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit-update">
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

    <!-- Sweet Alert Js  -->
    <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
    <script src="assets/pages/jquery.sweet-alert.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
        function deleteFood(userId) {
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
                    data: {
                        id: userId,
                        delete_item: "USER"
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

        function updateFood() {
            var data = $('.form-update-food').serialize();
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