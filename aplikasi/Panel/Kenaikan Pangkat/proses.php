
<?php 
include '../../conf/koneksi.php';
$id_user					= $_POST['id_user'];
$id_pangkat_berikutnya		= $_POST['id_pangkat_berikutnya'];
$tanggal_pengajuan			= date("Y-m-d");
$alasan_pengajuan			= $_POST['alasan_pengajuan'];
$status_pengajuan			= "Pending";
$sql = mysqli_query($koneksi,"SELECT * FROM user
	JOIN pangkat USING(id_pangkat) WHERE id_user='$id_user'
	");
while ($data = mysqli_fetch_array($sql)) {
	$id_pangkat_awal = $data['id_pangkat'];
	$nama 			 = $data['nama_pengguna'];
	$kontak 		 = $data['telp'];
}

if (isset($_POST['tambah'])) {
include 'pesan.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET tanggal_np='$tanggal_pengajuan' WHERE id_user='$id_user'");
	$sql = mysqli_query($koneksi,"INSERT INTO naik_pangkat SET id_naik_pangkat=NULL, id_user='$id_user', id_pangkat_awal='$id_pangkat_awal', id_pangkat_berikutnya='$id_pangkat_berikutnya', tanggal_pengajuan='$tanggal_pengajuan', alasan_pengajuan='$alasan_pengajuan', status_pengajuan='Pending'");
	echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Kenaikan Pangkat'</script>";
}

if (isset($_POST['ubah'])) {
	$id				= $_POST['id'];
	$sql = mysqli_query($koneksi,"UPDATE naik_pangkat SET id_user='$id_user', id_pangkat_awal='$id_pangkat_awal', id_pangkat_berikutnya='$id_pangkat_berikutnya', tanggal_pengajuan='$tanggal_pengajuan', alasan_pengajuan='$alasan_pengajuan' WHERE id_naik_pangkat='$id'");
	echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Kenaikan Pangkat'</script>";
}
?>