
<?php 
if ($_GET['form'] == "Ubah") {
	$sql    = mysqli_query($koneksi,"SELECT * FROM cuti WHERE id_cuti='$id'");
	$data   = mysqli_fetch_array($sql);
}else{

}
?>
<!-- BEGIN: Page Main-->
<div class="main-content app-content mt-0">
	<div class="side-app">

		<!-- CONTAINER -->
		<div class="main-container container-fluid">

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<h1 class="page-title"></h1>
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
					</ol>
				</div>

			</div>
			<!-- PAGE-HEADER END -->

			<!-- Row -->
			<div class="row">
				<div class="col-xl-12 col-md-12">
					<form method="post" class="card" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
						<div class="card-header">
							<h3 class="card-title"><?=$judul;?></h3>
						</div>
						<div class=" card-body">

							<?php if ($akses == "Pegawai"): ?>
								<input type="hidden" name="id_user" value="<?=$id_pengguna;?>">
								<?php else: ?>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="form-label">Pegawai</label>
											<select name="id_user" class="form-control select2-show-search form-select" id="id_user" required>
												<option value>-- Pilih Pegawai --</option>
												<?php
												$row = mysqli_query($koneksi,"SELECT * FROM user WHERE akses='Pegawai'");
												while ($rows = mysqli_fetch_array($row)) {	
													if ($data['id_user'] == $rows['id_user']) {
														?>
														<option value="<?=$rows['id_user'];?>" selected><?=$rows['nip'];?>|<?=$rows['nama_pengguna'];?></option>		
														<?php
													}else{
														?>
														<option value="<?=$rows['id_user'];?>"><?=$rows['nip'];?>|<?=$rows['nama_pengguna'];?></option>		
														<?php
													}
												}
												?>
											</select>
										</div>
									</div>
								<?php endif ?>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Dari Tanggal</label>
										<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="dari_tanggal"  value="<?=date("m/d/Y", strtotime($data['dari_tanggal']));?>" required>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Sampai Tanggal</label>
										<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="sampai_tanggal"  value="<?=date("m/d/Y", strtotime($data['sampai_tanggal']));?>" required>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Tipe Cuti</label>
										<select name="tipe_cuti"  class="form-control select2-show-search form-select" data-placeholder="Pilih Salah Satu" id="tipe_cuti" required>
											<option value>-- Pilih Tipe Cuti --</option>
											<?php
											if ($data['tipe_cuti'] == NULL){

											}else{
												?>
												<option value="<?=$data['tipe_cuti'];?>" selected><?=$data['tipe_cuti'];?></option>		
												<?php
											}
											?>
											<?php
											if($data['tipe_cuti'] == "Sakit"){

											}else{
												?>
												<option value="Sakit">Sakit</option>
												<?php
											}
											;?>
											<?php
											if($data['tipe_cuti'] == "Izin"){

											}else{
												?>
												<option value="Izin">Izin</option>
												<?php
											}
											;?>        
										</select>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Keterangan</label>
										<input id="keterangan_cuti" class="form-control" type="text" name="keterangan_cuti" value="<?=$data['keterangan_cuti'];?>" required>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Upload Bukti</label>
										<input type="file" id="upload" class="dropify" data-default-file="" name="upload">
									</div>
								</div> 	
								<div class="col-lg-12">
									<div class="form-group">
										<?=$button;?>
										<button type="reset" class="btn btn-danger">Reset</button>
									</div>
								</div>           
							</div>
						</form>
					</div>    
				</div>
			</div>
			<!-- End Row-->
		</div>
		<!-- CONTAINER CLOSED -->

	</div>
</div>
<!--app-content closed-->
</div>               
