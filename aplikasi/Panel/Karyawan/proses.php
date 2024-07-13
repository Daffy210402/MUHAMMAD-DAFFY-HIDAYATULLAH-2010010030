
<?php 
include '../../conf/koneksi.php';
$nama_user		= $_POST['nama_user'];
$kontak		= $_POST['kontak'];
$alamat		= $_POST['alamat'];
$username		= $_POST['username'];
$password		= $_POST['password'];
$kebangsaan		= $_POST['kebangsaan'];
$nik		= $_POST['nik'];
$tempat_lahir		= $_POST['tempat_lahir'];
$tanggal_lahir		= date("Y-m-d", strtotime($_POST['tanggal_lahir']));
$jk		= $_POST['jk'];
$kawin		= $_POST['kawin'];
$npwp		= $_POST['npwp'];
$agama		= $_POST['agama'];
$email		= $_POST['email'];
$status_kepegawaian		= $_POST['status_kepegawaian'];
$no_pegawai		= $_POST['no_pegawai'];
$id_golongan		= $_POST['id_golongan'];
$cost_center		= $_POST['cost_center'];
$tanggal_bergabung		= date("Y-m-d", strtotime($_POST['tanggal_bergabung']));

	$file_ttd  = $_FILES['ttd']['name'];
	$tmp_ttd   = $_FILES['ttd']['tmp_name'];	
	move_uploaded_file($tmp_ttd, '../../images/Karyawan/'.$file_ttd);
	$ttd 	= $file_ttd; 		
	$level		= "Karyawan";

if (isset($_POST['tambah'])) {

$sql = mysqli_query($koneksi,"INSERT INTO user SET nama_user='$nama_user', kontak='$kontak', alamat='$alamat', username='$username', password='$password', kebangsaan='$kebangsaan', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', kawin='$kawin', npwp='$npwp', agama='$agama', email='$email', status_kepegawaian='$status_kepegawaian', no_pegawai='$no_pegawai', id_golongan='$id_golongan', cost_center='$cost_center', tanggal_bergabung='$tanggal_bergabung', tanggal_ng='$tanggal_bergabung', ttd='$ttd', level='$level'");
echo "<script>alert('Data berhasil disimpan!');document.location='../index.php?page=Karyawan'</script>";
}

if (isset($_POST['ubah'])) {
$id				= $_POST['id'];
$sql = mysqli_query($koneksi,"UPDATE user SET id_user='$id', nama_user='$nama_user', kontak='$kontak', alamat='$alamat', username='$username', password='$password', kebangsaan='$kebangsaan', nik='$nik', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', kawin='$kawin', npwp='$npwp', agama='$agama', email='$email', status_kepegawaian='$status_kepegawaian', no_pegawai='$no_pegawai', id_golongan='$id_golongan', cost_center='$cost_center', tanggal_bergabung='$tanggal_bergabung', ttd='$ttd', level='$level' WHERE id_user='$id'");
echo "<script>alert('Data berhasil dirubah!');document.location='../index.php?page=Karyawan'</script>";
}
 ?>