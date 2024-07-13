
<?php 
include '../../conf/koneksi.php';
$tanggal_spt		= date("Y-m-d", strtotime($_POST['tanggal_spt']));
$id_user		= $_POST['id_user'];
$bukti_spt		= $_POST['bukti_spt'];
	
if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO spt SET id_spt=NULL, tanggal_spt='$tanggal_spt', id_user='$id_user', bukti_spt='$bukti_spt'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=SPT'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE spt SET id_spt='$id', tanggal_spt='$tanggal_spt', id_user='$id_user', bukti_spt='$bukti_spt' WHERE id_spt='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=SPT'</script>";
}
 ?>