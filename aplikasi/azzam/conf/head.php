<?php 
include 'azzam/conf/koneksi.php';
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title><?=$judul;?></title>
    <link rel="apple-touch-icon" href="azzam/app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="azzam/app-assets/images/favicon/favicon-32x32.png">
 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/css/themes/vertical-dark-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/css/themes/vertical-dark-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/css/pages/data-tables.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="azzam/app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-light">
                <div class="nav-wrapper">
                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="azzam/app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                    </ul>

                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">lock_outline</i> Password</a></li>
                        <li class="divider"></li>
                        <li><a class="grey-text text-darken-1" href="../azzam/conf/keluar.php"><i class="material-icons">keyboard_tab</i> Keluar</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END: Header-->

<?php 
    include 'azzam/conf/menu.php';
 ?>