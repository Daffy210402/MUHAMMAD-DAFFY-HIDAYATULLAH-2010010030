<?php 
include '../../conf/koneksi.php';
$nip		= $_POST['nip'];
$nama_pengguna		= $_POST['nama_pengguna'];
$telp		= $_POST['telp'];
$email		= $_POST['email'];
$password		= $_POST['password'];
$tanggal_lahir		= date("Y-m-d", strtotime($_POST['tanggal_lahir']));

$alamat		= $_POST['alamat'];
$tanggal_masuk		= date("Y-m-d", strtotime($_POST['tanggal_masuk']));
$agama		= $_POST['agama'];

$file_foto  = $_FILES['foto']['name'];
$tmp_foto   = $_FILES['foto']['tmp_name'];	
move_uploaded_file($tmp_foto, '../../images/Pegawai/'.$file_foto);
$foto 	= $file_foto; 	
$_SESSION['foto'] = $foto;
$id				= $_SESSION['id_user'];
$sql = mysqli_query($koneksi,"UPDATE user SET nip='$nip', nama_pengguna='$nama_pengguna', telp='$telp', email='$email', password='$password', tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama', foto='$foto' WHERE id_user='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php'</script>";
 ?>