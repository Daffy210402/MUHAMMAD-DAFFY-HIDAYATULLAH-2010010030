
<?php 
include '../../conf/koneksi.php';
$id_user		= $_GET['id_user'];
$tanggal_absen		= date("Y-m-d");
$jam_masuk		= date("H:i:s");
$lang_masuk		= $_GET['lat'];
$long_masuk		= $_GET['long'];
$jam_pulang		= date("H:i:s");
$long_pulang		= $_GET['long'];
$lang_pulang		= $_GET['lat'];

if (isset($_GET['masuk'])) {
$sql = mysqli_query($koneksi,"INSERT INTO absen SET id_user='$id_user', tanggal_absen='$tanggal_absen', jam_masuk='$jam_masuk', lang_masuk='$lang_masuk', long_masuk='$long_masuk'");
echo "<script>alert('Absen Masuk berhasil disimpan!');document.location='../index.php?page=Absen'</script>";
}

if (isset($_GET['pulang'])) {
$id				= $_GET['id'];
$sql = mysqli_query($koneksi,"UPDATE absen SET jam_pulang='$jam_pulang', long_pulang='$long_pulang', lang_pulang='$lang_pulang' WHERE id_user='$id_user' AND tanggal_absen='$tanggal_absen'");
echo "<script>alert('Absen pulang berhasil disimpan!');document.location='../index.php?page=Absen'</script>";
}

if (isset($_GET['masukubah'])) {
$id				= $_GET['id'];
$sql = mysqli_query($koneksi,"UPDATE absen SET jam_masuk='$jam_masuk', long_masuk='$long_masuk', lang_masuk='$lang_masuk' WHERE id_user='$id_user' AND tanggal_absen='$tanggal_absen'");
echo "<script>alert('Absen Masuk berhasil dirubah!');document.location='../index.php?page=Absen'</script>";
}
 ?>