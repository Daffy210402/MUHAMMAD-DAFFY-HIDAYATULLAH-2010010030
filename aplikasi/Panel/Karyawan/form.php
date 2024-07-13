
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
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
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nama</label>
								<input id="nama_user" class="form-control" type="text" name="nama_user" value="<?=$data['nama_user'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Kontak</label>
								<input id="kontak" class="form-control" type="text" name="kontak" value="<?=$data['kontak'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Alamat</label>
								<input id="alamat" class="form-control" type="text" name="alamat" value="<?=$data['alamat'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Username</label>
								<input id="username" class="form-control" type="text" name="username" value="<?=$data['username'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Password</label>
								<input id="password" class="form-control" type="text" name="password" value="<?=$data['password'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Kebangsaan</label>
								<input id="kebangsaan" class="form-control" type="text" name="kebangsaan" value="<?=$data['kebangsaan'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Nomor Kartu Identitas</label>
								<input id="nik" class="form-control" type="number" name="nik" value="<?=$data['nik'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Tempat Lahir</label>
								<input id="tempat_lahir" class="form-control" type="text" name="tempat_lahir" value="<?=$data['tempat_lahir'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input class="form-control" type="date"  name="tanggal_lahir"  value="<?=date("Y-m-d", strtotime($data['tanggal_lahir']));?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="jk"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="jk" required>
								<option value>-- Pilih Jenis Kelamin --</option>
								<?php
								if ($data['jk'] == NULL){

									}else{
										?>
										<option value="<?=$data['jk'];?>" selected><?=$data['jk'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['jk'] == "Laki-Laki"){

									}else{
										?>
										<option value="Laki-Laki">Laki-Laki</option>
										<?php
									}
									;?>
								<?php
								if($data['jk'] == "Perempuan"){

									}else{
										?>
										<option value="Perempuan">Perempuan</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Status Perkawinan</label>
								<select name="kawin"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="kawin" required>
								<option value>-- Pilih Status Perkawinan --</option>
								<?php
								if ($data['kawin'] == NULL){

									}else{
										?>
										<option value="<?=$data['kawin'];?>" selected><?=$data['kawin'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['kawin'] == "Kawin"){

									}else{
										?>
										<option value="Kawin">Kawin</option>
										<?php
									}
									;?>
								<?php
								if($data['kawin'] == "Belum Kawin"){

									}else{
										?>
										<option value="Belum Kawin">Belum Kawin</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>No NPWP</label>
								<input id="npwp" class="form-control" type="text" name="npwp" value="<?=$data['npwp'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Agama</label>
								<select name="agama"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="agama" required>
								<option value>-- Pilih Agama --</option>
								<?php
								if ($data['agama'] == NULL){

									}else{
										?>
										<option value="<?=$data['agama'];?>" selected><?=$data['agama'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['agama'] == "Islam"){

									}else{
										?>
										<option value="Islam">Islam</option>
										<?php
									}
									;?>
								<?php
								if($data['agama'] == "Hindu"){

									}else{
										?>
										<option value="Hindu">Hindu</option>
										<?php
									}
									;?>
								<?php
								if($data['agama'] == "Budha"){

									}else{
										?>
										<option value="Budha">Budha</option>
										<?php
									}
									;?>
								<?php
								if($data['agama'] == "Katolik"){

									}else{
										?>
										<option value="Katolik">Katolik</option>
										<?php
									}
									;?>
								<?php
								if($data['agama'] == "Kristen"){

									}else{
										?>
										<option value="Kristen">Kristen</option>
										<?php
									}
									;?>
								<?php
								if($data['agama'] == "Konghuchu"){

									}else{
										?>
										<option value="Konghuchu">Konghuchu</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Email Bisnis</label>
								<input id="email" class="form-control" type="text" name="email" value="<?=$data['email'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Jenis Kepegawaian</label>
								<select name="status_kepegawaian"  class="js-example-basic-single form-control" data-placeholder="Pilih Salah Satu" id="status_kepegawaian" required>
								<option value>-- Pilih Jenis Kepegawaian --</option>
								<?php
								if ($data['status_kepegawaian'] == NULL){

									}else{
										?>
										<option value="<?=$data['status_kepegawaian'];?>" selected><?=$data['status_kepegawaian'];?></option>		
										<?php
									}
									?>
								<?php
								if($data['status_kepegawaian'] == "Karyawan Tetap"){

									}else{
										?>
										<option value="Karyawan Tetap">Karyawan Tetap</option>
										<?php
									}
									;?>
								<?php
								if($data['status_kepegawaian'] == "Karyawan Tidak Tetap"){

									}else{
										?>
										<option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
										<?php
									}
									;?>        
								</select>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>No. Pegawai</label>
								<input id="no_pegawai" class="form-control" type="text" name="no_pegawai" value="<?=$data['no_pegawai'];?>" required>
							</div>
						</div>
	<div class="col-lg-6">
	<div class="form-group">
	<label class="form-label">Golongan</label>
	        <select name="id_golongan" class="js-example-basic-single form-control" id="id_golongan" required>
			<option value>-- Pilih Golongan --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM golongan");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_golongan'] == $rows['id_golongan']) {
				?>
				<option value="<?=$rows['id_golongan'];?>" selected><?=$rows['nama_golongan'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_golongan'];?>"><?=$rows['nama_golongan'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
			
						<div class="col-lg-6">
							<div class="form-group">
								<label>Cost Center</label>
								<input id="cost_center" class="form-control" type="text" name="cost_center" value="<?=$data['cost_center'];?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Tanggal Bergabung</label>
								<input class="form-control" type="date"  name="tanggal_bergabung"  value="<?=date("Y-m-d", strtotime($data['tanggal_bergabung']));?>" required>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Tanda Tangan</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="ttd">
                                    <label class="custom-file-label">Choose file</label>
                                </div>								
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