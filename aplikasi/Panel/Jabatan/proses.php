
<?php 
include '../../conf/koneksi.php';
$nama_jabatan		= $_POST['nama_jabatan'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO jabatan SET id_jabatan=NULL, nama_jabatan='$nama_jabatan'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Jabatan'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE jabatan SET id_jabatan='$id', nama_jabatan='$nama_jabatan' WHERE id_jabatan='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Jabatan'</script>";
}
 ?>