
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_perintah		= date("Y-m-d", strtotime($_POST['tanggal_perintah']));
$tujuan_perintah		= $_POST['tujuan_perintah'];
$dari_tanggal		= date("Y-m-d", strtotime($_POST['dari_tanggal']));
$sampai_tanggal		= date("Y-m-d", strtotime($_POST['sampai_tanggal']));
$keterangan_perintah		= $_POST['keterangan_perintah'];

$file_upload  = $_FILES['upload']['name'];
$tmp_upload   = $_FILES['upload']['tmp_name'];	
move_uploaded_file($tmp_upload, '../../images/SPT/'.$file_upload);
$upload 	= $file_upload; 
if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO spt SET id_spt=NULL, id_user='$id_user', tanggal_perintah='$tanggal_perintah', tujuan_perintah='$tujuan_perintah', dari_tanggal='$dari_tanggal', sampai_tanggal='$sampai_tanggal', upload='$upload', keterangan_perintah='$keterangan_perintah'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=SPT'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE spt SET id_spt='$id', id_user='$id_user', tanggal_perintah='$tanggal_perintah', tujuan_perintah='$tujuan_perintah', dari_tanggal='$dari_tanggal', sampai_tanggal='$sampai_tanggal', upload='$upload', keterangan_perintah='$keterangan_perintah' WHERE id_spt='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=SPT'</script>";
}
 ?>