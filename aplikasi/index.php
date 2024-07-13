<?php 
include 'conf/koneksi.php';
if (isset($_POST['masuk'])) {
    include 'conf/masuk.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$apk;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="images/Setting/<?=$setting['logo_kantor'];?>" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="card">
            <div class="row align-items-center text-center">
                <div class="col-md-12">
                    <form method="POST">
                        <div class="card-body">
                            <img src="images/Setting/<?=$setting['logo_kantor'];?>" width="90px" alt="" class="img-fluid mb-4">
                            <h5 class="mb-3 f-w-400"><?=$setting['nama'];?></h5>
                            <div class="form-group mb-3">
                                <label class="floating-label" for="Email">Username/No Whatsapp</label>
                                <input type="text" class="form-control" id="Email" name="username" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <label class="floating-label" for="Password">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" placeholder="">
                            </div>
                            <div class="form-group mb-4">
                                <img src="modul/captcha/generate.php" alt="gambar" />
                                <input class="form-control" name="kode" value="" placeholder="kode captcha"/>
                                <input type="hidden" class="form-control" id="capcha" name="capcha"  value="<?=$_SESSION['code']; ?>">
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
                            </div>
                            <button class="btn btn-block btn-danger mb-4" name="masuk">Masuk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/ripple.js"></script>
<script src="assets/js/pcoded.min.js"></script>



</body>

</html>