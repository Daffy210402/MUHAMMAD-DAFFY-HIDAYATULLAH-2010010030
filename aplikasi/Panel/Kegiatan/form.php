
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM kegiatan WHERE id_kegiatan='$id'");
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
								<label>Nama Kegiatan</label>
								<input id="nama_kegiatan" class="form-control" type="text" name="nama_kegiatan" value="<?=$data['nama_kegiatan'];?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Tanggal Kegiatan</label>
								<input class="form-control" type="date"  name="tanggal_kegiatan"  value="<?=date("Y-m-d", strtotime($data['tanggal_kegiatan']));?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Jam Kegiatan</label>
								<input id="jam_kegiatan" class="form-control" type="time" name="jam_kegiatan" value="<?=$data['jam_kegiatan'];?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Keterangan Lain</label>
								<textarea id="keterangan_kegiatan" class="form-control" type="text" name="keterangan_kegiatan"><?=$data['keterangan_kegiatan'];?></textarea>
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