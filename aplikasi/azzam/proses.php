<?php 
include 'conf/koneksi.php';
$nama_tabel_sistem 			= $_POST['nama_tabel_sistem'];
$judul_tabel_sistem 		= $_POST['judul_tabel_sistem'];

$judul_field_sistem 		= $_POST['judul_field_sistem'];
$nama_field_sistem	 		= $_POST['nama_field_sistem'];
$tipe_field_sistem	 		= $_POST['tipe_field_sistem'];
$values_field_sistem		= $_POST['values_field_sistem'];
$keterangan_field_sistem	= $_POST['keterangan_field_sistem'];

if (isset($_POST['tambah'])) {

	mkdir("../Panel/".$judul_tabel_sistem);
	mkdir("../images/".$judul_tabel_sistem);
	$total = count($judul_field_sistem);

	for ($i=0; $i < $total; $i++) {
		if ($keterangan_field_sistem[$i] == "primary") {
			$tabel = mysqli_query($koneksi,"CREATE TABLE $nama_tabel_sistem ($nama_field_sistem[$i] INT(11) AUTO_INCREMENT PRIMARY KEY)");
		}else if ($keterangan_field_sistem[$i] == "index") {
			$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]($values_field_sistem[$i]),ADD INDEX($nama_field_sistem[$i])");
		}else{
		}
	}

	for ($i=0; $i < $total; $i++) {
		if ($keterangan_field_sistem[$i] == "primary") {
		}else if ($keterangan_field_sistem[$i] == "index") {
		}else{
			if ($tipe_field_sistem == "year") {
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]");
			}else if ($tipe_field_sistem[$i] == "date") {
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]");
			}else if ($tipe_field_sistem[$i] == "datetime") {
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]");
			}else if ($tipe_field_sistem[$i] == "time") {
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]");
			}else if ($tipe_field_sistem[$i] == "file") {
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] text");
			}else{
				$tabel = mysqli_query($koneksi,"ALTER TABLE $nama_tabel_sistem ADD $nama_field_sistem[$i] $tipe_field_sistem[$i]($values_field_sistem[$i])");
			}
		}
	}

	include 'proses/index.php';
	include 'proses/cetak.php';
	include 'proses/laporan.php';
	include 'proses/form.php';
	include 'proses/proses.php';
	include 'proses/hapus.php';


	echo "<script>alert('Data berhasil Disimpan!');document.location='../azzam.php'</script>";
}
?>