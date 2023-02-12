<?php include('../layouts/header.php');?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('../layouts/navbar.php');?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <?php include('../layouts/sidebarnav.php');?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Welcome to the Admin Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Users</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Total Users: 100</h5>
                                    <p class="card-text">
                                        Here you can view information about all the users of the system.
                                    </p>
                                    <a href="#" class="btn btn-primary">View Users</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header border-0">
                                    <h3 class="card-title">Settings</h3>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">System Settings</h5>
                                    <p class="card-text">
                                        Here you can manage the settings for the system.
                                    </p>
                                    <a href="#" class="btn btn-primary">Manage Settings</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- Main Footer -->
        <?php include('../layouts/footer.php');?>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?php include('../layouts/script.php');?>

</body>

</html>