<?php 
$judul = "Ubah Password";
include '../conf/kepala.php';

?>
<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                    <form method="POST" action="beranda/ubahpassword.php" enctype="multipart/form-data">
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Password Lama</label>
                                    <input id="passwordlama" class="form-control" type="text" name="passwordlama" placeholder="Masukkan Password Lama" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Password Baru</label>
                                    <input id="passwordbaru" class="form-control" type="text" name="passwordbaru" placeholder="Masukkan Password Baru" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Verifikasi Password</label>
                                    <input id="ulangpassword" class="form-control" type="text" name="ulangpassword" placeholder="Masukkan Verifikasi Password" required>
                                </div>
                            </div>    
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn btn-primary" style="float: right;">Ubah Password</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </div>    
                </form>
                   </div>
            </div>
        </div>
    </div>
    <!-- [ Select2 ] end -->
</div>
<!-- [ Main Content ] end -->     

<?php 
include '../conf/kaki.php';
?>