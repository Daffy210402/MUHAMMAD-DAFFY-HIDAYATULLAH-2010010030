 
 <?php 
    $sql    = mysqli_query($koneksi,"SELECT * FROM setting WHERE id_setting='1'");
    $data   = mysqli_fetch_array($sql);
    ?>
<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                    <div class="row">
    <div class="col-xl-12 col-md-12">
    <form method="post" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Nama Kantor</label>
         <input id="nama" class="form-control" type="text" name="nama" value="<?=$data['nama'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Alamat Kantor</label>
         <input id="alamat" class="form-control" type="text" name="alamat" value="<?=$data['alamat'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">Nama Ketua</label>
         <input id="nama_ketua" class="form-control" type="text" name="nama_ketua" value="<?=$data['nama_ketua'];?>" required>
         </div>
         </div>
         
         <div class="col-lg-12">
         <div class="form-group">
         <label class="form-label">NIP Ketua (Jika Ada)</label>
         <input id="nip_ketua" class="form-control" type="text" name="nip_ketua" value="<?=$data['nip_ketua'];?>" required>
         </div>
         </div>
         
   <div class="col-lg-12">
   <div class="form-group">
   <label class="form-label">Logo Kantor</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="logo_kantor">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div>   
   </div>
   </div>
   
   <div class="col-lg-12">
   <div class="form-group">
   <label class="form-label">QRCode</label>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="background_login">
      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    </div> 
   </div>
   </div>
   
              

<div class="col-lg-12">
<div class="form-group">
<input type='hidden' name='id' value='1'>
      <button style='float: right;' class='btn btn-primary' name='ubah'>Ubah</button>
<button type="reset" class="btn btn-danger">Reset</button>
</div>
</div>           
</form>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ Select2 ] end -->
</div>
<!-- [ Main Content ] end -->     
