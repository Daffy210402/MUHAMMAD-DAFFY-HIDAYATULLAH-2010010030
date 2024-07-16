
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_pengajuan		= date("Y-m-d");
$dari_tanggal		= date("Y-m-d", strtotime($_POST['dari_tanggal']));
$sampai_tanggal		= date("Y-m-d", strtotime($_POST['sampai_tanggal']));
$tipe_cuti		= $_POST['tipe_cuti'];
$keterangan_cuti		= $_POST['keterangan_cuti'];
$status_cuti		= "Proses";

$file_upload  = $_FILES['upload']['name'];
$tmp_upload   = $_FILES['upload']['tmp_name'];	
move_uploaded_file($tmp_upload, '../../images/Cuti/'.$file_upload);
$upload 	= $file_upload; 
if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO cuti SET id_cuti=NULL, id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', dari_tanggal='$dari_tanggal', sampai_tanggal='$sampai_tanggal', tipe_cuti='$tipe_cuti', upload='$upload', keterangan_cuti='$keterangan_cuti', status_cuti='$status_cuti'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Cuti'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE cuti SET id_cuti='$id', id_user='$id_user', tanggal_pengajuan='$tanggal_pengajuan', dari_tanggal='$dari_tanggal', sampai_tanggal='$sampai_tanggal', tipe_cuti='$tipe_cuti', upload='$upload', keterangan_cuti='$keterangan_cuti', status_cuti='$status_cuti' WHERE id_cuti='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Cuti'</script>";
}
 ?>