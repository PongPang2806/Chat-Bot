<?php
session_start();
require_once '../config/db.php';
if (!isset($_SESSION['admin_login'])) {
    $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
    header('location: ../signin.php');
}
?>
<?php
       require_once "../building/connection.php";
       if (isset($_REQUEST['update_id'])) {
        try {
            $id = $_REQUEST['update_id'];
            $select_stmt = $conn->prepare('SELECT * FROM grilled_shabu WHERE id = :id');//เก็บตัวเเปรidที่สร้าขึ้นมาไว้ที่นี้และเลือกข้อมูลที่restaurant_
            $select_stmt->bindParam(":id", $id);//แทนที่ค่าตัวแปล
            $select_stmt->execute();
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);//ใช้ตัวแปลเข้าถึงข้อมูล
            
        } catch(PDOException $e) {
            $e->getMessage();
        }
    } 
    if (isset($_REQUEST['btn_update'])) {
        try{
            $name = $_REQUEST['txt_name'];
            $map_link = $_REQUEST['txt_map'];
            // $image_link = $_REQUEST['txt_imagek'];
            // $image_file = $_FILES['txt_file']['name'];
            // $type = $_FILES['txt_file']['type'];
            // $size = $_FILES['txt_file']['size'];
            // $temp = $_FILES['txt_file']['tmp_name'];
            // $path = "upload/".$image_file;
            // $directory = "upload/"; // set uplaod folder path for upadte time previos file remove and new file upload for next use

            // if ($image_file) {
            //     if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
            //         if (!file_exists($path)) { // check file not exist in your upload folder path
            //             if ($size < 5000000) { // check file size 5MB
            //                 unlink($directory.$row['image_file']); // unlink functoin remove previos file
            //                 move_uploaded_file($temp, 'upload/'.$image_file); // move upload file temperory directory to your upload folder อัพโหลดไฟล์ใหม่ไปที่temp
            //             } else {
            //                 $errorMsg = "Your file to large please upload 5MB size";
            //             }
            //         } else {
            //             $errorMsg = "File already exists... Check upload folder";
            //         }
            //     } else {
            //         $errorMsg = "Upload JPG, JPEG, PNG & GIF formats...";
            //     }
            // } else {
            //     $image_file = $row['image_file']; // if you not select new image than previos image same it is it.
            // }
            if (!isset($errorMsg)) {
                $update_stmt = $conn->prepare("UPDATE grilled_shabu SET name = :name_up,map_link = :map_up WHERE id = :id");
                $update_stmt->bindParam(':name_up', $name);
                $update_stmt->bindParam(':map_up', $map_link);
                // $update_stmt->bindParam(':imagek_up', $image_link);
                // $update_stmt->bindParam(':file_up', $image_file);
                $update_stmt->bindParam(':id', $id);
    
                if ($update_stmt->execute()) {
                    $updateMsg = "File update successfully...";
                    header("refresh:2;index.php");
                }
            }

        }catch(PDOException $e) {
            $e->getMessage();
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Grill Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>

 <!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CHATBOT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="../admin.php">
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
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Information</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">information:</h6>

            <a class="collapse-item" href="../building/index.php">Building</a>
                <a class="collapse-item" href="../location/index.php">Location</a>
                <a class="collapse-item" href="../muslim/index.php">Halal food</a>
                <a class="collapse-item" href="../restaurant/index.php">Restaurant</a>
                <a class="collapse-item" href="../dessert/index.php">Dessert shop</a>
                <a class="collapse-item" href="../girlled_shabu/index.php">Grill shop</a>
                <a class="collapse-item" href="../nooldes/index.php">Noodle Shop</a>
                <a class="collapse-item" href="../pharmacy/index.php">Pharmacy</a>
                <a class="collapse-item" href="../room/index.php">Room</a>
                
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item ">
        <a class="nav-link" href="../view_user.php">
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $row['firstname'] . ' ' . $row['lastname'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../register.php">
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
            <!-- DataTales Example -->
            <div class="card shadow mb-12">
                <div class="card-header py-12">
                    <h6 class="m-2 font-weight-bold text-primary">Data Grill Shop</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                             
                            <div class="container text-center">
                                
<div class="container text-center">
        <h1>Edit file page</h1>
        <?php
            if (isset($errorMsg)) {  
        ?>
            <div class="alert alert-danger">
                <strong><?php echo $errorMsg?></strong>
            </div>
        <?php } ?>

        <?php
            if (isset($updateMsg)) {
        ?>
            <div class="alert alert-success">
                <strong><?php echo $updateMsg?></strong>
            </div>
        <?php } ?>

        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <br>
            <div class="row">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input type="text" name="txt_name" class="form-control" value="<?php echo $name; ?>">
            </div>
            </div>
        </div>
        <!-- <div class="form-group">
            <br>
            <div class="row">
            <label for="name" class="col-sm-3 control-label">Image link</label>
            <div class="col-sm-9">
                <input type="text" name="txt_imagek" class="form-control" value="<?php echo $image_link; ?>">
            </div>
            </div>
        </div> -->
        <div class="form-group">
            <br>
            <div class="row">
            <label for="name" class="col-sm-3 control-label">Map link</label>
            <div class="col-sm-9">
                <input type="text" name="txt_map" class="form-control" value="<?php echo $map_link; ?>">
            </div>
            </div>
        </div>  
        <!-- <div class="form-group">
            <br>
            <div class="row">
            <label for="name" class="col-sm-3 control-label">Image</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file" class="form-control"value="<?php echo $image_file; ?>">
                <br>
                <p>
                    <img src="upload/<?php echo $image_file; ?>" height="100" width="100" alt="">
                </p>
            </div>
            </div>
        </div> -->
        <div class="form-group">
            <div class="col-sm-12">
                <br>
                <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
        </div>
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
                    <a class="btn btn-primary" href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>