
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$jenis_cuti		= $_POST['jenis_cuti'];
$tanggal_mulai_cuti		= date("Y-m-d", strtotime($_POST['tanggal_mulai_cuti']));
$tanggal_selesai_cuti		= date("Y-m-d", strtotime($_POST['tanggal_selesai_cuti']));
$status_cuti		= "Proses";

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO cuti SET id_cuti=NULL, id_user='$id_user', jenis_cuti='$jenis_cuti', tanggal_mulai_cuti='$tanggal_mulai_cuti', tanggal_selesai_cuti='$tanggal_selesai_cuti', status_cuti='$status_cuti'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Cuti'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE cuti SET id_cuti='$id', id_user='$id_user', jenis_cuti='$jenis_cuti', tanggal_mulai_cuti='$tanggal_mulai_cuti', tanggal_selesai_cuti='$tanggal_selesai_cuti', status_cuti='$status_cuti' WHERE id_cuti='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Cuti'</script>";
}

if (isset($_POST['ubah2'])) {
$id					= $_POST['id'];
$alasan_tolak_cuti	= $_POST['alasan_tolak_cuti'];
$sql = mysqli_query($koneksi,"UPDATE cuti SET alasan_tolak_cuti='$alasan_tolak_cuti',status_cuti='Ditolak' WHERE id_cuti='$id'");
echo "<script>alert('Cuti berhasil ditolak!');document.location='../index.php?page=Cuti'</script>";
}
 ?>