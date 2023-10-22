<?php
session_start();
require_once 'config/db.php';
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: signin.php');
}
?>
<?php
    require_once 'db.php'; //เชื่อมดาต้าเบส
    if (isset($_REQUEST['delete_id'])) {
        $id = $_REQUEST['delete_id'];//ลบid
    
        $select_stmt = $conn->prepare('SELECT * FROM location_ WHERE id = :id');//ตัวแปรเก็บidเลือกข้อมูล
        $select_stmt->bindParam(':id', $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
         // unlink("upload/".$row['image_file']); // unlin functoin permanently remove your file
    
        // delete an original record from db
        $delete_stmt = $conn->prepare('DELETE FROM location_ WHERE id = :id');
        $delete_stmt->bindParam(':id', $id);
        $delete_stmt->execute();
    
        header("location_: index.php");
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

    <title>CHATBOT</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<html>
<head>
    <title>แสดงข้อมูลจาก MySQL ในรูปแบบตาราง</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // ข้อมูลในการเชื่อมต่อฐานข้อมูล MySQL   
    $servername = "localhost";
    $username = "root"; // แก้ไขเป็นชื่อผู้ใช้ของคุณ
    $password = ""; // แก้ไขเป็นรหัสผ่านของคุณ
    $dbname = "db_chat"; // แก้ไขเป็นชื่อฐานข้อมูลที่คุณต้องการใช้

    // สร้างการเชื่อมต่อฐานข้อมูล
    $conn = new mysqli($servername, $username, $password, $dbname);

    // ตรวจสอบการเชื่อมต่อ
    if ($conn->connect_error) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
    }

    // ส่งคำสั่ง SQL เพื่อดึงข้อมูล
    $sql = "SELECT firstname,lastname,email,urole,created_at FROM users"; // แก้ไขเป็นชื่อตารางที่คุณต้องการดึงข้อมูล
    $result = $conn->query($sql);

   
    ?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="view_user.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CHATBOT</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
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
            <li class="nav-item active">
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
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

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
                                
                                $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :admin_id");
                                $stmt->bindParam(':admin_id', $admin_id, PDO::PARAM_INT);
                                $stmt->execute();
                                
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            }
                            ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                    <h1 class="h3 mb-2 text-gray-800,m-2 font-weight-bold text-primary">DATA USERS</h1>
                    <p class="mb-4"><!-- สามารถใส่ข้อความได้ตรงนี้ --> <a target="_blank"
                            href="https://datatables.net"><!-- สามารถใส่ข้อความได้ตรงนี้ --></a></p>
                            

                    <!-- DataTales Example -->
                    <div class="card shadow mb-12">
                        <div class="card-header py-12">
                            <h6 class="text-xs font-weight-bold text-info text-uppercase mb-1">Table showing Users</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                     <thead>

                                    

                                     <?php
                    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($result->num_rows > 0) {
        // แสดงผลในรูปแบบของตาราง
        echo "<table>";
        echo "<tr>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>urole</th>
                <th>created_at</th>
                </tr>"; // แก้ไขตามคอลัมน์ในตารางของคุณ

        // วนลูปแสดงข้อมูล
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["firstname"] . "</td>"; // แก้ไขตามคอลัมน์ในตารางของคุณ
            echo "<td>" . $row["lastname"] . "</td>"; // แก้ไขตามคอลัมน์ในตารางของคุณ
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["urole"] . "</td>";
            echo "<td>" . $row["created_at"] . "</td>"; // แก้ไขตามคอลัมน์ในตารางของคุณ
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "ไม่พบข้อมูลในตาราง";
    }
    ?>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> <!-- สามารถเขียนข้อความล่างสุดได้ตรงนี้ --></span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    

</body>

</html>