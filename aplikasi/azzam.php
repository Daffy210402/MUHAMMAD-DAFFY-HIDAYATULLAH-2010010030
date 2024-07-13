<?php 
	$folder = "Azzam";
	$judul = "Halaman ".$folder;

include 'azzam/conf/head.php';

	$nama = $_GET['form'];

	if ($_GET['form'] == "Tambah") {
		$button = "<button style='float: right;' class='btn waves-effect waves-light gradient-45deg-purple-deep-orange' name='tambah'>Tambah</button>";
		include $folder.'/form.php';	

	}else if ($_GET['form'] == "Ubah") {
		$id = $_GET['id'];
		$button = "
		<input type='hidden' name='id' value='".$id."'>
		<button style='float: right;' class='btn waves-effect waves-light gradient-45deg-purple-deep-orange' name='ubah'>Ubah</button>";		
		include $folder.'/form.php';

	}else if ($_GET['form'] == "Hapus") {
		$id = $_GET['id'];
		include $folder.'/hapus.php';	
	}else if ($_GET['form'] == "Cetak") {
		include $folder.'/cetak.php';
	}else if ($_GET['form'] == "detail") {
		include $folder.'/detail.php';	
	}else{
		include $folder.'/index.php';
	}

include 'azzam/conf/foot.php';
?>