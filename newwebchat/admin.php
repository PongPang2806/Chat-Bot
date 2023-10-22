<?php
session_start();
require_once 'config/db.php';
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = ' Please log in!';
    header('location: signin.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CHATBOT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Information</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">information:</h6>

                        <a class="collapse-item" href="building/index.php">Building</a>
                        <a class="collapse-item" href="location/index.php">Location</a>
                        <a class="collapse-item" href="muslim/index.php">Halal food</a>
                        <a class="collapse-item" href="restaurant/index.php">Restaurant</a>
                        <a class="collapse-item" href="dessert/index.php">Dessert shop</a>
                        <a class="collapse-item" href="girlled_shabu/index.php">Grill shop</a>
                        <a class="collapse-item" href="nooldes/index.php">Noodle Shop</a>
                        <a class="collapse-item" href="pharmacy/index.php">Pharmacy</a>
                        <a class="collapse-item" href="room/index.php">Room</a>


                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="view_user.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                  
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php

                                if (isset($_SESSION['admin_login'])) {
                                    $admin_id = $_SESSION['admin_login'];
                                    $stmt = $conn->query("SELECT * FROM users WHERE id = $admin_id");
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                }
                                ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php echo $row['firstname'] . ' ' . $row['lastname'] ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="register.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Add Admin
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Dashboard Shows Data.</h1>
                    <p class="mb-4"> <!-- ตรงนี้สามารถใส่ข้อมูลที่เป็นตัวหนังสือได้ --> <a target="_blank"
                            href="https://www.chartjs.org/docs/latest/">
                            <!-- ตรงนี้สามารถใส่ข้อมูลที่เป็นตัวหนังสือได้ --> </a></p>

                    <!-- Content Row -->

                    <!-- ส่วนของ box เก็บจำนวน-->

                    <?php

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "db_chat";

                    try {
                        $conn = new PDO(
                            "mysql:host=$servername;dbname=$dbname",
                            $username,
                            $password
                        );
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        echo ""; //<!-- ตรงนี้สามารถใส่ข้อมูลที่เป็นตัวหนังสือได้ -->
                    } catch (PDOException $e) {
                        echo "Connection failed: " . $e->getMessage();
                    }

                    ?>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- ส่วน box จำนวนร้านอาหาร -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">

                                                Cafe</div>

                                            <?php
                                            $sql = "SELECT COUNT(*) as cafe FROM dessert_";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $fetct = $query->fetch();
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">


                                                <?= $fetct['cafe'] ?>


                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-cup-hot-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Building</div>
                                            <?php
                                            $sql = "SELECT COUNT(*) as number_of_buildings FROM building_";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $fetct = $query->fetch();
                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetct['number_of_buildings'] ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-building"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Halal
                                            </div>

                                            <?php
                                            $sql = "SELECT COUNT(*) as number_of_muslim FROM muslim_";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $fetct = $query->fetch();
                                            ?>

                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                                        <?= $fetct['number_of_muslim'] ?>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-shop-window"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Location</div>

                                            <?php
                                            $sql = "SELECT COUNT(*) as number_of_places FROM location_";
                                            $query = $conn->prepare($sql);
                                            $query->execute();
                                            $fetct = $query->fetch();
                                            ?>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= $fetct['number_of_places'] ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ส่วนของกราฟ -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-7">
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Shows the number of responses to the
                                        data.</h6>
                                </div>
                                <div class="card-body">
                                    <style type="text/css">
                                        .highcharts-figure,
                                        .highcharts-data-table table {
                                            min-width: 360px;
                                            max-width: 800px;
                                            margin: 1em auto;
                                            color: #ffc2d0;
                                            background-color: #AAC5D6;
                                        }
                                        .highcharts-data-table table {
                                            font-family: Verdana, sans-serif;
                                            border-collapse: collapse;
                                            text-align: center;
                                            width: 100%;
                                            max-width: 500px;
                                        }
                                        .highcharts-data-table caption {
                                            font-size: 1em;
                                            color: #555;
                                        }

                                        .highcharts-data-table th {
                                            font-weight: 600;
                                            padding: 0.5em;
                                        }

                                        .highcharts-data-table td,
                                        .highcharts-data-table th,
                                        .highcharts-data-table caption {
                                            padding: 0.5em;
                                        }

                                        .highcharts-data-table thead tr,
                                        .highcharts-data-table tr:nth-child(even) {
                                            background: #465B7F;
                                        }

                                        .highcharts-data-table tr:hover {
                                            background: #f1f7ff;
                                        }
                                    </style>
                                    </head>

                                    <body>
                                        <style>
                                            body {
                                                /* กำหนดพื้นหลังด้วยภาพ */
                                                background-image: url('2.jpg');
                                                /* กำหนดสไตล์การแสดงผลของพื้นหลัง */
                                                background-repeat: no-repeat;
                                                /* ไม่ซ้ำภาพ */
                                                background-size: cover;
                                                /* ปรับขนาดภาพให้เต็มพื้นที่หน้าจอ */
                                            }
                                        </style>




                                        <script src="webchat/highcharts.js"></script>
                                        <script src="webchat/modules/series-label.js"></script>
                                        <script src="webchat/modules/exporting.js"></script>
                                        <script src="webchat/modules/export-data.js"></script>
                                        <script src="webchat/modules/accessibility.js"></script>

                                        <figure class="highcharts">
                                            <div id="container"></div>
                                            <br>
                                            <p class="highcharts-description">
                                                Displays the number of answers to questions from highest to lowest.
                                                <code></code>
                                            </p>
                                        </figure>


                                        <?php
                                        //เชื่อมต่อฐานข้อมูล
                                        $conn = mysqli_connect("localhost", "root", "", "db_chat");
                                        //ให้แสดงผลภาษาไทยได้ โดยกำหนด charset เป็น utf-8
                                        mysqli_set_charset($conn, "utf8");

                                        $sql = "SELECT intent,COUNT(*) AS intent1 
FROM conversation_history 
GROUP BY intent  
ORDER BY intent1 DESC
LIMIT 10";
                                        $result = mysqli_query($conn, $sql);

                                        $proName = array();
                                        $proNum = array();
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $proName[] = $row['intent'];
                                            $proNum[] = $row['intent1'];
                                        }
                                        ?>



                                        <script type="text/javascript">
                                            Highcharts.chart('container', {

                                                chart: {
                                                    type: 'column',
                                                    type: 'line',
                                                    align: 'left'
                                                },
                                                title: {
                                                    text: 'Report on the number of responses - questions CHATBOT',
                                                    align: 'left'
                                                },

                                                subtitle: {
                                                    text: '',

                                                    align: 'left'
                                                },

                                                yAxis: {
                                                    title: {
                                                        text: 'Number of INTENTs that were responded to.'
                                                    }
                                                },

                                                xAxis: {
                                                    categories: [<?php echo "'" . implode("','", $proName) . "'"; ?>]
                                                },

                                                legend: {
                                                    layout: 'vertical',
                                                    align: 'right',
                                                    verticalAlign: 'middle'
                                                },



                                                series: [{
                                                    name: 'INTENT',
                                                    data: [<?php echo implode(",", $proNum); ?>]
                                                }],

                                                responsive: {
                                                    rules: [{
                                                        condition: {
                                                            maxWidth: 500
                                                        },
                                                        chartOptions: {
                                                            legend: {
                                                                layout: 'horizontal',
                                                                align: 'center',
                                                                verticalAlign: 'bottom'
                                                            }
                                                        }
                                                    }]
                                                }

                                            });

                                        </script>

                                </div>
                            </div>



                            <!-- Donut Chart -->

                        </div>

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>CHATBOT</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
        <script src="js/demo/chart-bar-demo.js"></script>



</body>

</html>