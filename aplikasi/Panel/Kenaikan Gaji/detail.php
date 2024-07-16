 
<?php 
$id					= $_GET['id'];
$ida				= $_GET['ida'];
$idp				= $_GET['idp'];
$sql = mysqli_query($koneksi,"SELECT * FROM user
	JOIN pangkat USING(id_pangkat) WHERE id_user='$id'");
while ($data = mysqli_fetch_array($sql)) {
	$pangkat 		 = $data['nama_pangkat'];
	$nama 			 = $data['nama_pengguna'];
	$kontak 		 = $data['telp'];
}

if (isset($_GET['awal'])) {
	include $folder.'/pesanbatal.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET gaji='$idp' WHERE id_user='$id'");
	$sql = mysqli_query($koneksi,"UPDATE naik_gaji SET status_gaji='Pending' WHERE id_naik_gaji='$ida'");	
}

if (isset($_GET['akhir'])) {
	include $folder.'/pesanterima.php';
	$sql = mysqli_query($koneksi,"UPDATE user SET gaji='$idp' WHERE id_user='$id'");
	$sql = mysqli_query($koneksi,"UPDATE naik_gaji SET status_gaji='Selesai' WHERE id_naik_gaji='$ida'");
}
echo "<script>alert('Gaji berhasil dirubah!');document.location='index.php?page=Kenaikan Gaji'</script>";
?>