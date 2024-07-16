
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_pengajuan		= date("Y-m-d", strtotime($_POST['tanggal_pengajuan']));
$gaji_berikutnya		= $_POST['gaji_berikutnya'];
$ketarangan_gaji		= $_POST['ketarangan_gaji'];
$sql = mysqli_query($koneksi,"SELECT * FROM user
	JOIN jabatan USING(id_jabatan) WHERE id_user='$id_user'
	");

while ($data = mysqli_fetch_array($sql)) {
	$gaji_awal 		 = $data['gaji'];	
	$nama 			 = $data['nama_pengguna'];
	$kontak 		 = $data['telp'];
}
if (isset($_POST['tambah'])) {
include 'pesan.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET tanggal_ng='$tanggal_pengajuan' WHERE id_user='$id_user'");
$sql = mysqli_query($koneksi,"INSERT INTO naik_gaji SET id_naik_gaji=NULL, id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', gaji_awal='$gaji_awal', gaji_berikutnya='$gaji_berikutnya', ketarangan_gaji='$ketarangan_gaji', status_gaji='Pending'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Kenaikan Gaji'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE naik_gaji SET id_naik_gaji='$id', id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', gaji_awal='$gaji_awal', gaji_berikutnya='$gaji_berikutnya', ketarangan_gaji='$ketarangan_gaji' WHERE id_naik_gaji='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Kenaikan Gaji'</script>";
}
 ?>