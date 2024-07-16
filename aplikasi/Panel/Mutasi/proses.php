
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tgl_mutasi		= date("Y-m-d", strtotime($_POST['tgl_mutasi']));
$keterangan_mutasi		= $_POST['keterangan_mutasi'];

$file_upload  = $_FILES['upload']['name'];
$tmp_upload   = $_FILES['upload']['tmp_name'];	
move_uploaded_file($tmp_upload, '../../images/Mutasi/'.$file_upload);
$upload 	= $file_upload; 

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO mutasi SET id_mutasi=NULL, id_user='$id_user', upload='$upload', tgl_mutasi='$tgl_mutasi', keterangan_mutasi='$keterangan_mutasi'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Mutasi'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE mutasi SET id_mutasi='$id', id_user='$id_user', upload='$upload', tgl_mutasi='$tgl_mutasi', keterangan_mutasi='$keterangan_mutasi' WHERE id_mutasi='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Mutasi'</script>";
}
 ?>