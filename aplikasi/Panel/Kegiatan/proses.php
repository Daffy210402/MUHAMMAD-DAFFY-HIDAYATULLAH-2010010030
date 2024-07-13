
<?php 
include '../../conf/koneksi.php';
$nama_kegiatan		= $_POST['nama_kegiatan'];
$tanggal_kegiatan		= date("Y-m-d", strtotime($_POST['tanggal_kegiatan']));
$jam_kegiatan		= $_POST['jam_kegiatan'];
$keterangan_kegiatan		= $_POST['keterangan_kegiatan'];

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO kegiatan SET id_kegiatan=NULL, nama_kegiatan='$nama_kegiatan', tanggal_kegiatan='$tanggal_kegiatan', jam_kegiatan='$jam_kegiatan', keterangan_kegiatan='$keterangan_kegiatan'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Kegiatan'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE kegiatan SET id_kegiatan='$id', nama_kegiatan='$nama_kegiatan', tanggal_kegiatan='$tanggal_kegiatan', jam_kegiatan='$jam_kegiatan', keterangan_kegiatan='$keterangan_kegiatan' WHERE id_kegiatan='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Kegiatan'</script>";
}
 ?>