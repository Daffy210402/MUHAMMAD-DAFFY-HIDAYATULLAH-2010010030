
 <?php 
 if ($_GET['form'] == "Ubah") {
 	$id_kegiatan = $_GET['id_kegiatan'];
    $sql    = mysqli_query($koneksi,"SELECT * FROM kehadirankegiatan WHERE id_kegiatan='$id_kegiatan' AND id_user='$id_user'");
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
                    	<input type="hidden" name="id_user" value="<?=$id_user;?>">
                    	<input type="hidden" name="id_kegiatan" value="<?=$_GET['id_kegiatan'];?>">
						<div class="col-lg-12">
							<div class="form-group">
								<label>Status Kehadiran</label>
								<select name="status_kehadiran"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="status_kehadiran" required>
								<option value>-- Pilih Status Kehadiran --</option>
								<?php
								if ($data['status_kehadiran'] == NULL){

									}else{
										?>
										<option value="<?=$data['status_kehadiran'];?>" selected><?=$data['status_kehadiran'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['status_kehadiran'] == "Hadir"){

									}else{
										?>
										<option value="Hadir">Hadir</option>
										<?php
									}
									;?>
								<?php
								if($data['status_kehadiran'] == "Tidak Hadir"){

									}else{
										?>
										<option value="Tidak Hadir">Tidak Hadir</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>  
						<div class="col-lg-12">
							<div class="form-group">
								<label>Keterangan</label>
								<textarea id="keterangan_kehadiran_kegiatan" class="form-control" type="text" name="keterangan_kehadiran_kegiatan"><?=$data['keterangan_kehadiran_kegiatan'];?></textarea>
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