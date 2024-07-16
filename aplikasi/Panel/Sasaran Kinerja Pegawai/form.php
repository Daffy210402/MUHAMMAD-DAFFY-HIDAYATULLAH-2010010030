
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM skp WHERE id_skp='$id'");
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
	<label class="form-label">Nama Pejabat Penilai</label>
	        <select name="id_ppenilai" class="select2 browser-default" id="id_ppenilai" required>
			<option value>-- Pilih Nama Pegawai --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM user WHERE akses='Pegawai'");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_ppenilai'] == $rows['id_user']) {
				?>
				<option value="<?=$rows['id_user'];?>" selected><?=$rows['nama_pengguna'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_user'];?>"><?=$rows['nama_pengguna'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
	    
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Nama Pejabat Atasan Penilai</label>
	        <select name="id_papenilai" class="select2 browser-default" id="id_papenilai" required>
			<option value>-- Pilih Nama Pegawai --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM user WHERE akses='Pegawai'");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_papenilai'] == $rows['id_user']) {
				?>
				<option value="<?=$rows['id_user'];?>" selected><?=$rows['nama_pengguna'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_user'];?>"><?=$rows['nama_pengguna'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Orientasi Pelayanan</label>
	<input id="orientasi_pelayanan" class="form-control" type="number" name="orientasi_pelayanan" value="<?=$data['orientasi_pelayanan'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Integritas</label>
	<input id="integritas" class="form-control" type="number" name="integritas" value="<?=$data['integritas'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Komitmen</label>
	<input id="komitmen" class="form-control" type="number" name="komitmen" value="<?=$data['komitmen'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Disiplin</label>
	<input id="disiplin" class="form-control" type="number" name="disiplin" value="<?=$data['disiplin'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Kerjasama</label>
	<input id="kerjasama" class="form-control" type="number" name="kerjasama" value="<?=$data['kerjasama'];?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Kepemimpinan</label>
	<input id="kepemimpinan" class="form-control" type="number" name="kepemimpinan" value="<?=$data['kepemimpinan'];?>" required>
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
