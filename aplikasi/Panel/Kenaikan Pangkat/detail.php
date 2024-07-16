
<?php 
$id					= $_GET['id'];
$ida					= $_GET['ida'];
$idp				= $_GET['idp'];

$sql = mysqli_query($koneksi,"SELECT * FROM user
	JOIN pangkat USING(id_pangkat) WHERE id_user='$id'");
while ($data = mysqli_fetch_array($sql)) {
	$nama 			 = $data['nama_pengguna'];
	$kontak 		 = $data['telp'];
}
$sql = mysqli_query($koneksi,"SELECT * FROM pangkat WHERE id_pangkat='$idp'");
while ($data = mysqli_fetch_array($sql)) {
	$id_pangkat_awal = $data['id_pangkat'];
	$pangkat 		 = $data['nama_pangkat'];
}

if (isset($_GET['awal'])) {
	include $folder.'/pesanbatal.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET id_pangkat='$idp' WHERE id_user='$id'");
	$sql = mysqli_query($koneksi,"UPDATE naik_pangkat SET status_pengajuan='Pending' WHERE id_naik_pangkat='$ida'");	
}

if (isset($_GET['akhir'])) {
	include $folder.'/pesanterima.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET id_pangkat='$idp' WHERE id_user='$id'");
	$sql = mysqli_query($koneksi,"UPDATE naik_pangkat SET status_pengajuan='Selesai' WHERE id_naik_pangkat='$ida'");
}
echo "<script>alert('pangkat pegawai berhasil dirubah!');document.location='index.php?page=Kenaikan Pangkat'</script>";
?>