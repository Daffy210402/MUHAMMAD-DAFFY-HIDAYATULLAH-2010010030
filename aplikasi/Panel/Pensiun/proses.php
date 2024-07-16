
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_pengajuan		= date("Y-m-d", strtotime($_POST['tanggal_pengajuan']));
$tanggal_pensiun		= date("Y-m-d", strtotime($_POST['tanggal_pensiun']));
$alasan_pensiun		= $_POST['alasan_pensiun'];

$file_upload  = $_FILES['upload']['name'];
$tmp_upload   = $_FILES['upload']['tmp_name'];  
move_uploaded_file($tmp_upload, '../../images/Pensiun/'.$file_upload);
$upload     = $file_upload; 

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO pensiun SET id_pensiun=NULL, id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', tanggal_pensiun='$tanggal_pensiun', alasan_pensiun='$alasan_pensiun', upload='$upload', status_pensiun='Proses'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Pensiun'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE pensiun SET id_pensiun='$id', id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', tanggal_pensiun='$tanggal_pensiun', alasan_pensiun='$alasan_pensiun', upload='$upload', status_pensiun='Proses' WHERE id_pensiun='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Pensiun'</script>";
}
 ?>