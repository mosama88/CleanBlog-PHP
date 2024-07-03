<?php require_once("../../../App/config.php"); ?>
<!DOCTYPE html>
<html>

<head>

    <?php include('../inc/head.php'); ?>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include('../inc/navbar.php'); ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?php echo URL . "public/dashboard/" ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <?php include('../inc/sidebar.php'); ?>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <?php include('../inc/page-header.php'); ?>

            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6 mx-auto">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">أضافة منتج</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo URL . "Controllers/dashboard/categories/store.php"; ?>" method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">أضافة منتج</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="أضف منتجك">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">تأكيد</button>
                                    </div>
                            </div>
                            <!-- /.card-body -->


                            </form>
                        </div>
                        <!-- /.card -->




                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include('../inc/footer.php'); ?>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <?php include('../inc/scripts.php'); ?>
</body>

</html>