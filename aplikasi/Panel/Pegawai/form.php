
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'");
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
    <form method="POST" class="card" action="<?=$folder;?>/proses.php" enctype="multipart/form-data">
    <div class="card-header">
    <h3 class="card-title"><?=$judul;?></h3>
    </div>
    <div class=" card-body">
   
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">NIP</label>
			<input id="nip" class="form-control" type="text" name="nip" value="<?=$data['nip'];?>" required>
			<input class="form-control" type="hidden" name="akses" value="Pegawai">
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Nama Lengkap</label>
			<input id="nama_pengguna" class="form-control" type="text" name="nama_pengguna" value="<?=$data['nama_pengguna'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Kontak</label>
			<input id="telp" class="form-control" type="text" name="telp" value="<?=$data['telp'];?>" required>
			</div>
			</div>
			 
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Jabatan</label>
	        <select name="id_jabatan" class="form-control select2-show-search form-select" id="id_jabatan" required>
			<option value>-- Pilih Jabatan --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM jabatan");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_jabatan'] == $rows['id_jabatan']) {
				?>
				<option value="<?=$rows['id_jabatan'];?>" selected><?=$rows['nama_jabatan'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_jabatan'];?>"><?=$rows['nama_jabatan'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>

			 
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Unit Kerja</label>
	        <select name="id_unitkerja" class="form-control select2-show-search form-select" id="id_unitkerja" required>
			<option value>-- Pilih Unit Kerja --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM unitkerja");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_unitkerja'] == $rows['id_unitkerja']) {
				?>
				<option value="<?=$rows['id_unitkerja'];?>" selected><?=$rows['nama_unitkerja'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_unitkerja'];?>"><?=$rows['nama_unitkerja'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>

	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Pangkat</label>
	        <select name="id_pangkat" class="form-control select2-show-search form-select" id="id_pangkat" required>
			<option value>-- Pilih Pangkat --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM pangkat");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_pangkat'] == $rows['id_pangkat']) {
				?>
				<option value="<?=$rows['id_pangkat'];?>" selected><?=$rows['nama_pangkat'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_pangkat'];?>"><?=$rows['nama_pangkat'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Email</label>
			<input id="email" class="form-control" type="text" name="email" value="<?=$data['email'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Password</label>
			<input id="password" class="form-control" type="text" name="password" value="<?=$data['password'];?>" required>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Lahir</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_lahir" value="<?=date("m/d/Y", strtotime($data['tanggal_lahir']));?>" required>
	</div>
	</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Alamat</label>
			<input id="alamat" class="form-control" type="text" name="alamat" value="<?=$data['alamat'];?>" required>
			</div>
			</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Gaji</label>
			<input id="gaji" class="form-control" type="text" name="gaji" value="<?=$data['gaji'];?>" required>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Masuk</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_masuk" value="<?=date("m/d/Y", strtotime($data['tanggal_masuk']));?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Agama</label>
	<select name="agama"  class="form-control select2-show-search form-select" data-placeholder="Pilih Salah Satu" id="agama" required>
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
				if($data['agama'] == "Kristen"){

					}else{
						?>
						<option value="Kristen">Kristen</option>
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
				if($data['agama'] == "Konghuchu"){

					}else{
						?>
						<option value="Konghuchu">Konghuchu</option>
						<?php
					}
					;?>
				<?php
				if($data['agama'] == "Protestan"){

					}else{
						?>
						<option value="Protestan">Protestan</option>
						<?php
					}
					;?>        
			</select>
			</div>
			</div>
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Foto Pegawai</label>
	<input type="file" id="foto" class="dropify" data-default-file="" name="foto">
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
