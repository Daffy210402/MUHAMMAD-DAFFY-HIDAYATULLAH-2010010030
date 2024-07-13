
<?php 
include '../../conf/koneksi.php';
$nama_golongan		= $_POST['nama_golongan'];
$gaji		= $_POST['gaji'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO golongan SET id_golongan=NULL, nama_golongan='$nama_golongan', gaji='$gaji'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Golongan'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE golongan SET id_golongan='$id', nama_golongan='$nama_golongan', gaji='$gaji' WHERE id_golongan='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Golongan'</script>";
}
 ?>