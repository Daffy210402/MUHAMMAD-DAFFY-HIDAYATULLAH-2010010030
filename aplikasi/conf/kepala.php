<?php 
include '../conf/koneksi.php';
$level          = $_SESSION['level'];
$id_user        = $_SESSION['id_user'];
$nama_user      = $_SESSION['nama_user'];
    include 'beranda/coding.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$apk;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="../images/Setting/<?=$setting['logo_kantor'];?>" type="image/x-icon">
    <!-- select2 css -->
    <link rel="stylesheet" href="../assets/css/plugins/select2.min.css">
    <!-- data tables css -->
    <link rel="stylesheet" href="../assets/css/plugins/dataTables.bootstrap4.min.css">
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="../assets/css/plugins/dropzone.min.css">    
    <!-- vendor css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Maps -->
    <link rel="stylesheet" href="../modul/peta/leaflet.css" />
    <script src="../modul/peta/leaflet.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</head>
<body class="background-img-2">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

            <?php 
            if ($level == "Administrator") {
                include '../conf/Navigation/Administrator.php';
            }else if ($level == "Karyawan") {
                include '../conf/Navigation/Karyawan.php';
            }else if ($level == "Ketua") {
                include '../conf/Navigation/Ketua.php';
            }else{
                echo "<script>alert('Anda tidak memiliki Akses!');window.location='../index.php';</script>";
            }
            ?>

    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
        
            
                <div class="m-header">
                    <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
                    <a href="#!" class="b-brand">
                        <!-- ========   change your logo hear   ============ -->
                        <h3 style="font-family: 'Nunito', 'Segoe UI', arial; color: white; letter-spacing: 1.5px; font-weight: 600; font-size: 20px; text-transform: uppercase; text-decoration: none;"><center>SIMPEG</center></h3>
                        
                    </a>
                    <a href="#!" class="mob-toggler">
                        <i class="feather icon-more-vertical"></i>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                          
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li>
                            <div class="dropdown drp-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="feather icon-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-notification">
                                    <div class="pro-head">
                                        <img src="../modul/internal/user.png" class="img-radius" alt="User-Profile-Image">
                                        <span><?=$nama_user;?></span>
                                        <a href="../conf/keluar.php" class="dud-logout" title="Logout">
                                            <i class="feather icon-log-out"></i>
                                        </a>
                                    </div>
                                    <ul class="pro-body">
                                        <li><a href="ubahpassword.php" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
    </header>
    <!-- [ Header ] end -->
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?=$judul;?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
                            <?php if (isset($_GET['form'])): ?>
                                <li class="breadcrumb-item"><a href="#!"><?=$_GET['form'];?></a></li>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>