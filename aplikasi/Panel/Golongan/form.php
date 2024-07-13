
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM golongan WHERE id_golongan='$id'");
    $data   = mysqli_fetch_array($sql);
}
?>
<div class="row">
    <!-- [ Select2 ] start -->
    <div class="col-sm-12">
        <div class="card select-card">
            <div class="card-body">
                <form method="post" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
                    <div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Golongan</label>
								<input id="nama_golongan" class="form-control" type="text" name="nama_golongan" value="<?=$data['nama_golongan'];?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Gaji</label>
								<input id="gaji" class="form-control" type="text" name="gaji" value="<?=$data['gaji'];?>" required>
							</div>
						</div>           
						<div class="col-xl-12">
						<?=$button;?>
						<button type="reset" class="btn btn-danger">Reset</button>
						</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- [ Select2 ] end -->
</div>