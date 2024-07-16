
 <?php 
 if ($_GET['form'] == "Ubah") {
    $sql    = mysqli_query($koneksi,"SELECT * FROM naik_pangkat WHERE id_naik_pangkat='$id'");
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
			<label class="form-label">Nama Pegawai</label>
			<input id="id_user" class="form-control" type="text" name="id_user" value="<?=$_GET['id_pegawai'];?>" hidden>
			<input id="x" class="form-control" type="text" name="x" value="<?=$_GET['nama_pegawai'];?>" readonly>
			</div>
			</div>

	<div class="col-lg-12">
	<div class="form-group">
	<label class="form-label">Pangkat Selanjutnya</label>
	        <select name="id_pangkat_berikutnya" class="select2 browser-default" id="id_pangkat_berikutnya" required>
			<option value>-- Pilih Pangkat Selanjutnya --</option>
			<?php
				$row = mysqli_query($koneksi,"SELECT * FROM pangkat");
                while ($rows = mysqli_fetch_array($row)) {	
                	 if ($data['id_pangkat_berikutnya'] == $rows['id_pangkat']) {
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
			<label class="form-label">Alasan</label>
			<input id="alasan_pengajuan" class="form-control" type="text" name="alasan_pengajuan" value="<?=$data['alasan_pengajuan'];?>" required>
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
