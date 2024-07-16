<?php 

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query ($koneksi,"SELECT * FROM user WHERE 
	email='$email' AND password='$password'");
$jumlah = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);
$akses = $data['akses'];

if ($akses == "Administrator") {
	$_SESSION['id_user']		= $data['id_user'];
	$_SESSION['nama_pengguna']	= $data['nama_pengguna'];
	$_SESSION['foto']			= $data['foto'];
	$_SESSION['email']			= $email;
	$_SESSION['password']		= $password;
	$_SESSION['akses']			= $data['akses'];
	echo "<script>alert('Login Sebagai Administrator Berhasil!');window.location='panel';</script>";
}else if ($akses == "Pegawai") {
	$_SESSION['id_user']		= $data['id_user'];
	$_SESSION['foto']			= $data['foto'];
	$_SESSION['nama_pengguna']	= $data['nama_pengguna'];
	$_SESSION['email']			= $email;
	$_SESSION['password']		= $password;
	$_SESSION['akses']			= $data['akses'];	
	echo "<script>alert('Login Sebagai Pegawai Berhasil!');window.location='panel';</script>";
}else{
	echo "<script>alert('Tidak ditemukan email dan Password yang sesuai!');window.location='index.php';</script>";
}
?>