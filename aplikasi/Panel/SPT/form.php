
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM spt WHERE id_spt='$id'");
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
								<label>Tanggal</label>
								<input class="form-control" type="date"  name="tanggal_spt"  value="<?=date("Y-m-d", strtotime($data['tanggal_spt']));?>" required>
							</div>
						</div>
						<?php if ($level == "Administrator"): ?>
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Karyawan</label>
	        <select name="id_user" class="js-example-basic-single form-control" id="id_user" required>
			<option value>-- Pilih Karyawan --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM user WHERE level='Karyawan'");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_user'] == $rows['id_user']) {
				?>
				<option value="<?=$rows['id_user'];?>" selected><?=$rows['nama_user'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_user'];?>"><?=$rows['nama_user'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
										
						<?php else: ?>
							<input type="hidden" name="id_user" value="<?=$id_user;?>">
						<?php endif ?>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Perihal</label>
                                <input class="form-control" type="text"  name="bukti_spt"  value="<?=$data['bukti_spt'];?>" required>								
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