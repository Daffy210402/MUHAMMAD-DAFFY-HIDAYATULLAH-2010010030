
<?php 
include '../../conf/koneksi.php';
$id_user		= $_POST['id_user'];
$tanggal_skp		= date("Y-m-d");
$orientasi_pelayanan		= $_POST['orientasi_pelayanan'];
$integritas		= $_POST['integritas'];
$komitmen		= $_POST['komitmen'];
$disiplin		= $_POST['disiplin'];
$kerjasama		= $_POST['kerjasama'];
$kepemimpinan		= $_POST['kepemimpinan'];
$id_papenilai		= $_POST['id_papenilai'];
$id_ppenilai		= $_POST['id_ppenilai'];
$nilai_skp		= ($orientasi_pelayanan+$integritas+$komitmen+$disiplin+$kerjasama+$kepemimpinan)/6;

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO skp SET id_skp=NULL, id_user='$id_user', tanggal_skp='$tanggal_skp', nilai_skp='$nilai_skp', orientasi_pelayanan='$orientasi_pelayanan', integritas='$integritas', komitmen='$komitmen', disiplin='$disiplin', kerjasama='$kerjasama', kepemimpinan='$kepemimpinan', id_ppenilai='$id_ppenilai', id_papenilai='$id_papenilai'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Sasaran Kinerja Pegawai'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE skp SET id_skp='$id', id_user='$id_user', tanggal_skp='$tanggal_skp', nilai_skp='$nilai_skp', orientasi_pelayanan='$orientasi_pelayanan', integritas='$integritas', komitmen='$komitmen', disiplin='$disiplin', kerjasama='$kerjasama', kepemimpinan='$kepemimpinan', id_ppenilai='$id_ppenilai', id_papenilai='$id_papenilai' WHERE id_skp='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Sasaran Kinerja Pegawai'</script>";
}
 ?>