
<?php 
include '../../conf/koneksi.php';
$nama_unitkerja		= $_POST['nama_unitkerja'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO unitkerja SET id_unitkerja=NULL, nama_unitkerja='$nama_unitkerja'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Unit Kerja'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE unitkerja SET id_unitkerja='$id', nama_unitkerja='$nama_unitkerja' WHERE id_unitkerja='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Unit Kerja'</script>";
}
 ?>