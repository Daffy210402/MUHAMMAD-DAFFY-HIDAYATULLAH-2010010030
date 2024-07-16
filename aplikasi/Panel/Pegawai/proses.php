
<?php 
include '../../conf/koneksi.php';
$id_jabatan		= $_POST['id_jabatan'];
$id_pangkat		= $_POST['id_pangkat'];
$id_unitkerja		= $_POST['id_unitkerja'];
$nip		= $_POST['nip'];
$nama_pengguna		= $_POST['nama_pengguna'];
$telp		= $_POST['telp'];
$email		= $_POST['email'];
$gaji		= $_POST['gaji'];
$password		= $_POST['password'];
$tanggal_lahir		= date("Y-m-d", strtotime($_POST['tanggal_lahir']));

$alamat		= $_POST['alamat'];
$tanggal_masuk		= date("Y-m-d", strtotime($_POST['tanggal_masuk']));
$agama		= $_POST['agama'];
$akses		= $_POST['akses'];

$file_foto  = $_FILES['foto']['name'];
$tmp_foto   = $_FILES['foto']['tmp_name'];	
move_uploaded_file($tmp_foto, '../../images/Pegawai/'.$file_foto);
$foto 	= $file_foto; 	

if (isset($_POST['tambah'])) {
$sql = mysqli_query($koneksi,"INSERT INTO user SET id_jabatan='$id_jabatan', id_pangkat='$id_pangkat', nip='$nip', nama_pengguna='$nama_pengguna', gaji='$gaji', telp='$telp', email='$email', password='$password', tanggal_lahir='$tanggal_lahir', id_unitkerja='$id_unitkerja', alamat='$alamat', tanggal_masuk='$tanggal_masuk', tanggal_np='$tanggal_masuk', tanggal_ng='$tanggal_masuk', agama='$agama', akses='$akses', foto='$foto'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pegawai'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE user SET id_user='$id', id_jabatan='$id_jabatan', id_pangkat='$id_pangkat', id_unitkerja='$id_unitkerja', nip='$nip', nama_pengguna='$nama_pengguna', gaji='$gaji', telp='$telp', email='$email', password='$password', tanggal_lahir='$tanggal_lahir', alamat='$alamat', agama='$agama', akses='$akses', foto='$foto' WHERE id_user='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pegawai'</script>";
}
 ?>