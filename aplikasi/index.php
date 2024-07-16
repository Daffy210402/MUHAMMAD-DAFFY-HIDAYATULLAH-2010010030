<?php 
if (!file_exists('conf/koneksi.php')){
    ?>
    <html>
    <head>
        <title>Welcome</title>
        <script type="text/javascript">
            var counter = 5;
            function countDown() {
                if (counter >= 0) {
                    document.getElementById("timer").innerHTML = counter;
                }
                counter -= 1; 
                setTimeout(countDown, 1000);
            }
        </script>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(to right, #ff7e5f, #feb47b);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                animation: backgroundAnimation 5s infinite alternate;
            }
            @keyframes backgroundAnimation {
                0% { background: linear-gradient(to right, #ff7e5f, #feb47b); }
                100% { background: linear-gradient(to right, #feb47b, #ff7e5f); }
            }
            #warning {
                background-color: #fff;
                color: #d9534f;
                padding: 30px;
                width: 400px;
                border: 2px solid #d9534f;
                border-radius: 10px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
                text-align: center;
                animation: fadeIn 1s ease-in-out, shake 0.5s;
            }
            @keyframes shake {
                0%, 100% { transform: translateX(0); }
                25% { transform: translateX(-5px); }
                50% { transform: translateX(5px); }
                75% { transform: translateX(-5px); }
            }
            #warning h5 {
                margin: 0 0 15px 0;
                font-size: 24px;
            }
            #warning img {
                margin: 20px 0;
                width: 50px;
                height: 50px;
                animation: rotate 2s linear infinite;
            }
            @keyframes rotate {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
        </style>
    </head>
    <body onload="countDown()">
        <div id="warning">
            <h5>PERINGATAN!</h5>
            <p>File: koneksi.php tidak ditemukan, silahkan lakukan instalasi terlebih dahulu</p>
            <img src="install/images/progress.gif" alt="Progress">
            <p><span id="timer">5</span> detik</p>
        </div>
        <meta http-equiv="refresh" content="5;install/install.php">
    </body>
    </html>
    <?php
    } else {
        ?>
        <?php 
        include 'conf/koneksi.php';
        if (isset($_POST['masuk'])) {
            include 'conf/masuk.php';

        } else {

        }
        ?>

        <!DOCTYPE html> 
        <html lang="en" dir="ltr">

        <head>

            <!-- META DATA -->
            <meta charset="UTF-8">
            <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- FAVICON -->
            <link rel="shortcut icon" type="image/x-icon" href="modul/internal/logo.png" />

            <!-- TITLE -->
            <title><?=$apk;?></title>

            <!-- BOOTSTRAP CSS -->
            <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

            <!-- STYLE CSS -->
            <link href="assets/css/style.css" rel="stylesheet" />
            <link href="assets/css/dark-style.css" rel="stylesheet" />
            <link href="assets/css/transparent-style.css" rel="stylesheet">
            <link href="assets/css/skin-modes.css" rel="stylesheet" />

            <!--- FONT-ICONS CSS -->
            <link href="assets/css/icons.css" rel="stylesheet" />

            <!-- COLOR SKIN CSS -->
            <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/colors/color1.css" />

        </head>

        <body class="app sidebar-mini ltr login-img">

            <!-- BACKGROUND-IMAGE -->
            <div class="">

                <!-- GLOABAL LOADER -->
                <div id="global-loader">
                    <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
                </div>
                <!-- /GLOABAL LOADER -->

                <!-- PAGE -->
                <div class="page">
                    <div class="">

                        <!-- CONTAINER OPEN -->
                        <div class="col col-login mx-auto mt-7">
                            <div class="text-center">
                                <img src="modul/internal/logo.png" width="60px">
                                <h4 style="color: white; font-weight: bold;"><?=$apk;?></h4>
                            </div>
                        </div>

                        <div class="container-login100">
                            <div class="wrap-login100 p-6">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class="mx-0"><a href="#masuk" class="active" data-bs-toggle="tab">Masuk</a></li>
                                               <!-- <li class="mx-0"><a href="#daftar" data-bs-toggle="tab">Daftar</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body p-0 pt-5">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="masuk">
                                                <form method="POST">
                                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password">
                                                    </div>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn btn-primary" name="masuk">
                                                            Masuk
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="daftar">
                                                <form method="POST">
                                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="text" placeholder="Email" name="email">
                                                    </div>
                                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                        <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="password" placeholder="Password" name="password">
                                                    </div>
                                                    <div class="container-login100-form-btn">
                                                        <button class="login100-form-btn btn-primary" name="daftar">
                                                            Daftar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- CONTAINER CLOSED -->
                    </div>
                </div>
                <!-- End PAGE -->

            </div>
            <!-- BACKGROUND-IMAGE CLOSED -->

            <!-- JQUERY JS -->
            <script src="assets/js/jquery.min.js"></script>

            <!-- BOOTSTRAP JS -->
            <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

            <!-- SHOW PASSWORD JS -->
            <script src="assets/js/show-password.min.js"></script>

            <!-- GENERATE OTP JS -->
            <script src="assets/js/generate-otp.js"></script>

            <!-- Perfect SCROLLBAR JS-->
            <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

            <!-- Color Theme js -->
            <script src="assets/js/themeColors.js"></script>

            <!-- CUSTOM JS -->
            <script src="assets/js/custom.js"></script>

        </body>

        </html>
        <?php } ?>