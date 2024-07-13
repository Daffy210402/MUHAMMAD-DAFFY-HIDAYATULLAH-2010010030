
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$id_kegiatan		= $_POST['id_kegiatan'];
$status_kehadiran		= $_POST['status_kehadiran'];
$keterangan_kehadiran_kegiatan		= $_POST['keterangan_kehadiran_kegiatan'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO kehadirankegiatan SET id_kehadirankegiatan=NULL, id_user='$id_user', id_kegiatan='$id_kegiatan', status_kehadiran='$status_kehadiran', keterangan_kehadiran_kegiatan='$keterangan_kehadiran_kegiatan'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE kehadirankegiatan SET status_kehadiran='$status_kehadiran', keterangan_kehadiran_kegiatan='$keterangan_kehadiran_kegiatan' WHERE id_kegiatan='$id_kegiatan' AND id_user='$id_user'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php'</script>";
}
 ?>