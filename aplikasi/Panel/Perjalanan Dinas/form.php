
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM perjalanandinas WHERE id_perjalanandinas='$id'");
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
						<div class="col-lg-12">
							<div class="form-group">
								<label>Tanggal Pengajuan</label>
								<input class="form-control" type="date"  name="tanggal_perjalanandinas"  value="<?=date("Y-m-d", strtotime($data['tanggal_perjalanandinas']));?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Jenis Tujuan</label>
								<select name="jenis_tujuan"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="jenis_tujuan" required>
								<option value>-- Pilih Jenis Tujuan --</option>
								<?php
								if ($data['jenis_tujuan'] == NULL){

									}else{
										?>
										<option value="<?=$data['jenis_tujuan'];?>" selected><?=$data['jenis_tujuan'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['jenis_tujuan'] == "Domestik"){

									}else{
										?>
										<option value="Domestik">Domestik</option>
										<?php
									}
									;?>
								<?php
								if($data['jenis_tujuan'] == "Manca Negara"){

									}else{
										?>
										<option value="Manca Negara">Manca Negara</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Kepentingan</label>
								<input id="kepentingan" class="form-control" type="text" name="kepentingan" value="<?=$data['kepentingan'];?>" required>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Tipe Transportasi</label>
								<select name="tipe_transportasi"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="tipe_transportasi" required>
								<option value>-- Pilih Tipe Transportasi --</option>
								<?php
								if ($data['tipe_transportasi'] == NULL){

									}else{
										?>
										<option value="<?=$data['tipe_transportasi'];?>" selected><?=$data['tipe_transportasi'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['tipe_transportasi'] == "Pesawat"){

									}else{
										?>
										<option value="Pesawat">Pesawat</option>
										<?php
									}
									;?>
								<?php
								if($data['tipe_transportasi'] == "Mobil"){

									}else{
										?>
										<option value="Mobil">Mobil</option>
										<?php
									}
									;?>
								<?php
								if($data['tipe_transportasi'] == "Lainnya"){

									}else{
										?>
										<option value="Lainnya">Lainnya</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Total Tujuan</label>
								<select name="total_tujuan"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="total_tujuan" required>
								<option value>-- Pilih Total Tujuan --</option>
								<?php
								if ($data['total_tujuan'] == NULL){

									}else{
										?>
										<option value="<?=$data['total_tujuan'];?>" selected><?=$data['total_tujuan'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['total_tujuan'] == "1"){

									}else{
										?>
										<option value="1">1</option>
										<?php
									}
									;?>
								<?php
								if($data['total_tujuan'] == "2"){

									}else{
										?>
										<option value="2">2</option>
										<?php
									}
									;?>
								<?php
								if($data['total_tujuan'] == "3"){

									}else{
										?>
										<option value="3">3</option>
										<?php
									}
									;?>
								<?php
								if($data['total_tujuan'] == "4"){

									}else{
										?>
										<option value="4">4</option>
										<?php
									}
									;?>
								<?php
								if($data['total_tujuan'] == "5"){

									}else{
										?>
										<option value="5">5</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<label>Jumlah Biaya</label>
								<input id="jumlah_biaya" class="form-control" type="text" name="jumlah_biaya" value="<?=$data['jumlah_biaya'];?>" required>
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