<?php 
$username = $_POST['username'];
$password = $_POST['password'];
$kode 	  = $_POST['kode'];
$capcha   = $_POST['capcha'];
if ($kode == $capcha) {

	$sql = mysqli_query ($koneksi,"SELECT * FROM user WHERE 
		username='$username' AND password='$password'");
	$jumlah = mysqli_num_rows($sql);
	$data = mysqli_fetch_array($sql);
	$level = $data['level'];

	if ($jumlah >= 1) {
		$_SESSION['id_user']			= $data['id_user'];
		$_SESSION['nama_user']			= $data['nama_user'];
		$_SESSION['username']			= $username;
		$_SESSION['password']			= $password;
		$_SESSION['level']				= $data['level'];
		echo "<script>alert('Login Sebagai ".$level." Berhasil!');window.location='Panel';</script>";
	}else{
		echo "<script>alert('Tidak ditemukan username dan Password yang sesuai!');window.location='index.php';</script>";
	}
} else {
		echo "<script>alert('Maaf captcha anda salah!');window.location='index.php';</script>";
}

?>