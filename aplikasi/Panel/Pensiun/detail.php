
<?php 
$id						= $_GET['id'];
$proses					= $_GET['proses'];

$sql = mysqli_query($koneksi,"SELECT * FROM pensiun
	JOIN user USING(id_user) WHERE id_pensiun='$id'");
while ($data = mysqli_fetch_array($sql)) {
	$nama 			 = $data['nama_pengguna'];
	$kontak 		 = $data['telp'];
}

if ($_GET['status'] == "Terima") {
include 'pesan.php';
	$sql = mysqli_query($koneksi,"UPDATE pensiun SET status_pensiun='Diterima' WHERE id_pensiun='$id'");
}

if ($_GET['status'] == "Tolak") {
include 'pesantolak.php';
	$sql = mysqli_query($koneksi,"UPDATE pensiun SET status_pensiun='Ditolak' WHERE id_pensiun='$id'");
}

if ($_GET['status'] == "Proses") {
	$sql = mysqli_query($koneksi,"UPDATE pensiun SET status_pensiun='Proses' WHERE id_pensiun='$id'");
}

echo "<script>alert('status pensiun berhasil dirubah!');document.location='index.php?page=Pensiun'</script>";
?>