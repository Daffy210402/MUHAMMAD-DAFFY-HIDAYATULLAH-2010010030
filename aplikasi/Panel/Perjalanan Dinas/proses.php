
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_perjalanandinas		= date("Y-m-d", strtotime($_POST['tanggal_perjalanandinas']));
$jenis_tujuan		= $_POST['jenis_tujuan'];
$kepentingan		= $_POST['kepentingan'];
$tipe_transportasi		= $_POST['tipe_transportasi'];
$total_tujuan		= $_POST['total_tujuan'];
$jumlah_biaya		= $_POST['jumlah_biaya'];
$status_perjalanandinas		= "Proses";

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO perjalanandinas SET id_perjalanandinas=NULL, id_user='$id_user', tanggal_perjalanandinas='$tanggal_perjalanandinas', jenis_tujuan='$jenis_tujuan', kepentingan='$kepentingan', tipe_transportasi='$tipe_transportasi', total_tujuan='$total_tujuan', jumlah_biaya='$jumlah_biaya', status_perjalanandinas='$status_perjalanandinas'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Perjalanan Dinas'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE perjalanandinas SET id_perjalanandinas='$id', id_user='$id_user', tanggal_perjalanandinas='$tanggal_perjalanandinas', jenis_tujuan='$jenis_tujuan', kepentingan='$kepentingan', tipe_transportasi='$tipe_transportasi', total_tujuan='$total_tujuan', jumlah_biaya='$jumlah_biaya', status_perjalanandinas='$status_perjalanandinas' WHERE id_perjalanandinas='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Perjalanan Dinas'</script>";
}

if (isset($_POST['ubah2'])) {
$id					= $_POST['id'];
$keterangan_pengajuan_ditolak	= $_POST['keterangan_pengajuan_ditolak'];
$sql = mysqli_query($koneksi,"UPDATE perjalanandinas SET keterangan_pengajuan_ditolak='$keterangan_pengajuan_ditolak',status_perjalanandinas='Tolak' WHERE id_perjalanandinas='$id'");
echo "<script>alert('Permohonan berhasil ditolak!');document.location='../index.php?page=Perjalanan Dinas'</script>";
}
 ?>