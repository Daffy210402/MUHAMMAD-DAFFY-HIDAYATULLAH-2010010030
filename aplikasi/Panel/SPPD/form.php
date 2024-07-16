
<?php 
if ($_GET['form'] == "Ubah") {
	$sql    = mysqli_query($koneksi,"SELECT * FROM sppd WHERE id_sppd='$id'");
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

							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">SPT</label>
									<select name="id_spt" class="form-control select2-show-search form-select" id="id_spt" required>
										<option value>-- Pilih SPT --</option>
										<?php
										$row = mysqli_query($koneksi,"SELECT * FROM spt JOIN user USING(id_user)");
										while ($rows = mysqli_fetch_array($row)) {	
											$id_spt = $rows['id_spt'];
											$rom = mysqli_query($koneksi,"SELECT * FROM sppd WHERE id_spt='$id_spt'");
											$jm = mysqli_num_rows($rom);
											if ($jm == 1) {
											}else{
												
												if ($data['id_spt'] == $rows['id_spt']) {
													?>
													<option value="<?=$rows['id_spt'];?>" selected><?=$rows['nip'];?>|<?=$rows['nama_pengguna'];?> | <?=$rows['tujuan_perintah'];?></option>		
													<?php
												}else{
													?>
													<option value="<?=$rows['id_spt'];?>"><?=$rows['nip'];?>|<?=$rows['nama_pengguna'];?> | <?=$rows['tujuan_perintah'];?></option>		
													<?php
												}			

											}											
										}
										?>  		
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Status</label>
									<select name="status_sppd"  class="form-control select2-show-search form-select" data-placeholder="Pilih Salah Satu" id="status_sppd" required>
										<option value>-- Pilih Status --</option>
										<?php
										if ($data['status_sppd'] == NULL){

										}else{
											?>
											<option value="<?=$data['status_sppd'];?>" selected><?=$data['status_sppd'];?></option>		
											<?php
										}
										?>
										<?php
										if($data['status_sppd'] == "Proses"){

										}else{
											?>
											<option value="Proses">Proses</option>
											<?php
										}
										;?>
										<?php
										if($data['status_sppd'] == "Diterima"){

										}else{
											?>
											<option value="Diterima">Diterima</option>
											<?php
										}
										;?>
										<?php
										if($data['status_sppd'] == "Ditolak"){

										}else{
											?>
											<option value="Ditolak">Ditolak</option>
											<?php
										}
										;?>        
									</select>
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form-group">
									<label class="form-label">Tanggal Surat</label>
									<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_sppd"  value="<?=date("m/d/Y", strtotime($data['tanggal_sppd']));?>" required>
								</div>
							</div>

								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Upload Bukti</label>
										<input type="file" id="upload_sppd" class="dropify" data-default-file="" name="upload_sppd">
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
