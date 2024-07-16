
<?php 
include '../../conf/koneksi.php';
$id_spt		= $_POST['id_spt'];
$status_sppd		= $_POST['status_sppd'];
$tanggal_sppd		= date("Y-m-d", strtotime($_POST['tanggal_sppd']));

$file_upload_sppd  = $_FILES['upload_sppd']['name'];
$tmp_upload_sppd   = $_FILES['upload_sppd']['tmp_name'];	
move_uploaded_file($tmp_upload_sppd, '../../images/SPPD/'.$file_upload_sppd);
$upload_sppd 	= $file_upload_sppd; 

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO sppd SET id_sppd=NULL, id_spt='$id_spt', status_sppd='$status_sppd', upload_sppd='$upload_sppd', tanggal_sppd='$tanggal_sppd'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=SPPD'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE sppd SET id_sppd='$id', id_spt='$id_spt', status_sppd='$status_sppd', upload_sppd='$upload_sppd', tanggal_sppd='$tanggal_sppd' WHERE id_sppd='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=SPPD'</script>";
}
 ?>