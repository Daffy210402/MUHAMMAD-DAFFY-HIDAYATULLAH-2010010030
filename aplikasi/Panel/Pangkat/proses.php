
<?php 
include '../../conf/koneksi.php';
$nama_pangkat		= $_POST['nama_pangkat'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pangkat SET id_pangkat=NULL, nama_pangkat='$nama_pangkat'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pangkat'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pangkat SET id_pangkat='$id', nama_pangkat='$nama_pangkat' WHERE id_pangkat='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pangkat'</script>";
}
 ?>