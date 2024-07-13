
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM absen WHERE id_absen='$id'");
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
	<label class="form-label">Pegawai</label>
	        <select name="id_user" class="form-control select2-show-search form-select" id="id_user" required>
			<option value>-- Pilih Pegawai --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM user");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_user'] == $rows['id_user']) {
				?>
				<option value="<?=$rows['id_user'];?>" selected><?=$rows['id_user'];?></option>		
				<?php
				}else{
				?>
				<option value="<?=$rows['id_user'];?>"><?=$rows['id_user'];?></option>		
			<?php
				}
				}
			?>
			</select>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Tanggal Absen</label>
	<input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text"  name="tanggal_absen"  value="<?=date("m/d/Y", strtotime($data['tanggal_absen']));?>" required>
	</div>
	</div>
	
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Jam Masuk</label>
	<input id="jam_masuk" class="form-control" type="time" name="jam_masuk" value="<?=$data['jam_masuk'];?>" required>
	</div>
	</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Lang Masuk</label>
			<input id="lang_masuk" class="form-control" type="text" name="lang_masuk" value="<?=$data['lang_masuk'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Long Masuk</label>
			<input id="long_masuk" class="form-control" type="text" name="long_masuk" value="<?=$data['long_masuk'];?>" required>
			</div>
			</div>
			
	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Jam Pulang</label>
	<input id="jam_pulang" class="form-control" type="time" name="jam_pulang" value="<?=$data['jam_pulang'];?>" required>
	</div>
	</div>
	
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Long Pulang</label>
			<input id="long_pulang" class="form-control" type="text" name="long_pulang" value="<?=$data['long_pulang'];?>" required>
			</div>
			</div>
			
			<div class="col-lg-12">
			<div class="form-group">
			<label class="form-label">Lang Pulang</label>
			<input id="lang_pulang" class="form-control" type="text" name="lang_pulang" value="<?=$data['lang_pulang'];?>" required>
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
